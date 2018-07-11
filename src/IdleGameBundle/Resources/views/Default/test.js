function nextStageDoor(){
    if (levelMainDoor >= compteurBossDoor) {
        currentStage = "Troops";
        levelMainDoor = 1;
        baseLifeMainDoor = lifeMainDoor;

    }
}

function nextStageTroops(){
    if (levelTroops>=compteurBossTroops){
        currentStage="Boss";
        levelTroops=1;
        baseLifeTroops=lifeTroops;
    }
}

// tick toute les secondes
// gére tout ce qui n'est pas affichage
// gére les dégats, stage, etc
// ------------ DPS TICK ------------

function sleep(miliseconds) {
    var currentTime = new Date().getTime();

    while (currentTime + miliseconds >= new Date().getTime()) {
    }
}

function tickLoop(){
    showimgBoss();
    // Calcul des dégats par tick
    degatTotal=(degatUnit01*nbrUnit01)+(degatUnit2*nbrUnit02)+(degatUnit03*nbrUnit03)+(degatUnit04*nbrUnit04)+(degatUnit05*nbrUnit05)+(degatUnit06*nbrUnit06);
    compteBanquaire=compteBanquaire+ calcIncome();

    if (currentStage==="Main Door"){
        lifeMainDoor=lifeMainDoor-degatTotal;

        if (lifeMainDoor<=0) {
            document.getElementById('life').style.width = 0+'%';
            lifeMainDoor = baseLifeMainDoor * 1.1;
            levelMainDoor = levelMainDoor + 1;
            compteurBossDoor = (5 + levelBoss);
            document.getElementById("imgBoss").src = "../images/explosion01.gif";
            nextStageDoor();
            showBossLevel();
        }

    } else if(currentStage==="Troops"){
        lifeTroops=lifeTroops-degatTotal;
        if (lifeTroops<=0){
            lifeTroops=baseLifeTroops*1.1;
            levelTroops=levelTroops+1;
            compteurBossTroops=10+(levelBoss*2)
            document.getElementById("imgBoss").src="../images/explosion01.gif";
            nextStageTroops();
            showBossLevel();
        }
    } else if(currentStage==="Boss") {
        lifeBoss=lifeBoss-degatTotal;
        if (lifeBoss<=0){
            bonuKillBoss=baseLifeBoss*0.3;
            compteBanquaire=compteBanquaire+bonuKillBoss;
            lifeBoss=baseLifeBoss*10;
            baseLifeBoss=lifeBoss;
            levelBoss=levelBoss+1;
            currentStage="Main Door";
            document.getElementById("imgBoss").src="../images/explosion01.gif";
            showBossLevel();
        }
    }
    var pourcentlife;

    if (currentStage==="Main Door"){
        pourcentlife = (lifeMainDoor/baseLifeMainDoor)*100;
    } else if (currentStage==="Troops"){
        pourcentlife=(lifeTroops/baseLifeTroops)*100;
    } else if (currentStage==="Boss"){
        pourcentlife= (lifeBoss/baseLifeBoss)*100;
    }

    saveMoney();
    document.getElementById('life').style.width = pourcentlife+'%';
    setTimeout("tickLoop()", 1000);
}

function endStage(){
    var pourcentlife;

    if (currentStage==="Main Door"){

        pourcentlife = (lifeMainDoor/baseLifeMainDoor)*100;
    } else if (currentStage==="Troops"){
        pourcentlife=(lifeTroops/baseLifeTroops)*100;
    } else if (currentStage==="Boss"){
        pourcentlife= (lifeBoss/baseLifeBoss)*100;
    }

    saveMoney();
    document.getElementById('life').style.width = pourcentlife+'%';
}