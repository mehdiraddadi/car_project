<?php

namespace App\Repository;

use App\Entity\Alley;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Alley>
 *
 * @method Alley|null find($id, $lockMode = null, $lockVersion = null)
 * @method Alley|null findOneBy(array $criteria, array $orderBy = null)
 * @method Alley[]    findAll()
 * @method Alley[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlleyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Alley::class);
    }

//    /**
//     * @return Alley[] Returns an array of Alley objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Alley
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
