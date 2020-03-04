<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 04.03.2019
 * description: script d'inscription au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
include "../class/Pdo.php";
include "../class/User.php";
session_start();
//recuperation du nom de la nouvelle camera
$nameCamera = filter_input(INPUT_POST, 'nameCamera', FILTER_SANITIZE_STRING);

$resultat = ($_SESSION['Pdo']->Select("*", "camera", 'nomCamera="' . $nameCamera . '"', ""));
//verification si le nom d'utilisateur n'est pas deja pris
if (isset($resultat[0]) == !null) {
    echo "Nom de camera déjà pris";
    exit;
}
//verifie si le mot de passe fait plus de 5 caracteres
if (strlen($nameCamera) < 5) {
    echo "Nom trop court";
    exit;
} else {
    $user = $_SESSION['user']->idUser;
    $_SESSION['Pdo']->Execute("INSERT INTO camera (nomCamera,IdUser) VALUES ('$nameCamera','$user')");
    header('Location: ../index.php');

    exit;
}
