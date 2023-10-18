<?php

namespace App\Repository;

use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Project>
 *
 * @method Project|null find($id, $lockMode = null, $lockVersion = null)
 * @method Project|null findOneBy(array $criteria, array $orderBy = null)
 * @method Project[]    findAll()
 * @method Project[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Project::class);
    }

    public function findAllprojectsWithImages()
    {
        return $this->createQueryBuilder('p')
            ->select('p', 'm') // Sélectionnez la catégorie (c) et la photo (m)
            ->leftJoin('p.media', 'm')
            ->orderBy('p.id', 'DESC')
            ->getQuery()
            ->getResult();
    }


    public function findProjectBySlug($slug)
    {
        return $this->createQueryBuilder('p')
            ->select('p', 'm') // Sélectionnez la catégorie (c) et la photo (m)
            ->leftJoin('p.media', 'm')
            ->where('p.slug = :slug')            
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getResult();
    }


    public function findProjetcsPaginated(int  $page, string $slug, int $limit = 6): array
    {   
        $limit = abs($limit);

        $result = [];

        return $result;
    }

    public function findProjectsPaginated(int $page, string $slug, int $limit = 4): array
    {
        $limit = abs($limit);

        $result = [];
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select('p', 'm')
            ->from('App\Entity\Project', 'p')
            ->join('p.media', 'm')
            ->orderBy('p.date', 'DESC')
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
//    /**
//     * @return Project[] Returns an array of Project objects
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

//    public function findOneBySomeField($value): ?Project
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
