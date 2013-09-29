<?php

namespace Merci\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogController extends Controller
{
    public function indexAction()
    {
        return $this->render('MerciCatalogBundle:Catalog:index.html.twig');
    }

    public function productAction()
    {
        return $this->render('MerciCatalogBundle:Catalog:product.html.twig');
    }
}
