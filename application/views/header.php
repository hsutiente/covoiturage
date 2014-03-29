<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <title>Covoiturage</title>
        <link rel="icon" href="<?php echo img_url('favicon.ico');?>" />
        <meta name="accueil" content="Index">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo js_url($test='script');?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo css_url($test='bootstrap');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url($test='style');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url($test='apiUtils.css');?>">

        <script type="text/javascript">

            function afficherCriteres(){
                var elmt = document.getElementById("criteresliste");
                elmt.style.visibility = "visible";

                var recherche = document.getElementById("rechercher");
                recherche.style.height = "280px";
                return true;
            }
        </script>
    </head>
<body>
<div class="top">
    <img align="left" width="15" src="<?php echo img_url('logo_1.png');?>">
    <img align="centre" width="50" src="<?php echo img_url('voiture.png');?>">
    <img align="centre" width="50" src="<?php echo img_url('voiture.png');?>">
    <img align="centre" width="50" src="<?php echo img_url('voiture.png');?>">

    <?php
    $verifSession = $this->session->userdata('pseudoConnecte');
    if (!$verifSession){
    ?>
    <div class="login" align="centre">
        <button onClick="openWindow();" type="button" class="btn btn-default"><a href="<?php echo site_url('connexion');?>">Se connecter</a></button>
        ou
        <button type="button" class="btn btn-default"><a href="<?php echo site_url('inscription');?>">S'inscrire</a></button>
    </div>
    <?php
    }
    else{
    ?>
        <div class="login" align="centre">
            <button onClick="openWindow();" type="button" class="btn btn-default"><a href="<?php echo site_url('deconnexion');?>">Se déconnecter</a></button>
            ou
            <button type="button" class="btn btn-default"><a href="<?php echo site_url('editer');?>">Editer son profil</a></button>

        </div>
    <?php
    }
    ?>

    <img id="logo" align="right" width="150" src="<?php echo img_url('logo_2.png');?>">
</div>
<div class="header">
    <div class="container">
        <div class="logo">

            <h1 class="titre" id="title"><a href="<?php echo site_url('index');?>">Covoiturage IUT de Lens</a></button></h1>
        </div>
        <img id="lens" align="right" src="<?php echo img_url('lens.png');?>">
    </div>
</div>

<?php
if($verifSession){
?>
<div class="notif">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Acceuil</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li ><a href="<?php echo site_url('trouver');?>">Trouver un trajet</a></li>
                    <li ><a href="<?php echo site_url('publier');?>">Publier un trajet</a></li>
                </ul>
                <ul  class="nav navbar-nav navbar-right">
                    <li><a href="#" data-notification="5" class="notifications"><img src="<?php echo img_url('inbox.png');?>"></a></li>
                    <ul class="nav navbar-nav navbar-left">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo img_url('avatar.png');?>"> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Mon profil</a></li>
                                <li><a href="#">Mes trajets</a></li>
                                <li class="divider"></li>
                                <li><a href="#">&Eacutedit√© mon profil</a></li>
                            </ul>
                        </li>
                    </ul>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<?php
}
?>