<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 18.12.2019
 * description: class permetant d'executer des requetes
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

class Requete {

    private $_host;
    private $_dbname;
    private $_user;
    private $_password;

    public function __construct($host, $dbname, $user, $password) {
        $this->_host = $host;
        $this->_dbname = $dbname;
        $this->_user = $user;
        $this->_password = $password;
    }

//Crée une connexion à la BDD
    function CreateConnexion() {
        $db = new PDO("mysql:host=" . $this->_host . ";dbname=" . $this->_dbname, $this->_user, $this->_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }

//Permet d’executer un select de façon simple
    public function Select($select, $from, $where, $order) {// select
        $connexion = $this->CreateConnexion();
        if ($order == "") {
            if ($where != "") {
                $reponse = $connexion->query('SELECT ' . $select . ' FROM ' . $from . ' WHERE ' . $where . '', PDO::FETCH_ASSOC);
                $res = $reponse->fetchAll();
                return($res);
            } else {
                $reponse = $connexion->query('SELECT ' . $select . ' FROM ' . $from . ' ', PDO::FETCH_ASSOC);
                $res = $reponse->fetchAll();
                return($res);
            }
        } else {
            if ($where != "") {
                $reponse = $connexion->query('SELECT ' . $select . ' FROM ' . $from . ' WHERE ' . $where . ' ORDER BY ' . $order . '', PDO::FETCH_ASSOC);
                $res = $reponse->fetchAll();
                return($res);
            } else {
                $reponse = $connexion->query('SELECT ' . $select . ' FROM ' . $from . ' ORDER BY ' . $order . '', PDO::FETCH_ASSOC);
                $res = $reponse->fetchAll();
                return($res);
            }
        }
    }

//Permet d’executer un delete de façon simplifier
    public function Delete($from, $where) {// Delete
        $connexion = $this->CreateConnexion();
        $reponse = $connexion->query('DELETE FROM ' . $from . ' WHERE ' . $where . '');
        $reponse->execute();
    }

//Permet d’executer un update de façon simplifier
    public function Update($from, $set, $where) {
        $connexion = $this->CreateConnexion();
        $requete = $connexion->prepare('UPDATE ' . $from . ' SET ' . $set . ' WHERE ' . $where . '');
        $requete->execute();
    }

//Execute la requete SQL passer en paramètre
    public function Execute($requete) {
        $connexion = $this->CreateConnexion();
        $connexion->query($requete);
    }

//Retourne le resultat de la requete passer en parametre
    public function SelectFull($select) {// select
        $connexion = $this->CreateConnexion();
        $reponse = $connexion->query('' . $select . '', PDO::FETCH_ASSOC);
        $res = $reponse->fetchAll();
        return($res);
    }

}

?>