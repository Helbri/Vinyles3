<?php

namespace App\Repository;

use App\Entity\ClaEntArtiste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClaEntArtiste>
 *
 * @method ClaEntArtiste|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClaEntArtiste|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClaEntArtiste[]    findAll()
 * @method ClaEntArtiste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClaEntArtisteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClaEntArtiste::class);
    }

//    /**
//     * @return ClaEntArtiste[] Returns an array of ClaEntArtiste objects
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

//    public function findOneBySomeField($value): ?ClaEntArtiste
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
