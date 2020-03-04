<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Ida P4B
 * Version : 1.0
 * Date    : 07.05.2019
 * description: scripte d'inscription au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
include "../class/Pdo.php";
include "../class/User.php";
session_start();
//recuperation du nom de la nouvelle camera
$nameCamera = filter_input(INPUT_POST, 'nameCamera', FILTER_SANITIZE_STRING);

$resultat = ($_SESSION['Pdo']->Select("*", "camera", 'nomCamera="' . $nameCamera . '"', ""));
//verification si le nom d'utilisateur n'est pas deja pris
if (isset($resultat[0]) == !null) {
    echo "nom de camera deja pris";
    exit;
}
//verifie si le mot de passe fait plus de 5 caracteres
if (strlen($nameCamera) < 5) {
    echo "nom trop court";
    exit;
} else {
    $user = $_SESSION['user']->idUser;
    $_SESSION['Pdo']->Execute("INSERT INTO camera (nomCamera,IdUser) VALUES ('$nameCamera','$user')");
    header('Location: ../index.php');

    exit;
}
