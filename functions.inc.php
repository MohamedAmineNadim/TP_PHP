<?php
//Vérification de la saisie de l'utilisateur pour le connecter ou pas

require_once 'db.php';
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

function login($ID, $Pwd){
    $modo = new Modérateur($ID, $Pwd);
    
}

function connected(){
    header('Location: http://localhost/TP%20Billet%20PHP/connected.html');
    exit();
}

function createUser($usr, $pwd){
    $sql = 'INSERT INTO Users VALUES (?, ?);';
    //prevent SQL injection
    $conn =  mysqli_connect( "localhost", 'root', 'Root2022!', 'UsersInfo');
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement,$sql))
    {
        header('Location: home.html?error=statementfailed');
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($statement, 'ss', $usr, $hashedPwd);
}

function userExists(){
    $sql = 'SELECT* FROM Users WHERE ';
}

?>