<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Auteur  : Lorenzo Bauduccio
 * Classe  : Tech 1
 * Version : 1.0
 * Date    : 18.12.2019
 * description: script de connexion au site
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

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
            <img src="https://logodix.com/logo/2121245.png" style="width:auto">
        </div>
        <!-- 16:9 aspect ratio -->
        <div class="col-md-5">
            <img src="img/graph.png" style="width:auto">
        </div>
    </div>
</div>