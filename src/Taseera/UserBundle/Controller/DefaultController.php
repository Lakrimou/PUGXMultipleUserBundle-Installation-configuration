<?php

namespace Taseera\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TaseeraUserBundle:Default:index.html.twig');
    }
}
