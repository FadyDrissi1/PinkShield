<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * Recherche les produits par nom ou description
     */
    public function searchProducts(?string $query, ?string $sort): array
    {
        $qb = $this->createQueryBuilder('p');

        if ($query) {
            $qb->andWhere('p.nom LIKE :val OR p.description LIKE :val')
               ->setParameter('val', '%' . $query . '%');
        }

        if ($sort === 'price_asc') {
            $qb->orderBy('p.prix', 'ASC');
        } elseif ($sort === 'price_desc') {
            $qb->orderBy('p.prix', 'DESC');
        } else {
            $qb->orderBy('p.id', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }
}