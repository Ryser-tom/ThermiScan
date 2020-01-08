<?php

function GetListOfCameraUser($idUser)
{
$resultat = ($_SESSION['Pdo']->Select("*", "camera", 'IdUser= '.$idUser.'' ,""));
return $resultat;
}
?>