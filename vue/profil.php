<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Profil - ThermiScan</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="/">ThermiScan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gestion des caméras
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" data-toggle="modal" data-target="#addCamera" href="#">Ajouter</a>
          <a class="dropdown-item" href="#">Choisir la caméra</a>
          <a class="dropdown-item" href="#">Supprimer</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="row justify-content-end">
        <div class="col">
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#profile">
          Profil
          </button>
        </div>
        <div class="col">
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#logout">
          Déconnection
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
<br>
<p>
  <a class="btn btn-primary"  href="?p=camera" role="button">
    Option de camera
  </a>
  <a class="btn btn-primary"  href="?p=user" role="button">
    Option d'utilisateur
  </a>
</p>
<?php if($_GET && $_GET['p']=="camera")
{
  echo"option de camera";
}
else
{
  echo"option d'utilisateur";
} ?>
<!-- Modal to login -->
<div class="modal fade" tabindex="-1" id="addCamera" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter une camera</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Content -->
        <form>
          <div class="form-group row justify-content-between">
            <label for="inputPassword" class="col-sm-4 col-form-label">Nom de la camera</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="inputPassword" placeholder="ex. CameraSalon1">
            </div>
          </div>
          <div class="form-group row justify-content-between">
            <label for="inputPassword" class="col-sm-4 col-form-label">IP</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="inputPassword" placeholder="ex. 127.0.0.1">
            </div>
          </div>
        </form>
      </div>
            <!-- Close or save changes -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" href="#/profil">Ajouter</button>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>