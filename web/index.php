<?php
include "class/User.php";
include "class/fonction.php";
include "class/Pdo.php";

session_start();
include "class/firstScript.php";
$title = "Accueil";
include "affichage/head.php";
include "affichage/modal.php";
include "affichage/nav.php";
include "html/" . $file = basename($_SERVER['PHP_SELF']);
include "affichage/footer.php";
