<?php

namespace App\Repository;

use App\Entity\ClaEntStyle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClaEntStyle>
 *
 * @method ClaEntStyle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClaEntStyle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClaEntStyle[]    findAll()
 * @method ClaEntStyle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClaEntStyleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClaEntStyle::class);
    }

//    /**
//     * @return ClaEntStyle[] Returns an array of ClaEntStyle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ClaEntStyle
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
