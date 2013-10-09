<?php

namespace Merci\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function loginAction()
    {
        return $this->render('MerciUserBundle:Default:login.html.twig');
    }
}
