<?php

namespace App\Repository;

use App\Entity\CrowdinUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CrowdinUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method CrowdinUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method CrowdinUser[]    findAll()
 * @method CrowdinUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CrowdinUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CrowdinUser::class);
    }

    // /**
    //  * @return CrowdinUser[] Returns an array of CrowdinUser objects
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
    public function findOneBySomeField($value): ?CrowdinUser
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
