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

    public function GetUsername() {
        return $this->username;
    }

    public function GetIdUser() {
        return $this->idUser;
    }

    public function GetListOfCameraUser()
    {
    $resultat = ($_SESSION['Pdo']->Select("*", "camera", 'IdUser= '.$this->idUser.'' ,""));
        return $resultat;
    }

    public function GetListOfVideo()
    {
    $resultat = ($_SESSION['Pdo']->Select("*", "video", 'IdUser= '.$this->idUser.'' ,""));
        return $resultat;
    }

    public function GetListOfVideoByCamera($idCamera)
    {
    $resultat = ($_SESSION['Pdo']->Select("*", "video", 'IdUser= '.$this->idUser.'AND idCamera = '.$idCamera.'' ,""));
        return $resultat;
    }
    

}

?>