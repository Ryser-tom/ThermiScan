<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Version : 1.0
 * Date    : 11.12.2019
 * description: fichier contenant la navbar a inclure dans chaque page
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

if (isset($_SESSION['user'])) {
?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">ThermiScan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#addVideo">Ajouter une video</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#addCamera" href="#">Ajouter une caméra</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#changeCamera" href="#">Changer de caméra</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <div class="row justify-content-end">
          <a class="nav-link navColor" href="?deco=1">Déconnection</a>
        </div>
      </form>
    </div>
  </nav>
<?php
} else {
?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">ThermiScan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <div class="row justify-content-end">
          <a class="nav-link" data-toggle="modal" data-target="#register">Inscription</a>
          <a class="nav-link" data-toggle="modal" data-target="#login">Login</a>
        </div>
      </form>
    </div>
  </nav>
<?php
}
