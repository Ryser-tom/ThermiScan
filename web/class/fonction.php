<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 26.02.2020
 * description: liste de fontion pour l'affichage
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function GetListOfvideoCameraVue($idCamera)
{

    if (isset($_SESSION['user'])) {
        if ($idCamera == 0) {
            $video = ($_SESSION['user']->GetListOfVideo());
        } else {
            $video = ($_SESSION['user']->GetListOfVideoByCamera($idCamera));
        }
        foreach ($video as $key => $value) {

            echo '<a href="index.php?video=' . $video[$key]['idVideo'] . '"<button type="button" class="list-group-item list-group-item-action">' . $video[$key]['nomVideo'] . '</button></a>';
        }
    }
}

function GetListOfCameraVue()
{
    if (isset($_SESSION['user'])) {
        $camera = ($_SESSION['user']->GetListOfCameraUser());
        foreach ($camera as $key => $value) {
            echo '<a class="list-group-item list-group-item-action"   href="index.php?camera=' . $camera[$key]['idCamera'] . '" role="tab" >' . $camera[$key]['nomCamera'] . '</a>';
        }
    } else {
        echo '<a class="list-group-item list-group-item-action"   >Pas de camera disponible</a>';
    }
}

function GetListOfCameraUserVue()
{
    if (isset($_SESSION['user'])) {
        $result = ($_SESSION['user']->GetListOfCameraUser());

        foreach ($result as $key => $value) {
            echo ('<option value="' . $result[$key]['idCamera'] . '">' . $result[$key]['nomCamera'] . '</a>');
        }
    }
}
function GetInfosVideo($videoId)
{
    $resultat = ($_SESSION['Pdo']->Select("*", "video", 'IdVideo= ' . $videoId . '', ""));
    return $resultat;
}

function GetFirstCameraUser()
{
    $camera = ($_SESSION['user']->GetListOfCameraUser());
    return $camera[0]['idCamera'];
}
