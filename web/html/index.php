<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 18.12.2019
 * description: script de connexion au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
if (isset($_GET['video'])) {
    $video =  GetInfosVideo($_GET['video']);
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" style="padding-left:0px;">
            <!-- Content -->
            <form>
                <div class="list-group">

                    <?php
                    GetListOfvideoCameraVue();
                    ?>
                </div>
            </form>
        </div>
        <!-- Video content with the graph and the options -->
        <div class="col-md-5 ">
            <video width="auto" height="auto" controls="controls">
                <?php
                echo "<source src=file/done/" . $video[0]['nomDossier'] . "/video.mp4 type=\"video/mp4\" />";
                ?>
                <source src="video.mp4" type="video/mp4" />
                Ici l'alternative à la vidéo : un lien de téléchargement, un message, etc.
            </video>
        </div>
        <!-- 16:9 aspect ratio -->
        <div class="col-md-5">
            <div id="chart"></div>
        </div>
    </div>
</div>
<?php
if (isset($_GET['video'])) {
    echo "<script>
var folder = \"" . $video[0]['nomDossier'] . "\";
</script>";
}
?>