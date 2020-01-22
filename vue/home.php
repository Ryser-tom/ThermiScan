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
          Gestion de vidéo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" data-toggle="modal" data-target="#addVideo" href="#">Ajouter une vidéo</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#changeCamera" href="#">Changer de caméra</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#changeVideo" href="#">Changer de vidéo</a>
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
<div class="container-fluid">
<div class="row">
  <div class="col-md-2" style="background-color: #cccccc">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
  </div>
  <div class="col">
  <!-- Video content with the graph and the options -->
  <div class="row">
    <div class="col bg-danger">
    image
    </div>
    <!-- 16:9 aspect ratio -->
    <div class="col bg-success">
      graph
    </div>
    </div>
    </div>
  </div>
</div>

<!-- Modal to add a video -->
<div class="modal fade" tabindex="-1" id="addVideo" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter une vidéo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Content -->
        <form>
          <fieldset disabled>
            <div class="form-group row justify-content-between">
              <label for="cameraName" class="col-sm-4 col-form-label">Nom de la Caméra</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" placeholder="CAMERA (database)" readonly>
              </div>
            </div>
          </fieldset>
          <div class="form-group row justify-content-between">
            <label for="videoName" class="col-sm-4 col-form-label">Nom de la vidéo</label>
            <div class="col-sm-6">
              <input class="form-control" type="text" id="videoName" placeholder="ex. Salon 1">
            </div>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" lang="fr">
            <label class="custom-file-label custom-file-text" for="customFile">Choisir un fichier</label>
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

<!-- Modal to change video -->
<div class="modal fade" tabindex="-1" id="changeCamera" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Changer de camera</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Content -->
        <form>
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-Camera1" data-toggle="list" href="#" role="tab" data-dismiss="modal">Camera 1</a>
            <a class="list-group-item list-group-item-action" id="list-Camera2" data-toggle="list" href="#" role="tab" data-dismiss="modal">Camera 2</a>
            <a class="list-group-item list-group-item-action" id="list-Camera3" data-toggle="list" href="#" role="tab" data-dismiss="modal">Camera 3</a>
            <a class="list-group-item list-group-item-action" id="list-Camera4" data-toggle="list" href="#" role="tab" data-dismiss="modal">Camera X</a>
          </div>
        </form>
      </div>
            <!-- Close or save changes -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal to change video -->
<div class="modal fade" tabindex="-1" id="changeVideo" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Changer de vidéo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Content -->
        <form>
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-Video1" data-toggle="list" href="#" role="tab" data-dismiss="modal">Vidéo 1</a>
            <a class="list-group-item list-group-item-action" id="list-Video2" data-toggle="list" href="#" role="tab" data-dismiss="modal">Vidéo 2</a>
            <a class="list-group-item list-group-item-action" id="list-Video3" data-toggle="list" href="#" role="tab" data-dismiss="modal">Vidéo 3</a>
            <a class="list-group-item list-group-item-action" id="list-Video4" data-toggle="list" href="#" role="tab" data-dismiss="modal">Vidéo X</a>
          </div>
        </form>
      </div>
            <!-- Close or save changes -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
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