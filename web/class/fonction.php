<?php

function GetListOfvideoCameraVue()
{
    if (isset($_SESSION['user'])) {
        $video = ($_SESSION['user']->GetListOfVideo());

        foreach ($video as $key => $value) {

            echo '<button type="button" class="list-group-item list-group-item-action">' . $video[$key]['nomVideo'] . '</button>';
        }
    }
}

function GetListOfCameraVue()
{
    if (isset($_SESSION['user'])) {
        $camera = ($_SESSION['user']->GetListOfCameraUser());

        foreach ($camera as $key => $value) {
            echo '<a class="list-group-item list-group-item-action"   href="lol.php" role="tab" >' . $camera[$key]['nomCamera'] . '</a>';
        }
    } else {
        echo "lol";
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
