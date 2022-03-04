<?php
//Connection à la BDD
/*
//Les 2 BDD a été crée en utilisant ce code là :

create database Billet_TP;
use Billet_TP;

create table Billet (
	Id_bil varchar(10) NOT NULL primary key,
    Date_bil date,
    Titre_bil char(30),
    contenu text(300)
);

create table Commentaire (
	Id_com varchar(10) NOT NULL primary key,
    date_com date,
    auteur_com char(30),
    mail_auteur char(50),
    commentaire text(100),
    Id_bil varchar(10)
);

alter table Commentaire add constraint fk_combil foreign key (Id_bil) references Billet (Id_bil);

create database UsersInfo;
use UsersInfo;

create table Users (
	Username varchar(50) NOT NULL,
    pass varchar(100) NOT NULL,
    primary key (Username, pass)
);

*/

$user = "root";
$pass = "Root2022!";
$db_name = "UsersInfo";

//Etablissement de la connexion à la BDD
$conn =  mysqli_connect( "localhost", $user, $pass, $db_name);
if ( ! $conn ){
    die( "Impossible de se connecter à MySQL" );
}
mysqli_select_db($conn, $db_name) or die ("Impossible d'ouvrir $db_name: ".mysqli_error($conn));


//Définition des variables pour stocker les valeurs de POST
$date_bil = $_POST['date_bil'];

$titre_bil = $_POST['titre_bil'];

$date_com = $_POST['date_com'];

$auteur_com = $_POST['auteur_com'];

//Préparation de la requête par soucis de sécurité

?>