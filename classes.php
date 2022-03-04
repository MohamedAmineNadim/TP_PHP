<?php
//Définition des classes

class Billet {
    //Attributs (cf. Base de données)
    private int $id_bil;
    private int $date_bil; 
    private String $titre_bil;
    private String $contenu;

    //Constructeur
    public function construct($id_bil,$date_bil,$Titre_bil,$contenu)
    {
    $this->id_bil = $id_bil;
    $this->date_bil = $date_bil;
    $this->titre_bil = $Titre_bil;
    $this->contenu = $contenu;
    }

    //Méthodes
    //Getters
    public function getId_bil(){
        return $this->id_bil;
    }

    public function getDate_bil(){
        return $this->date_bil;
    }
    public function getTitre_bil(){
        return $this->titre_bil;
    }
    public function getcontenu(){
        return $this->contenu;
    }
    
    //Setters
    public function setId_bil($Id_bil){
        $this->id_bil=$Id_bil;
    }
    public function setDate_bil($Date_bil){
        $this->date_bil=$Date_bil;
    }
    public function setTitre_bil($Titre_bil){
     $this->titre_bil=$Titre_bil;
    }
    public function setmail_auteur($contenu){
        $this->contenu=$contenu;
     }
}

class Commentaire {
    //Attributs (cf. Base de données)
    private int $id_com;
    private String $date_com;
    private String $auteur_com;
    private String $mail_auteur;
    private String $commenaitre;
    private int $id_bil;
    
    //Constructeur
    public function construct($id_com,$date_com,$auteur_com,$mail_auteur,$commenaitre,$id_bil)
    {
    $this->id_com=$id_com;
    $this->date_com=$date_com;
    $this->auteur_com=$auteur_com;
    $this->mail_auteur=$mail_auteur;
    $this->commenaitre=$commenaitre;
    $this->id_bil=$id_bil;
    }

    //Méthodes
    //Getters
    public function getId_com(){
        return $this->id_com;
    }

    public function getDate_com(){
        return $this->date_com;
    }
    public function getauteur_com(){
        return $this->auteur_com;
    }
    public function getmail_auteur(){
        return $this->mail_auteur;
    }
    public function getcommenaitre(){
        return $this->commenaitre;
    }
    public function getid_bil(){
        return $this->id_bil;
    }

    //Setters
    public function setId_com($id_com){
        $this->id_com=$id_com;
    }
    public function setdate_com($date_com){
        $this->date_com=$date_com;
    }
    public function setauteur_com($auteur_com){
     $this->auteur_com=$auteur_com;
    }
    public function setmail_auteur($mail_auteur){
        $this->mail_auteur=$mail_auteur;
     } 
     public function setcommenaitre($commenaitre){
        $this->commenaitre=$commenaitre;
     }
     public function setid_bil($id_bil){
        $this->id_bil=$id_bil;
     }
}

class Modérateur {
    //Attributs
    private String $Username;
    private String $Password;
    private bool $isConnected;

    //Constructeurs
    public function construct($Username, $Password)
    {
        $this->Username = $Username;
        $this->Password = $Password;
        $this->isConnected = false;
    }

    //Méthodes
    //Getters
    public function getUsername(){
        return $this->Username;
    }

    public function getPassword(){
        return $this->Password;
    }

    public function getConnected(){
        return $this->isConnected;
    }

    //Setters
    public function setUsername(String $new_Username){
        $this->Username = $new_Username;
    }

    public function setPassword(String $new_Password){
        $this->Password = $new_Password;
    }

    public function setConnected(bool $verif){
        if ($verif == true){
            $this->isConnected = true;
        }
    }
}
?>