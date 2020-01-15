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

$nameCamera = filter_input(INPUT_POST, 'nameCamera', FILTER_SANITIZE_STRING);

if (strlen($nameCamera) < 5) {
    //header('Location: ../index.php?erreur=1');
    echo"nom trop court";
    exit;
}else{
    $user = $_SESSION['user']->idUser;
    $_SESSION['Pdo']->Execute("INSERT INTO camera (nomCamera,IdUser) VALUES ('$nameCamera','$user')");
    header('Location: ../index.php');
    
    exit;
}