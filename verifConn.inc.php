<?php
//Vérification de la saisie de l'utilisateur pour le connecter ou pas

if (isset($_POST['Submit'])){
    $ID = $_POST['ID'];
    $Pwd = $_POST['Pwd'];

    require_once 'functions.inc.php';

    if (emptyInput($ID, $Pwd) !== false){
        header("Location: http://localhost/TP%20Billet%20PHP/home.html?error=Empty");
		exit();
    }

    //if (login($ID, $Pwd) !== false)

    connected();
}

else{
    header("Location: http://localhost/TP%20Billet%20PHP/home.php?error=WrongEntry");
    exit();
}

?>