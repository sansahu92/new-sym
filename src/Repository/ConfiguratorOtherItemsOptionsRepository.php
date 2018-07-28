<?php

namespace App\Repository;

use App\Entity\ConfiguratorOtherItemsOptions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ConfiguratorOtherItemsOptions|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConfiguratorOtherItemsOptions|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConfiguratorOtherItemsOptions[]    findAll()
 * @method ConfiguratorOtherItemsOptions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConfiguratorOtherItemsOptionsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ConfiguratorOtherItemsOptions::class);
    }

//    /**
//     * @return ConfiguratorOtherItemsOptions[] Returns an array of ConfiguratorOtherItemsOptions objects
//     */
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
    public function findOneBySomeField($value): ?ConfiguratorOtherItemsOptions
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
