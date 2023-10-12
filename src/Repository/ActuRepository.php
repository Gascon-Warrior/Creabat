<?php

namespace App\Repository;

use App\Entity\Actu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Actu>
 *
 * @method Actu|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actu|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actu[]    findAll()
 * @method Actu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actu::class);
    }

    public function findAllActusWithImages()
    {
        return $this->createQueryBuilder('a')
            ->select('a', 'm') // Sélectionnez l'actualité (c) et la photo (m)
            ->leftJoin('a.media', 'm')
            ->orderBy('a.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findLastActus()
    {
        return $this->createQueryBuilder('a')
        ->select('a', 'm') // Sélectionnez l'actualité (a) et la photo (m)
        ->leftJoin('a.media', 'm')
        ->orderBy('a.createdAt', 'DESC') // Tri par la propriété createdAt en ordre descendant
        ->setMaxResults(3)
        ->getQuery()
        ->getResult();
    }

    public function findActusPaginated(int $page, string $slug, int $limit = 4): array
    {
        $limit = abs($limit);

        $result = [];
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select('a', 'm')
            ->from('App\Entity\Actu', 'a')
            ->join('a.media', 'm')
            ->orderBy('a.created_at', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult(($page * $limit) - $limit);
           
        $paginator = new Paginator($query);
        $data = $paginator->getQuery()->getResult();
            
        
        if(empty($data)){
            return $result; 
        }
        // On calcule le nombre de pages
        $pages = ceil($paginator->count() / $limit);

        //On remplit le tableau
        $result['data'] = $data;
        $result['pages'] = $pages;
        $result['page'] = $page; 
        $result['limit'] = $limit; 
        
        return $result;
    }
    
    /*/**
    * @return Actu[] Returns an array of Actu objects
    */
    /*public function findByDate($value): array
   {
       return $this->createQueryBuilder('a')
           ->andWhere('a.exampleField = :val')
          ->setParameter('val', $value)
           ->orderBy('a.created_at', 'ASC')
           ->setMaxResults(3)
           ->getQuery()
           ->getResult()
       ;
   }
    */

    //Retourne les trois dernières actualités
    public function findLastActu($limit = 3)
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.created_at', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }





    //    public function findOneBySomeField($value): ?Actu
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
