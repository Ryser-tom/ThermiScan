<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 26.02.2020
 * description: Script d'inscription au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
include "../class/Pdo.php";
session_start();
//recuperation des input de l'utilisateur
$password = filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_STRING);
$password1 = sha1(filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_STRING));
$password2 = sha1(filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING));
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
//verifie si le mot de passe fait plus de 5 caracteres
if (strlen($password) < 5) {
    echo "mots de passe trop court";
    exit;
}

$resultat = ($_SESSION['Pdo']->Select("username", "users", 'username="' . $username . '"', ""));
//verification si le nom d'utilisateur n'est pas deja pris
if (isset($resultat[0]) == !null) {
    echo "username deja pris";
    exit;
}

if ($password1 == $password2) {
    //valide l'inscription
    $_SESSION['Pdo']->Execute("INSERT INTO users (password,username) VALUES ('$password1','$username')");
    header('Location: ../index.php?erreur=1');

    exit;
} else {
    echo "les mots de passe ne coresponde pas";
    exit;
}
