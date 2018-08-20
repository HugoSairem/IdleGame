<?php

namespace IdleGameBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use IdleGameBundle\Entity\User;
use IdleGameBundle\Entity\dataUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function saveAction(Request $request)
    {
        $entitymanager = $this->getDoctrine()->getManager();
        $iduser = $this->getUser()->getId();
        $current_data = $entitymanager->getRepository(dataUser::class)->findBy(['user' => $iduser]);
        $current_data = $current_data[0];
        $compteBanquaire = $request->request->get('compteBanquaire');
        // UNIT01
        $unit01Quantity = $request->request->get('unit01Quantity');
        $unit01Price = $request->request->get('unit01Price');
        $unit01Bonus10 = $request->request->get('unit01Bonus10');
        $unit01Bonus25 = $request->request->get('unit01Bonus25');
        $unit01Bonus50 = $request->request->get('unit01Bonus50');
        $unit01Bonus100 = $request->request->get('unit01Bonus100');
        $unit01Bonus150 = $request->request->get('unit01Bonus150');
        $unit01BonusD10 = $request->request->get('unit01BonusD10');
        $unit01BonusD25 = $request->request->get('unit01BonusD25');
        $unit01BonusD50 = $request->request->get('unit01BonusD50');
        $unit01BonusD100 = $request->request->get('unit01BonusD100');
        $unit01BonusD150 = $request->request->get('unit01BonusD150');
        $unit01GlobalBonus = $request->request->get('unit01GlobalBonus');
        $unit01GlobalDmgBonus = $request->request->get('unit01GlobalDmgBonus');
        // UNIT02
        $unit02Quantity = $request->request->get('unit02Quantity');
        $unit02Price = $request->request->get('unit02Price');
        $unit02Bonus10 = $request->request->get('unit02Bonus10');
        $unit02Bonus25 = $request->request->get('unit02Bonus25');
        $unit02Bonus50 = $request->request->get('unit02Bonus50');
        $unit02Bonus100 = $request->request->get('unit02Bonus100');
        $unit02Bonus150 = $request->request->get('unit02Bonus150');
        $unit02BonusD10 = $request->request->get('unit02BonusD10');
        $unit02BonusD25 = $request->request->get('unit02BonusD25');
        $unit02BonusD50 = $request->request->get('unit02BonusD50');
        $unit02BonusD100 = $request->request->get('unit02BonusD100');
        $unit02BonusD150 = $request->request->get('unit02BonusD150');
        $unit02GlobalBonus = $request->request->get('unit02GlobalBonus');
        $unit02GlobalDmgBonus = $request->request->get('unit02GlobalDmgBonus');
        // UNIT03
        $unit03Quantity = $request->request->get('unit03Quantity');
        $unit03Price = $request->request->get('unit03Price');
        $unit03Bonus10 = $request->request->get('unit03Bonus10');
        $unit03Bonus25 = $request->request->get('unit03Bonus25');
        $unit03Bonus50 = $request->request->get('unit03Bonus50');
        $unit03Bonus100 = $request->request->get('unit03Bonus100');
        $unit03Bonus150 = $request->request->get('unit03Bonus150');
        $unit03BonusD10 = $request->request->get('unit03BonusD10');
        $unit03BonusD25 = $request->request->get('unit03BonusD25');
        $unit03BonusD50 = $request->request->get('unit03BonusD50');
        $unit03BonusD100 = $request->request->get('unit03BonusD100');
        $unit03BonusD150 = $request->request->get('unit03BonusD150');
        $unit03GlobalBonus = $request->request->get('unit03GlobalBonus');
        $unit03GlobalDmgBonus = $request->request->get('unit03GlobalDmgBonus');
        // UNIT04
        $unit04Quantity = $request->request->get('unit04Quantity');
        $unit04Price = $request->request->get('unit04Price');
        $unit04Bonus10 = $request->request->get('unit04Bonus10');
        $unit04Bonus25 = $request->request->get('unit04Bonus25');
        $unit04Bonus50 = $request->request->get('unit04Bonus50');
        $unit04Bonus100 = $request->request->get('unit04Bonus100');
        $unit04Bonus150 = $request->request->get('unit04Bonus150');
        $unit04BonusD10 = $request->request->get('unit04BonusD10');
        $unit04BonusD25 = $request->request->get('unit04BonusD25');
        $unit04BonusD50 = $request->request->get('unit04BonusD50');
        $unit04BonusD100 = $request->request->get('unit04BonusD100');
        $unit04BonusD150 = $request->request->get('unit04BonusD150');
        $unit04GlobalBonus = $request->request->get('unit01GlobalBonus');
        $unit04GlobalDmgBonus = $request->request->get('unit01GlobalDmgBonus');
        // UNIT05
        $unit05Quantity = $request->request->get('unit05Quantity');
        $unit05Price = $request->request->get('unit05Price');
        $unit05Bonus10 = $request->request->get('unit05Bonus10');
        $unit05Bonus25 = $request->request->get('unit05Bonus25');
        $unit05Bonus50 = $request->request->get('unit05Bonus50');
        $unit05Bonus100 = $request->request->get('unit05Bonus100');
        $unit05Bonus150 = $request->request->get('unit05Bonus150');
        $unit05BonusD10 = $request->request->get('unit05BonusD10');
        $unit05BonusD25 = $request->request->get('unit05BonusD25');
        $unit05BonusD50 = $request->request->get('unit05BonusD50');
        $unit05BonusD100 = $request->request->get('unit05BonusD100');
        $unit05BonusD150 = $request->request->get('unit05BonusD150');
        $unit05GlobalBonus = $request->request->get('unit05GlobalBonus');
        $unit05GlobalDmgBonus = $request->request->get('unit05GlobalDmgBonus');
        // UNIT06
        $unit06Quantity = $request->request->get('unit06Quantity');
        $unit06Price = $request->request->get('unit06Price');
        $unit06Bonus10 = $request->request->get('unit06Bonus10');
        $unit06Bonus25 = $request->request->get('unit06Bonus25');
        $unit06Bonus50 = $request->request->get('unit06Bonus50');
        $unit06Bonus100 = $request->request->get('unit06Bonus100');
        $unit06Bonus150 = $request->request->get('unit06Bonus150');

        $unit06BonusD10 = $request->request->get('unit06BonusD10');
        $unit06BonusD25 = $request->request->get('unit06BonusD25');
        $unit06BonusD50 = $request->request->get('unit06BonusD50');
        $unit06BonusD100 = $request->request->get('unit06BonusD100');
        $unit06BonusD150 = $request->request->get('unit06BonusD150');

        $unit06GlobalBonus = $request->request->get('unit06GlobalBonus');
        $unit06GlobalDmgBonus = $request->request->get('unit06GlobalDmgBonus');


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
        //------- UNIT03
        $current_data->setUnit03Quantity($unit03Quantity);
        $current_data->setUnit03Price($unit03Price);
        //--BonusIncome
        $current_data->setUnit03Bonus10($unit03Bonus10);
        $current_data->setUnit03Bonus25($unit03Bonus25);
        $current_data->setUnit03Bonus50($unit03Bonus50);
        $current_data->setUnit03Bonus100($unit03Bonus100);
        $current_data->setUnit03Bonus150($unit03Bonus150);
        //--BonusDegats
        $current_data->setUnit03BonusD10($unit03BonusD10);
        $current_data->setUnit03BonusD25($unit03BonusD25);
        $current_data->setUnit03BonusD50($unit03BonusD50);
        $current_data->setUnit03BonusD100($unit03BonusD100);
        $current_data->setUnit03BonusD150($unit03BonusD150);
        //--GlobalBonus
        $current_data->setUnit03GlobalBonus($unit03GlobalBonus);
        $current_data->setUnit03GlobalDmgBonus($unit03GlobalDmgBonus);
        //------- UNIT04
        $current_data->setUnit04Quantity($unit04Quantity);
        $current_data->setUnit04Price($unit04Price);
        //--BonusIncome
        $current_data->setUnit04Bonus10($unit04Bonus10);
        $current_data->setUnit04Bonus25($unit04Bonus25);
        $current_data->setUnit04Bonus50($unit04Bonus50);
        $current_data->setUnit04Bonus100($unit04Bonus100);
        $current_data->setUnit04Bonus150($unit04Bonus150);
        //--BonusDegats
        $current_data->setUnit04BonusD10($unit04BonusD10);
        $current_data->setUnit04BonusD25($unit04BonusD25);
        $current_data->setUnit04BonusD50($unit04BonusD50);
        $current_data->setUnit04BonusD100($unit04BonusD100);
        $current_data->setUnit04BonusD150($unit04BonusD150);
        //--GlobalBonus
        $current_data->setUnit04GlobalBonus($unit04GlobalBonus);
        $current_data->setUnit04GlobalDmgBonus($unit04GlobalDmgBonus);

        //------- UNIT05
        $current_data->setUnit05Quantity($unit05Quantity);
        $current_data->setUnit05Price($unit05Price);
        //--BonusIncome
        $current_data->setUnit05Bonus10($unit05Bonus10);
        $current_data->setUnit05Bonus25($unit05Bonus25);
        $current_data->setUnit05Bonus50($unit05Bonus50);
        $current_data->setUnit05Bonus100($unit05Bonus100);
        $current_data->setUnit05Bonus150($unit05Bonus150);
        //--BonusDegats
        $current_data->setUnit05BonusD10($unit05BonusD10);
        $current_data->setUnit05BonusD25($unit05BonusD25);
        $current_data->setUnit05BonusD50($unit05BonusD50);
        $current_data->setUnit05BonusD100($unit05BonusD100);
        $current_data->setUnit05BonusD150($unit05BonusD150);
        //--GlobalBonus
        $current_data->setUnit05GlobalBonus($unit05GlobalBonus);
        $current_data->setUnit05GlobalDmgBonus($unit05GlobalDmgBonus);

        //------- UNIT06
        $current_data->setUnit06Quantity($unit06Quantity);
        $current_data->setUnit06Price($unit06Price);
        //--BonusIncome
        $current_data->setUnit06Bonus10($unit06Bonus10);
        $current_data->setUnit06Bonus25($unit06Bonus25);
        $current_data->setUnit06Bonus50($unit06Bonus50);
        $current_data->setUnit06Bonus100($unit06Bonus100);
        $current_data->setUnit06Bonus150($unit06Bonus150);
        //--BonusDegats
        $current_data->setUnit06BonusD10($unit06BonusD10);
        $current_data->setUnit06BonusD25($unit06BonusD25);
        $current_data->setUnit06BonusD50($unit06BonusD50);
        $current_data->setUnit06BonusD100($unit06BonusD100);
        $current_data->setUnit06BonusD150($unit06BonusD150);
        //--GlobalBonus
        $current_data->setUnit06GlobalBonus($unit06GlobalBonus);
        $current_data->setUnit06GlobalDmgBonus($unit06GlobalDmgBonus);

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
        $current_data=$current_data[0];

        // Vérification de l'existence d'une sauvegarde liée au joueur
        if (!$current_data) {
            $dataUser = new dataUser();// Création d'une sauvegarde si inexistante
            $dataUser->setUser($current_user);
            $dataUser->setAmountMoney(0);
            $entitymanager->persist($dataUser);
            $entitymanager->flush();
        } else {
            $comteBanquaire=$current_data->getAmountMoney();


            $unit01Quantity=$current_data->getUnit01Quantity();
            $unit01Price=$current_data->getUnit01Price();
            $unit01Bonus10 = $current_data->getUnit01Bonus10();
            $unit01Bonus25 = $current_data->getUnit01Bonus25();
            $unit01Bonus50 = $current_data->getUnit01Bonus50();
            $unit01Bonus100 = $current_data->getUnit01Bonus100();
            $unit01Bonus150 = $current_data->getUnit01Bonus150();
            $unit01BonusD10 = $current_data->getUnit01Bonus10();
            $unit01BonusD25 = $current_data->getUnit01Bonus25();
            $unit01BonusD50 = $current_data->getUnit01Bonus50();
            $unit01BonusD100 = $current_data->getUnit01Bonus100();
            $unit01BonusD150 = $current_data->getUnit01Bonus150();

            $unit02Quantity=$current_data->getUnit02Quantity();
            $unit02Price=$current_data->getUnit02Price();
            $unit02Bonus10 = $current_data->getUnit02Bonus10();
            $unit02Bonus25 = $current_data->getUnit02Bonus25();
            $unit02Bonus50 = $current_data->getUnit02Bonus50();
            $unit02Bonus100 = $current_data->getUnit02Bonus100();
            $unit02Bonus150 = $current_data->getUnit02Bonus150();
            $unit02BonusD10 = $current_data->getUnit02BonusD10();
            $unit02BonusD25 = $current_data->getUnit02BonusD25();
            $unit02BonusD50 = $current_data->getUnit02BonusD50();
            $unit02BonusD100 = $current_data->getUnit02BonusD100();
            $unit02BonusD150 = $current_data->getUnit02BonusD150();

            $unit03Quantity=$current_data->getUnit03Quantity();
            $unit03Price=$current_data->getUnit03Price();
            $unit03Bonus10 = $current_data->getUnit03Bonus10();
            $unit03Bonus25 = $current_data->getUnit03Bonus25();
            $unit03Bonus50 = $current_data->getUnit03Bonus50();
            $unit03Bonus100 = $current_data->getUnit03Bonus100();
            $unit03Bonus150 = $current_data->getUnit03Bonus150();

            $unit04Quantity=$current_data->getUnit04Quantity();
            $unit04Price=$current_data->getUnit04Price();
            $unit04Bonus10 = $current_data->getUnit04Bonus10();
            $unit04Bonus25 = $current_data->getUnit04Bonus25();
            $unit04Bonus50 = $current_data->getUnit04Bonus50();
            $unit04Bonus100 = $current_data->getUnit04Bonus100();
            $unit04Bonus150 = $current_data->getUnit04Bonus150();

            $unit05Quantity=$current_data->getUnit05Quantity();
            $unit05Price=$current_data->getUnit05Price();
            $unit05Bonus10 = $current_data->getUnit05Bonus10();
            $unit05Bonus25 = $current_data->getUnit05Bonus25();
            $unit05Bonus50 = $current_data->getUnit05Bonus50();
            $unit05Bonus100 = $current_data->getUnit05Bonus100();
            $unit05Bonus150 = $current_data->getUnit02Bonus150();

            $unit06Quantity=$current_data->getUnit06Quantity();
            $unit06Price=$current_data->getUnit06Price();
            $unit06Bonus10 = $current_data->getUnit06Bonus10();
            $unit06Bonus25 = $current_data->getUnit06Bonus25();
            $unit06Bonus50 = $current_data->getUnit06Bonus50();
            $unit06Bonus100 = $current_data->getUnit06Bonus100();
            $unit06Bonus150 = $current_data->getUnit06Bonus150();


            return $this->render('@IdleGame/Default/index.html.twig',array(
                'compteBanquaire'=> $comteBanquaire,
                //UNIT01
                'unit01Quantity'=> $unit01Quantity,
                'unit01Price'=> $unit01Price,
                'unit01Bonus10' => $unit01Bonus10,
                'unit01Bonus25' => $unit01Bonus25,
                'unit01Bonus50' => $unit01Bonus50,
                'unit01Bonus100' => $unit01Bonus100,
                'unit01Bonus150' => $unit01Bonus150,
                'unit01BonusD10' => $unit01BonusD10,
                'unit01BonusD25' => $unit01BonusD25,
                'unit01BonusD50' => $unit01BonusD50,
                'unit01BonusD100' => $unit01BonusD100,
                'unit01BonusD150' => $unit01BonusD150,

                //UNIT02
                'unit02Quantity'=> $unit02Quantity,
                'unit02Price'=> $unit02Price,
                'unit02Bonus10' => $unit02Bonus10,
                'unit02Bonus25' => $unit02Bonus25,
                'unit02Bonus50' => $unit02Bonus50,
                'unit02Bonus100' => $unit02Bonus100,
                'unit02Bonus150' => $unit02Bonus150,
                'unit02BonusD10' => $unit02BonusD10,
                'unit02BonusD25' => $unit02BonusD25,
                'unit02BonusD50' => $unit02BonusD50,
                'unit02BonusD100' => $unit02BonusD100,
                'unit02BonusD150' => $unit02BonusD150,
                //UNIT03
                'unit03Quantity'=> $unit03Quantity,
                'unit03Price'=> $unit03Price,
                'unit03Bonus10' => $unit03Bonus10,
                'unit03Bonus25' => $unit03Bonus25,
                'unit03Bonus50' => $unit03Bonus50,
                'unit03Bonus100' => $unit03Bonus100,
                'unit03Bonus150' => $unit03Bonus150,
                //UNIT04
                'unit04Quantity'=> $unit04Quantity,
                'unit04Price'=> $unit04Price,
                'unit04Bonus10' => $unit04Bonus10,
                'unit04Bonus25' => $unit04Bonus25,
                'unit04Bonus50' => $unit04Bonus50,
                'unit04Bonus100' => $unit04Bonus100,
                'unit04Bonus150' => $unit04Bonus150,
                //UNIT05
                'unit05Quantity'=> $unit05Quantity,
                'unit05Price'=> $unit05Price,
                'unit05Bonus10' => $unit05Bonus10,
                'unit05Bonus25' => $unit05Bonus25,
                'unit05Bonus50' => $unit05Bonus50,
                'unit05Bonus100' => $unit05Bonus100,
                'unit05Bonus150' => $unit05Bonus150,
                //UNIT04
                'unit06Quantity'=> $unit06Quantity,
                'unit06Price'=> $unit06Price,
                'unit06Bonus10' => $unit06Bonus10,
                'unit06Bonus25' => $unit06Bonus25,
                'unit06Bonus50' => $unit06Bonus50,
                'unit06Bonus100' => $unit06Bonus100,
                'unit06Bonus150' => $unit06Bonus150,

            ));

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
