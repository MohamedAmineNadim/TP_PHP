<?php
//Vérification de la saisie de l'utilisateur pour le connecter ou pas

if (isset($_POST['Submit'])){
    $ID = $_POST['ID'];
    $Pwd = $_POST['Pwd'];

    require_once 'functions.inc.php';
    require_once 'db.inc.php';
    require_once 'classes.php';

    $Modo = new Modérateur();
    $Modo->setUsername($ID);
    $Modo->setPassword($Pwd);

    if (emptyInput($ID, $Pwd) !== false){
        header("Location: http://localhost/TP%20Billet%20PHP/home.php?error=emptyinput");
		exit();
    }

    if (!loginCheck($conn, $Modo) !== false){
        header("Location: http://localhost/TP%20Billet%20PHP/home.php?error=badcredentials");
        exit();
    }

    session_start();
    $_SESSION["ID"] = $ID;
    header('Location: http://localhost/TP%20Billet%20PHP/connected.php?error=none');
    exit();
    //return $ID;
}


else {
    header("Location: http://localhost/TP%20Billet%20PHP/home.php?error=WrongEntry");
    exit();
}

?>