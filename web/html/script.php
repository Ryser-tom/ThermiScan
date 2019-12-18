<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 18.12.2019
 * description: script de connexion au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
include "../class/Pdo.php";
 session_start();

$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$fichier = basename($_FILES['video']['name']);

if ($nom != "") {
    
} else {
    //header('Location: ../ajoutJeu.php?error=19');
    echo"nom vide";
    exit;
}
$extension = substr(strrchr($fichier, '.'), 1); //recuperation de l'extension du fichier
if ($extension == "mp4" or $extension == "wave" or $extension == "jpg") {
    $newName = (sha1(rand(1, 10000000)) . "." . $extension);
    $dossier = "../file/todo/" . $newName;

    if (move_uploaded_file($_FILES['video']['tmp_name'], $dossier . "")) {//Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        echo 'Upload effectué avec succès !';

        //$_SESSION['requete']->Execute("INSERT INTO jeu (nom_jeu,nom_photo) VALUES ('$nom','$newName')");
        //header('Location: ../ajoutJeu.php?erreur=18');
        echo"au top";
        exit;
    } else { //Sinon (la fonction renvoie FALSE).
        echo 'Echec de l\'upload !';
        //header('Location: ../ajoutJeu.php?erreur=19');
        echo"fuck";
        exit;
    }
}
?>