<?php

namespace App\Repository;

use App\Entity\MediaActu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MediaActu>
 *
 * @method MediaActu|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaActu|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaActu[]    findAll()
 * @method MediaActu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaActuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaActu::class);
    }

//    /**
//     * @return MediaActu[] Returns an array of MediaActu objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MediaActu
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
