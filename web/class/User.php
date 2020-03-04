<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Ida P4B
 * Version : 1.0
 * Date    : 08.05.2019
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

class User {

    public $username;
    public $idUser;


    public function __construct($username, $idUser) {
        $this->username = $username;
        $this->idUser = $idUser;
    }
	//reoutre le nom d'utilisateur de l'utilisateur
    public function GetUsername() {
        return $this->username;
    }
	//retourne l'id de l'utilisateur
    public function GetIdUser() {
        return $this->idUser;
    }
	//retourne la liste des camera de l'utilisateur
    public function GetListOfCameraUser()
    {
    $resultat = ($_SESSION['Pdo']->Select("*", "camera", 'IdUser= '.$this->idUser.'' ,""));
        return $resultat;
    }
	//retourne toutes les videos d'un utilisateur
    public function GetListOfVideo()
    {
    $resultat = ($_SESSION['Pdo']->Select("*", "video", 'IdUser= '.$this->idUser.'' ,""));
        return $resultat;
    }
	//retourne la liste de video liée a une camera
    public function GetListOfVideoByCamera($idCamera)
    {
    $resultat = ($_SESSION['Pdo']->Select("*", "video", 'IdUser= '.$this->idUser.' AND idCamera = '.$idCamera.'' ,""));
        return $resultat;
    }
    

}
