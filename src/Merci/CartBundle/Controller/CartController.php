<?php

namespace Merci\CartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Merci\CartBundle\Entity\Cart;

class CartController extends Controller
{
    public function indexAction()
    {
        return $this->render('MerciCartBundle:Default:index.html.twig');
    }

    public function addAction($id)
    {
        $product = $this->getDoctrine()
            ->getRepository('MerciCatalogBundle:Product')
            ->findOneById($id);

        if (!$product) {
            return $this->redirectAndNotify('Produto não existe');
        }

        $session = $this->getRequest()->getSession();
        $cart = $session->get('cart', new Cart());
        $cart->add($product);
        $session->set('cart', $cart);

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
