<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 26.02.2020
 * description: index du site Themiscan
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
if (isset($_GET['video'])) {
    $video =  GetInfosVideo($_GET['video']);
}
if (isset($_SESSION['user'])) {
    if (isset($_SESSION['cameraUser']) == false) {
        $_SESSION['cameraUser'] = GetFirstCameraUser();
    }
}
if (isset($_GET['camera'])) {
    $_SESSION['cameraUser'] =  $_GET['camera'];
}
if (isset($_SESSION['user'])) {
?>
    <div class="container-fluid">
        </br>
        <div class="row">
            <div class="col-md-3" style="padding-left:0px;">
                <form>
                    <div class="list-group">

                        <?php
                        GetListOfvideoCameraVue($_SESSION['cameraUser']);
                        ?>
                    </div>
                </form>
            </div>
            <?php
            ///diplay video and graph only if one is selected
            if (isset($video)) {
            ?>
                <div class="col-md-9 ">
                    <div class="row">
                        <video width="auto" height="auto" controls="controls">
                            <?php
                            echo "<source src=file/done/" . $video[0]['nomDossier'] . "/video.mp4 type=\"video/mp4\" />";
                            ?>
                            <source src="video.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="row">
                        <div id="chart"></div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    <?php
}
if (isset($_GET['video'])) {
    echo "<script>
var folder = \"" . $video[0]['nomDossier'] . "\";
</script>";
}
    ?>