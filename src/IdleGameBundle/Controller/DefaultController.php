<?php

namespace IdleGameBundle\Controller;

use IdleGameBundle\Entity\categoriesForum;
use IdleGameBundle\Form\topicType;
use IdleGameBundle\Form\postType;
use Symfony\Component\HttpFoundation\Request;
use IdleGameBundle\Entity\User;
use IdleGameBundle\Entity\dataUser;
use IdleGameBundle\Entity\topic;
use IdleGameBundle\Entity\post;
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
        $ennemyDoorLife = $request->request->get('ennemyDoorLife');
        $ennemyDoorBLife = $request->request->get('ennemyDoorBLife');
        $ennemyDoorLevel = $request->request->get('ennemyDoorLevel');
        $ennemyTroopsLife = $request->request->get('ennemyTroopsLife');
        $ennemyTroopsBLife = $request->request->get('ennemyTroopsBLife');
        $ennemyTroopsLevel = $request->request->get('ennemyTroopsLevel');
        $ennemyBossLife = $request->request->get('ennemyBossLife');
        $ennemyBossBLife = $request->request->get('ennemyBossBLife');
        $ennemyBossLevel = $request->request->get('ennemyBossLevel');
        $ennemyBossBonusKill = $request->request->get('ennemyBossBonusKill');
        $currentStage = $request->request->get('currentStage');

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
        $current_data->setEnnemyDoorLife($ennemyDoorLife);
        $current_data->setEnnemyDoorBLife($ennemyDoorBLife);
        $current_data->setEnnemyDoorLevel($ennemyDoorLevel);
        $current_data->setEnnemyTroopsLife($ennemyTroopsLife);
        $current_data->setEnnemyTroopsBLife($ennemyTroopsBLife);
        $current_data->setEnnemyTroopsLevel($ennemyTroopsLevel);
        $current_data->setEnnemyBossLife($ennemyBossLife);
        $current_data->setEnnemyBossBLife($ennemyBossBLife);
        $current_data->setEnnemyBossLevel($ennemyBossLevel);
        $current_data->setEnnemyBossBonusKill($ennemyBossBonusKill);
        $current_data->setCurrentStage($currentStage);
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
        $current_data = $current_data[0];

        // Vérification de l'existence d'une sauvegarde liée au joueur
        if (!$current_data) {
            $dataUser = new dataUser();// Création d'une sauvegarde si inexistante
            $dataUser->setUser($current_user);
            $dataUser->setAmountMoney(0);

            $entitymanager->persist($dataUser);
            $entitymanager->flush();
        }

        $comteBanquaire = $current_data->getAmountMoney();

        $ennemyDoorLife = $current_data->getEnnemyDoorLife();
        $ennemyDoorBLife = $current_data->getEnnemyDoorBLife();
        $ennemyDoorLevel = $current_data->getEnnemyDoorLevel();
        $ennemyTroopsLife = $current_data->getEnnemyTroopsLife();
        $ennemyTroopsBLife = $current_data->getEnnemyTroopsBLife();
        $ennemyTroopsLevel = $current_data->getEnnemyTroopsLevel();
        $ennemyBossLife = $current_data->getEnnemyBossLife();
        $ennemyBossBLife = $current_data->getEnnemyBossBLife();
        $ennemyBossLevel = $current_data->getEnnemyBossLevel();
        $ennemyBossBonusKill = $current_data->getEnnemyBossBonusKill();
        $currentStage = $current_data->getCurrentStage();

        $unit01Quantity = $current_data->getUnit01Quantity();
        $unit01Price = $current_data->getUnit01Price();
        $unit01Bonus10 = $current_data->getUnit01Bonus10();
        $unit01Bonus25 = $current_data->getUnit01Bonus25();
        $unit01Bonus50 = $current_data->getUnit01Bonus50();
        $unit01Bonus100 = $current_data->getUnit01Bonus100();
        $unit01Bonus150 = $current_data->getUnit01Bonus150();
        $unit01BonusD10 = $current_data->getUnit01BonusD10();
        $unit01BonusD25 = $current_data->getUnit01BonusD25();
        $unit01BonusD50 = $current_data->getUnit01BonusD50();
        $unit01BonusD100 = $current_data->getUnit01BonusD100();
        $unit01BonusD150 = $current_data->getUnit01BonusD150();
        $unit01GlobalBonus = $current_data->getUnit01GlobalBonus();
        $unit01GlobalDmgBonus = $current_data->getUnit01GlobalDmgBonus();

        $unit02Quantity = $current_data->getUnit02Quantity();
        $unit02Price = $current_data->getUnit02Price();
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
        $unit02GlobalBonus = $current_data->getUnit02GlobalBonus();
        $unit02GlobalDmgBonus = $current_data->getUnit02GlobalDmgBonus();

        $unit03Quantity = $current_data->getUnit03Quantity();
        $unit03Price = $current_data->getUnit03Price();
        $unit03Bonus10 = $current_data->getUnit03Bonus10();
        $unit03Bonus25 = $current_data->getUnit03Bonus25();
        $unit03Bonus50 = $current_data->getUnit03Bonus50();
        $unit03Bonus100 = $current_data->getUnit03Bonus100();
        $unit03Bonus150 = $current_data->getUnit03Bonus150();
        $unit03BonusD10 = $current_data->getUnit03BonusD10();
        $unit03BonusD25 = $current_data->getUnit03BonusD25();
        $unit03BonusD50 = $current_data->getUnit03BonusD50();
        $unit03BonusD100 = $current_data->getUnit03BonusD100();
        $unit03BonusD150 = $current_data->getUnit03BonusD150();
        $unit03GlobalBonus = $current_data->getUnit03GlobalBonus();
        $unit03GlobalDmgBonus = $current_data->getUnit03GlobalDmgBonus();

        $unit04Quantity = $current_data->getUnit04Quantity();
        $unit04Price = $current_data->getUnit04Price();
        $unit04Bonus10 = $current_data->getUnit04Bonus10();
        $unit04Bonus25 = $current_data->getUnit04Bonus25();
        $unit04Bonus50 = $current_data->getUnit04Bonus50();
        $unit04Bonus100 = $current_data->getUnit04Bonus100();
        $unit04Bonus150 = $current_data->getUnit04Bonus150();
        $unit04BonusD10 = $current_data->getUnit04BonusD10();
        $unit04BonusD25 = $current_data->getUnit04BonusD25();
        $unit04BonusD50 = $current_data->getUnit04BonusD50();
        $unit04BonusD100 = $current_data->getUnit04BonusD100();
        $unit04BonusD150 = $current_data->getUnit04BonusD150();
        $unit04GlobalBonus = $current_data->getUnit04GlobalBonus();
        $unit04GlobalDmgBonus = $current_data->getUnit04GlobalDmgBonus();

        $unit05Quantity = $current_data->getUnit05Quantity();
        $unit05Price = $current_data->getUnit05Price();
        $unit05Bonus10 = $current_data->getUnit05Bonus10();
        $unit05Bonus25 = $current_data->getUnit05Bonus25();
        $unit05Bonus50 = $current_data->getUnit05Bonus50();
        $unit05Bonus100 = $current_data->getUnit05Bonus100();
        $unit05Bonus150 = $current_data->getUnit05Bonus150();
        $unit05BonusD10 = $current_data->getUnit05BonusD10();
        $unit05BonusD25 = $current_data->getUnit05BonusD25();
        $unit05BonusD50 = $current_data->getUnit05BonusD50();
        $unit05BonusD100 = $current_data->getUnit05BonusD100();
        $unit05BonusD150 = $current_data->getUnit05BonusD150();
        $unit05GlobalBonus = $current_data->getUnit05GlobalBonus();
        $unit05GlobalDmgBonus = $current_data->getUnit05GlobalDmgBonus();

        $unit06Quantity = $current_data->getUnit06Quantity();
        $unit06Price = $current_data->getUnit06Price();
        $unit06Bonus10 = $current_data->getUnit06Bonus10();
        $unit06Bonus25 = $current_data->getUnit06Bonus25();
        $unit06Bonus50 = $current_data->getUnit06Bonus50();
        $unit06Bonus100 = $current_data->getUnit06Bonus100();
        $unit06Bonus150 = $current_data->getUnit06Bonus150();
        $unit06BonusD10 = $current_data->getUnit06BonusD10();
        $unit06BonusD25 = $current_data->getUnit06BonusD25();
        $unit06BonusD50 = $current_data->getUnit06BonusD50();
        $unit06BonusD100 = $current_data->getUnit06BonusD100();
        $unit06BonusD150 = $current_data->getUnit06BonusD150();
        $unit06GlobalBonus = $current_data->getUnit06GlobalBonus();
        $unit06GlobalDmgBonus = $current_data->getUnit06GlobalDmgBonus();


        return $this->render('@IdleGame/Default/index.html.twig', array(
            'compteBanquaire' => $comteBanquaire,
            'ennemyDoorLife' => $ennemyDoorLife,
            'ennemyDoorBLife' => $ennemyDoorBLife,
            'ennemyDoorLevel' => $ennemyDoorLevel,
            'ennemyTroopsLife' => $ennemyTroopsLife,
            'ennemyTroopsBLife' => $ennemyTroopsBLife,
            'ennemyTroopsLevel' => $ennemyTroopsLevel,
            'ennemyBossLife' => $ennemyBossLife,
            'ennemyBossBLife' => $ennemyBossBLife,
            'ennemyBossLevel' => $ennemyBossLevel,
            'ennemyBossBonusKill' => $ennemyBossBonusKill,
            'currentStage' => $currentStage,

            //UNIT01
            'unit01Quantity' => $unit01Quantity,
            'unit01Price' => $unit01Price,
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
            'unit01GlobalBonus' => $unit01GlobalBonus,
            'unit01GlobalDmgBonus' => $unit01GlobalDmgBonus,

            //UNIT02
            'unit02Quantity' => $unit02Quantity,
            'unit02Price' => $unit02Price,
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
            'unit02GlobalBonus' => $unit02GlobalBonus,
            'unit02GlobalDmgBonus' => $unit02GlobalDmgBonus,

            //UNIT03
            'unit03Quantity' => $unit03Quantity,
            'unit03Price' => $unit03Price,
            'unit03Bonus10' => $unit03Bonus10,
            'unit03Bonus25' => $unit03Bonus25,
            'unit03Bonus50' => $unit03Bonus50,
            'unit03Bonus100' => $unit03Bonus100,
            'unit03Bonus150' => $unit03Bonus150,
            'unit03BonusD10' => $unit03BonusD10,
            'unit03BonusD25' => $unit03BonusD25,
            'unit03BonusD50' => $unit03BonusD50,
            'unit03BonusD100' => $unit03BonusD100,
            'unit03BonusD150' => $unit03BonusD150,
            'unit03GlobalBonus' => $unit03GlobalBonus,
            'unit03GlobalDmgBonus' => $unit03GlobalDmgBonus,

            //UNIT04
            'unit04Quantity' => $unit04Quantity,
            'unit04Price' => $unit04Price,
            'unit04Bonus10' => $unit04Bonus10,
            'unit04Bonus25' => $unit04Bonus25,
            'unit04Bonus50' => $unit04Bonus50,
            'unit04Bonus100' => $unit04Bonus100,
            'unit04Bonus150' => $unit04Bonus150,
            'unit04BonusD10' => $unit04BonusD10,
            'unit04BonusD25' => $unit04BonusD25,
            'unit04BonusD50' => $unit04BonusD50,
            'unit04BonusD100' => $unit04BonusD100,
            'unit04BonusD150' => $unit04BonusD150,
            'unit04GlobalBonus' => $unit04GlobalBonus,
            'unit04GlobalDmgBonus' => $unit04GlobalDmgBonus,

            //UNIT05
            'unit05Quantity' => $unit05Quantity,
            'unit05Price' => $unit05Price,
            'unit05Bonus10' => $unit05Bonus10,
            'unit05Bonus25' => $unit05Bonus25,
            'unit05Bonus50' => $unit05Bonus50,
            'unit05Bonus100' => $unit05Bonus100,
            'unit05Bonus150' => $unit05Bonus150,
            'unit05BonusD10' => $unit05BonusD10,
            'unit05BonusD25' => $unit05BonusD25,
            'unit05BonusD50' => $unit05BonusD50,
            'unit05BonusD100' => $unit05BonusD100,
            'unit05BonusD150' => $unit05BonusD150,
            'unit05GlobalBonus' => $unit05GlobalBonus,
            'unit05GlobalDmgBonus' => $unit05GlobalDmgBonus,

            //UNIT06
            'unit06Quantity' => $unit06Quantity,
            'unit06Price' => $unit06Price,
            'unit06Bonus10' => $unit06Bonus10,
            'unit06Bonus25' => $unit06Bonus25,
            'unit06Bonus50' => $unit06Bonus50,
            'unit06Bonus100' => $unit06Bonus100,
            'unit06Bonus150' => $unit06Bonus150,
            'unit06BonusD10' => $unit06BonusD10,
            'unit06BonusD25' => $unit06BonusD25,
            'unit06BonusD50' => $unit06BonusD50,
            'unit06BonusD100' => $unit06BonusD100,
            'unit06BonusD150' => $unit06BonusD150,
            'unit06GlobalBonus' => $unit06GlobalBonus,
            'unit06GlobalDmgBonus' => $unit06GlobalDmgBonus,

        ));
    }

    public function upgradeControlAction()
    {
        return $this->render('@IdleGame/Default/upgrade.html.twig');
    }

    public function achatUnitAction()
    {
        return $this->render('@IdleGame/Default/achatUnit.html.twig');
    }

    public function ennemyBlockAction()
    {
        return $this->render('@IdleGame/Default/ennemyBlock.html.twig');
    }

    public function forumAction()
    {
        $categories = $this->getDoctrine()->getRepository(categoriesForum::class)->findAll();
        return $this->render('@IdleGame/Default/forum.html.twig',array(
            'categories'=> $categories,
        ));
    }

    public function topicAction($id)
    {
        $topics = $this->getDoctrine()->getRepository(topic::class)->findBy(['categ'=>$id]);
        $categorie = $this->getDoctrine()->getRepository(categoriesForum::class)->find($id);

        return $this->render('@IdleGame/Default/topic.html.twig',array(
            'topics'=>$topics,
            'categorie'=>$categorie,
        ));
    }

    public function postAction($id,$idCateg)
    {
        $topic = $this->getDoctrine()->getRepository(topic::class)->find($id);
        $posts = $this->getDoctrine()->getRepository(post::class)->findBy(['topic'=>$id]);

        return $this->render('@IdleGame/Default/post.html.twig',array(
            'posts'=>$posts,
            'topic'=>$topic,
            'idCateg'=> $idCateg,
        ));
    }

    public function highscoreAction()
    {
        $current_data = $this->getDoctrine()->getRepository(dataUser::class)->findBy(array(), array('amountMoney' => 'desc'));
        $i=0;
        return $this->render('@IdleGame/Default/highscore.html.twig', array(
            'datas' => $current_data,
            'i' => $i,
        ));
    }

    public function newTopicAction(Request $request,$id)
    {
        $topic = new topic();
        $iduser = $this->getUser()->getId();

        $entitymanager = $this->getDoctrine()->getManager();
        $current_user = $entitymanager->getRepository(User::class)->find($iduser);
        $categories = $this->getDoctrine()->getRepository(categoriesForum::class)->find($id);

        $form = $this->createForm(topicType::class,$topic);
        $formView = $form->createView();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()){
            $topic = $form->getData();
            $topic->setCateg($categories);
            $topic->setUser($current_user);
            $topic->setPostedAtDate(new \DateTime("now"));
            $topic->setPostedAtTime(new \DateTime("now"));

            $entitymanager = $this->getDoctrine()->getManager();
            $entitymanager->persist($topic);
            $entitymanager->flush();
            return $this->redirectToRoute('game_idle_topic',array(
                'id'=>$id,
            ));
        }

        return $this->render('@IdleGame/Default/newtopic.html.twig',array(
            'formView'=>$formView,
        ));
    }

    public function newPostAction(Request $request,$id,$idCateg)
    {
        $post = new post();
        $iduser = $this->getUser()->getId();

        $entitymanager = $this->getDoctrine()->getManager();
        $current_user = $entitymanager->getRepository(User::class)->find($iduser);
        $topic = $this->getDoctrine()->getRepository(topic::class)->find($id);

        $form = $this->createForm(postType::class,$post);
        $formView = $form->createView();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()){
            $post = $form->getData();
            $post->setTopic($topic);
            $post->setUser($current_user);
            $post->setPostedAtDate(new \DateTime("now"));
            $post->setPostedAtTime(new \DateTime("now"));

            $entitymanager = $this->getDoctrine()->getManager();
            $entitymanager->persist($post);
            $entitymanager->flush();
            return $this->redirectToRoute('game_idle_post',array(
                'id'=>$id,
                'idCateg'=> $idCateg,
            ));
        }

        return $this->render('@IdleGame/Default/newpost.html.twig',array(
            'formView'=>$formView,
        ));
    }

    public function editPostAction(Request $request,$id,$idTopic,$idCateg)
    {

        $entitymanager = $this->getDoctrine()->getManager();
        $post = $entitymanager->getRepository(post::class)->find($id);

        $form = $this->createForm(postType::class,$post);
        $formView = $form->createView();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()){
            $entitymanager = $this->getDoctrine()->getManager();
            $entitymanager->flush();
            return $this->redirectToRoute('game_idle_post',array(
                'id'=>$idTopic,
                'idCateg'=>$idCateg,
            ));
        }

        return $this->render('@IdleGame/Default/editpost.html.twig',array(
            'formView'=>$formView,
        ));
    }

    public function deletePostAction($id,$idTopic,$idCateg)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(post::class); // cible le repository de la classe Livre
        $post = $repository->find($id);//récupération de l'élément selon l'id récupéré
        $entityManager->remove($post);
        $entityManager->flush();

        return $this->redirectToRoute('game_idle_post',array(
            'id'=>$idTopic,
            'idCateg'=>$idCateg,
        ));
    }

    public function backIndexAction()
    {
        $entitymanager = $this->getDoctrine()->getManager();
        $allUsers = $entitymanager->getRepository(User::class)->findAll();
        $allTopics = $entitymanager->getRepository(topic::class)->findAll();
        $allPosts = $entitymanager->getRepository(post::class)->findAll();

        return $this->render('@IdleGame/Default/backindex.html.twig',array(
            'allUsers'=>$allUsers,
            'allTopics'=>$allTopics,
            'allPosts'=>$allPosts,
        ));
    }

    public function backPlayersAction()
    {
        $entitymanager = $this->getDoctrine()->getManager();
        $allUsers = $entitymanager->getRepository(User::class)->findAll();

        return $this->render('@IdleGame/Default/backplayers.html.twig',array(
            'allUsers'=>$allUsers,
        ));
    }

    public function backPlayerAction($id)
    {
        $entitymanager = $this->getDoctrine()->getManager();
        $player = $entitymanager->getRepository(User::class)->find($id);
        $playerPosts = $entitymanager->getRepository(post::class)->findBy(['user'=>$id]);

        return $this->render('@IdleGame/Default/backplayer.html.twig',array(
            'player'=>$player,
            'playerPosts'=>$playerPosts,
        ));
    }



}
