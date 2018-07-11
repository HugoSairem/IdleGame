<?php

namespace filtresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('filtresBundle:Default:index.html.twig');
    }
}
