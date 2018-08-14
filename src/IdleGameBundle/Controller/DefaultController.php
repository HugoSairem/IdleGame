<?php

namespace IdleGameBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $this->denyAccessUnlessGranted("ROLE_USER");

        return $this->render('@IdleGame/Default/index.html.twig');
    }

    public function upgradeControlAction()
    {
        return $this->render('@IdleGame/Default/upgrade.html.twig');
    }

}
