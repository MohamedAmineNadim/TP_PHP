<?php
//Vérification de la saisie de l'utilisateur pour le connecter ou pas

require_once 'db.inc.php';
require_once 'classes.php';

function emptyInput($ID, $Pwd){
    $result = false;
    if (empty($ID) || empty($Pwd)){
        $result = true;
        return $result;
    }
    else{
        $result = false;
        return $result;
    }
}

function loginCheck($conn, Modérateur $Mod){
    $ID = $Mod->getUsername();
    $Pwd = $Mod->getPassword();

    $sql = 'SELECT DISTINCT * FROM Users WHERE (Username = ?) AND (pass = ?);';

    //Préparation de la requête
    $statement = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("Location: http://localhost/TP%20Billet%20PHP/connected.html?error=StatementFailed");
        exit();
    } else {
        
    }
    
    mysqli_stmt_bind_param($statement, "ss", $ID, $Pwd);
    mysqli_stmt_execute($statement);

    $data = mysqli_stmt_get_result($statement);

    if ($ligne = mysqli_fetch_assoc($data)){
        return $ligne;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($statement);
    
}


?>