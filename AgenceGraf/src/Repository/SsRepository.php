<?php

namespace App\Repository;

use App\Entity\Ss;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Ss|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ss|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ss[]    findAll()
 * @method Ss[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ss::class);
    }

    // /**
    //  * @return Ss[] Returns an array of Ss objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ss
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
