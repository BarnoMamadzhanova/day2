<?php

namespace App\Repository;

use App\Entity\GroupTours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GroupTours>
 *
 * @method GroupTours|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupTours|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupTours[]    findAll()
 * @method GroupTours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupToursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupTours::class);
    }

//    /**
//     * @return GroupTours[] Returns an array of GroupTours objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GroupTours
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
