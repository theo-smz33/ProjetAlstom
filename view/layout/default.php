<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo isset($title_for_layout) ? $title_for_layout : 'Amicale des cadres Alstom (in build)'; ?></title>
        <link href='<?php echo BASE_SITE . DS . '/css/bootstrap/css/bootstrap.css' ?>' rel="stylesheet">
        <link href='<?php echo BASE_SITE . DS . '/css/style.css' ?>' rel="stylesheet">

    </head>
<img class="logo" src="../webroot/img/Alstom.JPG">
<header>

    <div class="container navcolor">
    <?php if(Session::isConnected()): ?>
        <div class="d-flex flex-row m-2">
            <div class="p-2 border border-dark">
                <ul class="nav navbar-nav">
                    <li class="active" ><a href="<?= BASE_URL ?> ">Accueil </a></li>
                    <li class="active" ><a href="<?= BASE_URL ?>/Activite/liste">Liste des activités </a> </li>
                    <li class="active" ><a href="<?= BASE_URL ?>/Adherent/profil">Profil </a> </li>
                </ul>
            </div>
            <div class='nav navbar-nav navbar-right'>
                <div class='nav navbar-nav navbar-right'>
                    <?php if(Session::hasPermission("A")): ?>
                        <div class="dropdown" id="Bloc1">
                            <button class="btn draw-border btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Administration
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu select-themed" aria-labelledby="dropdownMenu1">
                                <li><a href="<?=BASE_URL?>/Admin/adherent" title="Adherent">Adherent</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?=BASE_URL?>/Admin/activite" title="Activite">Activite</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?=BASE_URL?>/Admin/prestataire">Prestataire</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?=BASE_URL?>/Admin/creneau">Creneau</a></li>
                            </ul>
                        </div>
                    <?php endif ?>
                    <?php if(!Session::hasPermission("A") && Session::hasPermission("L")): ?>
                        <div class="dropdown" id="Bloc1">
                            <button class="btn draw-border btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Leader
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu select-themed" aria-labelledby="dropdownMenu1">
                                <li><a href="<?=BASE_URL?>/Admin/creeractivite" title="creeract">Creer une activite</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?=BASE_URL?>/Admin/mesactivite" title="Activite">Mes activite</a></li>
                            </ul>
                        </div>
                    <?php endif ?>
                <form method='post' action="<?= BASE_URL ?>/Adherent/deconnexion" id="Bloc2">
                    <button type='submit' class='btn draw-border' name='Se deconnecter'>Déconnexion</button>
                </form>
            </div>
        </div>

    <?php endif ?>
</header>
    <?php
    require("modalconnection.php");
    if(!Session::isConnected()): ?>

    <div>
        <h2><center>Vous devez vous connecter pour avoir accés au contenu du site</center></h2>
    </div>

    <div>
        <button type="button" class="btn draw-border col-lg-12" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" >Connexion</button>
    </div>

    <?php endif; ?>

    </div>



    <section class="col-lg-10">
        <?= $content_for_layout ?>
    </section>

<script src='<?php echo BASE_SITE . '/js/jquery.js' ?>' ></li>
<script src='<?php echo BASE_SITE . '/js/jquery.dataTables.min.js' ?>' ></script>
<script src='<?php echo BASE_SITE . '/css/bootstrap/js/bootstrap.min.js' ?>' ></script>
<script src='<?php echo BASE_SITE . '/css/bootstrap/js/dataTables.bootstrap.min.js' ?>' ></script>
</body>
</html>