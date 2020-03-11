<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 18.12.2019
 * description: script d'ajout de video au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
include "../class/Pdo.php";
include "../class/User.php";
session_start();

$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$camera = filter_input(INPUT_POST, 'camera', FILTER_SANITIZE_STRING);
$fichier = basename($_FILES['video']['name']);
$user = $_SESSION['user']->GetidUser();

//verification si le nom n'est pas vide
if ($nom != "") {
} else {
    echo "Nom vide";
    exit;
}

//recuperation de l'extension du fichier
$extension = substr(strrchr($fichier, '.'), 1);
if ($extension == "mp4" or $extension == "wave" or $extension == "jpg") {
    //creation du nom du dossier 
    $folderName = (sha1(rand(1, 10000000)));
    mkdir("../file/todo/" . $folderName);
    $dossier = "../file/todo/" . $folderName . "/video." . $extension;
    //Si la fonction renvoie TRUE, c'est que ça a fonctionne...
    if (move_uploaded_file($_FILES['video']['tmp_name'], $dossier . "")) {
        //ajout la video a la base de donnees
        $_SESSION['Pdo']->Execute("INSERT INTO video (nomVideo,idCamera,IdUser,nomDossier) VALUES ('$nom','$camera','$user','$folderName')");
        header('Location: ../index.php');
        exit;
    } else { //Sinon (la fonction renvoie FALSE).
        echo 'Échec de l\'upload !</br';
        exit;
    }
}
