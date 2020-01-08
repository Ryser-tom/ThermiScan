<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Ida P4B
 * Version : 1.0
 * Date    : 08.05.2019
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

class User {

    public $username;
    public $email;
    public $idUser;
    public $role;

    public function __construct($username, $idUser) {
        $this->username = $username;
        $this->idUser = $idUser;
    }

    public function GetUsername() {
        return $this->username;
    }

    public function GetId() {
        return $this->idUser;
    }

}

?>