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
use Symfony\Component\HttpClient\HttpClient;

class LandingPageController extends AbstractController
{
    
    public function apiOrder(Order $order)
    {
  
        $orderArray = 
        [
        'order'=>
        [
            'id' => $order->getId(),
            'product' => $order->getProduct()->getName(),
            'payment_method'=> "stripe",
            'status' => 'WAITING',
            'client' => 
            [
                'firstname' => $order->getUser()->getFirstName(),
                'lastname' => $order->getUser()->getLastName(),
                'email'=> $order->getUser()->getEmail()
            ],
            'addresses'=> 
            [
                'billing' => 
                [
                    'address_line1' => $order->getUser()->getAddress(),
                    "address_line2"=> $order->getUser()->getAdditionalAddress(),
                    "city"=> $order->getUser()->getCity(),
                    "zipcode"=> $order->getUser()->getZipCode(),
                    "country"=> $order->getUser()->getCountry(),
                    "phone"=> $order->getUser()->getPhoneNumber()
                ],
                'shipping'=>
                [
                    "address_line1"=> '1, rue du test',
                    "address_line2"=> "3ème étage",
                    "city"=> "Lyon",
                    "zipcode"=> "69000",
                    "country"=> "France",
                    "phone"=> "string"
                ]
            ] 
        ]   
        ];
 

        $client = HttpClient::create();
        $response = $client->request('POST', 'https://api-commerce.simplon-roanne.com/order', [
            'headers' => [
                'Accept' => 'application/json', //format de ce qu'on envoit
                'Content-Type'=> 'application/json', //format retour de la reponse
                'Authorization' => 'Bearer mJxTXVXMfRzLg6ZdhUhM4F6Eutcm1ZiPk4fNmvBMxyNR4ciRsc8v0hOmlzA0vTaX'
            ],
            'body' => json_encode($orderArray)
        ]);
        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
        dd($content);

    } 
    
    
    
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

            $this->apiOrder($entity['Order']);
            
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
