<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Ida P4B
 * Version : 1.0
 * Date    : 04.03.2020
 * description: script qui se lance au debut de chaque page
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
if (isset($_GET['deco'])) {
    session_start();
    session_destroy();
    header('Location: index.php');
    exit;
}
