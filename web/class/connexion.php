<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 04.03.2019
 * description: script de connexion au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
include "../class/Pdo.php";
include "../class/User.php";
session_start();

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = sha1(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

$resultat = ($_SESSION['Pdo']->Select("*", "users", 'username="' . $username . '" AND password = "' . $password . '"', ""));
//verifie que le nom d'utilisateur et le mot de passe correspondent
if (($username == $resultat[0]['username']) and $password == $resultat[0]['password']) {
    $username = $resultat[0]['username'];
    $id = $resultat[0]['IdUser'];
    $_SESSION['user'] = new user("$username", "$id");
    header('Location: ../index.php');
    exit;
} else {
    header('Location: ../index.php');
}
