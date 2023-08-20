<?php

namespace App\Repository;

use App\Entity\ClaEntProduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClaEntProduit>
 *
 * @method ClaEntProduit|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClaEntProduit|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClaEntProduit[]    findAll()
 * @method ClaEntProduit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClaEntProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClaEntProduit::class);
    }

//    /**
//     * @return ClaEntProduit[] Returns an array of ClaEntProduit objects
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

//    public function findOneBySomeField($value): ?ClaEntProduit
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
