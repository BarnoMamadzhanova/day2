<?php

namespace App\Repository;

use App\Entity\PrivateTours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PrivateTours>
 *
 * @method PrivateTours|null find($id, $lockMode = null, $lockVersion = null)
 * @method PrivateTours|null findOneBy(array $criteria, array $orderBy = null)
 * @method PrivateTours[]    findAll()
 * @method PrivateTours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrivateToursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PrivateTours::class);
    }

//    /**
//     * @return PrivateTours[] Returns an array of PrivateTours objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PrivateTours
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
