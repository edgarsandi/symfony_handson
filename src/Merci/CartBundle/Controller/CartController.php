<?php

namespace Merci\CartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CartController extends Controller
{
    public function indexAction()
    {
        return $this->render('MerciCartBundle:Default:index.html.twig');
    }
}
