<?php

namespace App\Repository;

use App\Entity\ConfiguratorItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ConfiguratorItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConfiguratorItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConfiguratorItems[]    findAll()
 * @method ConfiguratorItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConfiguratorItemsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ConfiguratorItems::class);
    }

//    /**
//     * @return ConfiguratorItems[] Returns an array of ConfiguratorItems objects
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
    public function findOneBySomeField($value): ?ConfiguratorItems
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
