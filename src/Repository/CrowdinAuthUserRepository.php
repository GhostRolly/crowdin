<?php

namespace App\Repository;

use App\Entity\CrowdinAuthUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CrowdinAuthUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method CrowdinAuthUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method CrowdinAuthUser[]    findAll()
 * @method CrowdinAuthUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CrowdinAuthUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CrowdinAuthUser::class);
    }

    // /**
    //  * @return CrowdinAuthUser[] Returns an array of CrowdinAuthUser objects
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
    public function findOneBySomeField($value): ?CrowdinAuthUser
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
