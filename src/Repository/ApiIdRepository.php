<?php

namespace App\Repository;

use App\Entity\ApiId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ApiId|null find($id, $lockMode = null, $lockVersion = null)
 * @method ApiId|null findOneBy(array $criteria, array $orderBy = null)
 * @method ApiId[]    findAll()
 * @method ApiId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApiIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ApiId::class);
    }

    // /**
    //  * @return ApiId[] Returns an array of ApiId objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ApiId
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
