<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Ida P4B
 * Version : 1.0
 * Date    : 07.05.2019
 * description: scripte d'inscription au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
include "../class/Pdo.php";
session_start();
$password = filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_STRING);
$password1 = sha1(filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_STRING));
$password2 = sha1(filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING));
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

if (strlen($password) < 5) {
    //header('Location: ../index.php?erreur=1');
    echo "mots de passe trop court";
    exit;
}



$resultat = ($_SESSION['Pdo']->Select("username", "users", 'username="' . $username . '"', ""));
if (isset($resultat[0]) == !null) { //verification si le nom d'utilisateur n'est pas deja pris
    //header('Location: ../index.php?erreur=5');
    echo "username deja pris";
    exit;
}

if ($password1 == $password2) {
    //valide l'inscription
    $_SESSION['Pdo']->Execute("INSERT INTO users (password,username) VALUES ('$password1','$username')");
    //header('Location: ../index.php?erreur=3');
    echo "au top";
    exit;
} else {
    //les mots de passe ne coresponde pas
    //header('Location: ../index.php?erreur=4');
    echo "frere tu sais pas copier";
    exit;
}
