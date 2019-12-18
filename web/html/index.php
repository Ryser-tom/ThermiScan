<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 18.12.2019
 * description: script de connexion au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
?>
<form method="POST" action="html/script.php" enctype="multipart/form-data">
    </br>
    <div class="row" style="margin:auto">
        <div class="col-md-1 relative"></div>
        <div class="col-md-4 relative">

            <div class="form-group">
                <h5 for="nom">Nom de la video</h5>
                <input type="text" name="nom" class="form-control " required>
            </div>        
            <div class="form-group">
                <h5 for="nbr">fichier video</h5>
                <input type="file" class="form-control-file" name="video" required="">
            </div>
            <button type="submit" class="btn btn-primary expend">Ajouter la video</button>
        </div>
    </div>
</form>
<p>------------------------------------------------------------------------------------------------------------------------</p>
<form method="POST" action="html/connexion.php">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">user</span>
                        </div>
                        <input type="text" class="form-control" placeholder="nom d'utilisateur" name="username" id="username">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">*</span>
                        </div>
                        <input type="password" class="form-control" placeholder="mot de passe" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary expend">Se connecter</button>
                </form>
<p>------------------------------------------------------------------------------------------------------------------------</p>
<form method="POST" action="html/inscription.php">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="username" name="username" required >
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">*</span>
                        </div>
                        <input type="password" class="form-control" placeholder="mot de passe" name="password1" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">*</span>
                        </div>
                        <input type="password" class="form-control" placeholder="mot de passe" name="password2" required>
                    </div>
                    <button type="submit" class="btn btn-primary expend">S'inscrire</button>
                </form>

?>