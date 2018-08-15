<?php

namespace IdleGameBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use IdleGameBundle\Entity\User;
use IdleGameBundle\Entity\dataUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        $entitymanager = $this->getDoctrine()->getManager();
        $iduser = $this->getUser()->getId();
        $current_user = $entitymanager->getRepository(User::class)->find($iduser);
        $current_data = $entitymanager->getRepository(dataUser::class)->findBy(['user' => $iduser]);

        if (!$current_data){
            $dataUser = new dataUser();
            $dataUser->setUser($current_user);
            $dataUser->setAmountMoney(0);
            $entitymanager->persist($dataUser);
            $entitymanager->flush();
        }

        return $this->render('@IdleGame/Default/index.html.twig');
    }

    public function upgradeControlAction()
    {
        return $this->render('@IdleGame/Default/upgrade.html.twig');
    }

    public function userDataSave()
    {
        $idUser = $this->getUser()->getId();
        return $this->render('@IdleGame/Default/index.html.twig');
    }

}
