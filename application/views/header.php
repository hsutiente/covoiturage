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