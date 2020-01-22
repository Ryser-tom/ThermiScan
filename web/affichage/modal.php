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
        <form method="POST" action="html/script.php" enctype="multipart/form-data">
          <div class="form-group row justify-content-between">
            <label for="exampleFormControlSelect1">Caméra</label>
            <select class="form-control" name="camera">
              <?php
              GetListOfCameraUserVue();
              ?>
            </select>
          </div>
          <div class="form-group row justify-content-between">
            <label for="videoName" class="col-sm-4 col-form-label">Nom de la vidéo</label>
            <div class="col-sm-6">
              <input class="form-control" type="text" name="nom" placeholder="ex. Salon 1" />
            </div>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="video" lang="fr" />
            <label class="custom-file-label custom-file-text" for="customFile">Choisir un fichier</label>
          </div>
      </div>
      <!-- Close or save changes -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" href="#/profil">Ajouter</button>
      </div>
      </form>
    </div>
  </div>
</div> <!-- Modal to change camera -->
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
            <?php
            GetListOfCameraVue();
            ?>
          </div>
        </form>
      </div>
      <!-- Close or save changes -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Annuler
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal to login -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" id="login" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="connexion">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Content -->
        <form method="POST" action="html/connexion.php">
          <div class="form-group">
            <label for="username">Pseudo</label>
            <input type="text" class="form-control" name="username" placeholder="Pseudo">
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="password" placeholder="Mot de passe">
          </div>

          <!-- Close or save changes -->
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Connexion</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal to register -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" id="register" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Content -->
        <form method="POST" action="html/inscription.php">
          <div class="form-group">
            <label for="username">Pseudo</label>
            <input type="text" class="form-control" name="username" placeholder="ex: Didierdu74">
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="password1" placeholder="ex: 12345678">
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirmer le mot de passe</label>
            <input type="password" class="form-control" name="password2" placeholder="ex: 12345678">
          </div>
          <!-- Close or save changes -->
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Valider</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal to addCamera -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" id="addCamera" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="connexion">ajouter caméra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Content -->
        <form method="POST" action="html/newCamera.php">
          <div class="form-group">
            <label for="nameCamera">nom caméra</label>
            <input type="text" class="form-control" name="nameCamera" placeholder="Pseudo">
          </div>

          <!-- Close or save changes -->
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">ajouter caméra</button>
      </div>
      </form>
    </div>
  </div>
</div>