<?php

namespace IdleGameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@IdleGame/Default/index.html.twig');
    }

    public function loginAction()
    {
        return $this->render('@IdleGame/Default/login.html.twig');
    }

    public function transitionAction($login,$password)
    {
        return $this->render('@IdleGame/Default/transition.html.twig',array(
            'login'=> $login,
            'password'=> $password,
        ));
    }
}
