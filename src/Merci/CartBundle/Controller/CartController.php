<?php

namespace Merci\CartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CartController extends Controller
{
    public function indexAction()
    {
        return $this->render('MerciCartBundle:Default:index.html.twig');
    }

    public function addAction($id)
    {
        return $this->render('MerciCartBundle:Default:index.html.twig');
    }

    public function deleteAction($id)
    {
        return $this->render('MerciCartBundle:Default:index.html.twig');
    }

    public function updateAction()
    {
        return $this->render('MerciCartBundle:Default:index.html.twig');
    }
}
