<?php

namespace App\Repository;

use App\Entity\CrowdinProject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CrowdinProject|null find($id, $lockMode = null, $lockVersion = null)
 * @method CrowdinProject|null findOneBy(array $criteria, array $orderBy = null)
 * @method CrowdinProject[]    findAll()
 * @method CrowdinProject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CrowdinProjectRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CrowdinProject::class);
    }

    // /**
    //  * @return CrowdinProject[] Returns an array of CrowdinProject objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CrowdinProject
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
