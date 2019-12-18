<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Ida P4B
 * Version : 1.0
 * Date    : 07.05.2019
 * description: scripte de connexion au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
include "../class/Pdo.php";
session_start();


print_r($_SESSION['Pdo']->Select("*", "users",'', ""));
// $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
// $password = sha1(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));


// $resultat = ($_SESSION['Pdo']->Select("*", "users", 'username="' . $username . '" AND password = "' . $password . '"', ""));

// if (($username == $resultat[0]['username']) and $password == $resultat[0]['password']) {
//     $username = $resultat[0]['username'];
//     $id = $resultat[0]['idUser'];

//     header('Location: ../index.php?erreur=6');
//     exit;
// } else {
//     header('Location: ../index.php?erreur=7');
// }
?>