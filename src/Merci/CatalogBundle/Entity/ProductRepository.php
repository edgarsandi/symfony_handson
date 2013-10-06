<?php

namespace Merci\CatalogBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function searchByName($name)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT p
                FROM MerciCatalogBundle:Product p
                WHERE p.name LIKE :name')
            ->setParameter('name', '%'.$name.'%')
            ->getResult();
    }
}
