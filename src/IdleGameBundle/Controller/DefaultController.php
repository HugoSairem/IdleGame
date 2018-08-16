<?php

namespace IdleGameBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use IdleGameBundle\Entity\User;
use IdleGameBundle\Entity\dataUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function saveAction($compteBanquaire,
                               $unit01Quantity, $unit01Price,
                               $unit01Bonus10, $unit01Bonus25, $unit01Bonus50, $unit01Bonus100, $unit01Bonus150,
                               $unit01BonusD10, $unit01BonusD25, $unit01BonusD50, $unit01BonusD100, $unit01BonusD150,
                               $unit01GlobalBonus,$unit01GlobalDmgBonus,
                               $unit02Quantity, $unit02Price,
                               $unit02Bonus10, $unit02Bonus25, $unit02Bonus50, $unit02Bonus100, $unit02Bonus150,
                               $unit02BonusD10, $unit02BonusD25, $unit02BonusD50, $unit02BonusD100, $unit02BonusD150,
                               $unit02GlobalBonus,$unit02GlobalDmgBonus )
    {
        $entitymanager = $this->getDoctrine()->getManager();
        $iduser = $this->getUser()->getId();
        $current_data = $entitymanager->getRepository(dataUser::class)->findBy(['user' => $iduser]);
        $current_data = $current_data[0];
        $current_data->setAmountMoney($compteBanquaire);
        //------- UNIT01
        $current_data->setUnit01Quantity($unit01Quantity);
        $current_data->setUnit01Price($unit01Price);
        //--BonusIncome
        $current_data->setUnit01Bonus10($unit01Bonus10);
        $current_data->setUnit01Bonus25($unit01Bonus25);
        $current_data->setUnit01Bonus50($unit01Bonus50);
        $current_data->setUnit01Bonus100($unit01Bonus100);
        $current_data->setUnit01Bonus150($unit01Bonus150);
        //--BonusDegats
        $current_data->setUnit01BonusD10($unit01BonusD10);
        $current_data->setUnit01BonusD25($unit01BonusD25);
        $current_data->setUnit01BonusD50($unit01BonusD50);
        $current_data->setUnit01BonusD100($unit01BonusD100);
        $current_data->setUnit01BonusD150($unit01BonusD150);
        //--GlobalBonus
        $current_data->setUnit01GlobalBonus($unit01GlobalBonus);
        $current_data->setUnit01GlobalDmgBonus($unit01GlobalDmgBonus);
        //------- UNIT02
        $current_data->setUnit02Quantity($unit02Quantity);
        $current_data->setUnit02Price($unit02Price);
        //--BonusIncome
        $current_data->setUnit02Bonus10($unit02Bonus10);
        $current_data->setUnit02Bonus25($unit02Bonus25);
        $current_data->setUnit02Bonus50($unit02Bonus50);
        $current_data->setUnit02Bonus100($unit02Bonus100);
        $current_data->setUnit02Bonus150($unit02Bonus150);
        //--BonusDegats
        $current_data->setUnit02BonusD10($unit02BonusD10);
        $current_data->setUnit02BonusD25($unit02BonusD25);
        $current_data->setUnit02BonusD50($unit02BonusD50);
        $current_data->setUnit02BonusD100($unit02BonusD100);
        $current_data->setUnit02BonusD150($unit02BonusD150);
        //--GlobalBonus
        $current_data->setUnit02GlobalBonus($unit02GlobalBonus);
        $current_data->setUnit02GlobalDmgBonus($unit02GlobalDmgBonus);
        $entitymanager->persist($current_data);
        $entitymanager->flush();

        return $this->render('@IdleGame/Default/save.html.twig');
    }

    public function indexAction()
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        $entitymanager = $this->getDoctrine()->getManager();
        $iduser = $this->getUser()->getId();
        $current_user = $entitymanager->getRepository(User::class)->find($iduser);
        $current_data = $entitymanager->getRepository(dataUser::class)->findBy(['user' => $iduser]);

        // Vérification de l'existence d'une sauvegarde liée au joueur
        if (!$current_data) {
            $dataUser = new dataUser();// Création d'une sauvegarde si inexistante
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
