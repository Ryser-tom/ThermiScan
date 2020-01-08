<?php
include "class/User.php";
include "class/fonction.php";
include "class/Pdo.php";
session_start();

$title="Accueil";
include "affichage/head.php";
include "affichage/nav.php";
include "html/".$file = basename ($_SERVER['PHP_SELF']);
include "affichage/footer.php";
?>