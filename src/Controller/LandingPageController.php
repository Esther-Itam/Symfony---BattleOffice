<?php

namespace App\Controller;

use App\Entity\Delivery;
use App\Entity\Order;
use App\Entity\Product;
use App\Entity\User;
use App\Form\OrderType;
use App\Manager\OrderManager;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\UserType;
use App\Form\DeliveryType;
use App\Form\ProductType;
use DateTime;

class LandingPageController extends AbstractController
{
    /**
     * @Route("/", name="landing_page")
     * @throws \Exception
     */
    public function index(Request $request): Response
    {
        $products = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();

        $entity = [
            'User' => new User,
            'Delivery' => new Delivery,
            'Product' => new Product,
            'Order' => new Order,
        ];

        $form = $this->createFormBuilder($entity, ['csrf_protection' => false,])
            ->add('User', UserType::class)
            ->add('Delivery', DeliveryType::class)
            ->add('Product', ProductType::class)
            ->add('Order', OrderType::class)
            ->getForm();

       //dd($request->request);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($entity['User']);
            $entityManager->flush();

            $entityManager->persist($entity['Delivery']);
            $entityManager->flush();

            $entity["Order"]->setUser($entity['User']);

            $product = $entityManager->find(Product::class, $request->get("product_id"));
            $entity["Order"]->setProduct($product);

            $entity["Order"]->setCreatedAt(new DateTime());

            $entityManager->persist($entity['Order']);
            $entityManager->flush();
            dd($entity["Order"]);
            return $this->redirectToRoute('landing_page');
        }    

        return $this->render('landing_page/index_new.html.twig', [
            'Products' => $products,
            'entity' => [
                'User' => new User,
                'Delivery' => new Delivery,
                'Product' => new Product,
                'Order' => new Order,
            ],
            'form' => $form->createView(),

        ]);
    }
    
    /**
     * @Route("/confirmation", name="confirmation")
     */
    public function confirmation()
    {

        return $this->render('landing_page/confirmation.html.twig', [

        ]);
    }
}
