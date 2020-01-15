<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 18.12.2019
 * description: script de connexion au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
if (isset($_GET['deco'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}
if(isset($_SESSION['user']))
{
    echo ("user: ".$_SESSION['user']->GetUsername() . "</br>");
    echo ("ID:".$_SESSION['user']->GetidUser() . "</br>");
}
echo"</br>";
echo "Liste camera user</br>";
echo "-----------------</br>";
if (isset($_SESSION['user'])) {
    $result = ($_SESSION['user']->GetListOfCameraUser());
    $video = ($_SESSION['user']->GetListOfVideo());

foreach ($result as $key => $value) {
    echo( $result[$key]['nomCamera']."</br>");
}
}

echo "-----------------</br>";
echo"</br>";
echo "Liste camera user</br>";
echo "-----------------</br>";
    $video = ($_SESSION['user']->GetListOfVideo());
    echo"liste video";
    print_r($video);
echo "-----------------</br>";

?>
<form method="POST" action="html/script.php" enctype="multipart/form-data">
    </br>
    <div class="row" style="margin:auto">

        <div class="col-md-4 relative">

            <div class="form-group">
                <h5 for="nom">Nom de la video</h5>
                <input type="text" name="nom" class="form-control " required>
            </div>
            <div class="btn-group">

    <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" name="camera">


    <?php
    if (isset($_SESSION['user'])) {
    $result = ($_SESSION['user']->GetListOfCameraUser());

foreach ($result as $key => $value) {
    echo ('<option value="'.$result[$key]['idCamera'].'">'.$result[$key]['nomCamera'].'</a>');
}
}
?>
    </select>
  </div>
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
<p>------------------------------------------------------------------------------------------------------------------------</p>
<form method="POST" action="html/newCamera.php">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">camera</span>
                        </div>
                        <input type="text" class="form-control" placeholder="nom camera" name="nameCamera" id="nameCamera">
                    </div>
                    <button type="submit" class="btn btn-primary expend">Ajouter camera</button>
                </form>

