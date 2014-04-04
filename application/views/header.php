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
    <script type="text/javascript" src="<?php echo js_url($test='calendrier');?>"></script>
    <script type="text/javascript" src="<?php echo js_url($test='widget.js?appname=CitySearch&appkey=sob0b965c1496e6daaf49ab7175a271cdb9c6b364b&needcss=1&sdefault=1&debug=1');?>"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo css_url($test='bootstrap');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo css_url($test='style');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo css_url($test='apiUtils');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo css_url($test='design');?>">

    <script type="text/javascript">

    $(document).ready(function() {

    //Select all anchor tag with rel set to tooltip
    $('a[rel=tooltip]').mouseover(function(e) {

        //Grab the title attribute's value and assign it to a variable
        var tip = $(this).attr('title');    
        
        //Remove the title attribute's to avoid the native tooltip from the browser
        $(this).attr('title','');
        
        //Append the tooltip template and its value
        $(this).append('<div id="tooltip"><div class="tipHeader"></div><div class="tipBody">' + tip + '</div><div class="tipFooter"></div></div>');     

        //Show the tooltip with faceIn effect
        $('#tooltip').fadeIn('500');
        $('#tooltip').fadeTo('10',0.9);
        
    }).mousemove(function(e) {

        //Keep changing the X and Y axis for the tooltip, thus, the tooltip move along with the mouse
        $('#tooltip').css('top', e.pageY + 10 );
        $('#tooltip').css('left', e.pageX + 20 );
        
    }).mouseout(function() {

        //Put back the title attribute's value
        $(this).attr('title',$('.tipBody').html());

        //Remove the appended tooltip template
        $(this).children('div#tooltip').remove();
        
    });

});

function afficherCriteres(){
    var elmt = document.getElementById("criteresliste");
    elmt.style.visibility = "visible";

    var recherche = document.getElementById("rechercher");
    recherche.style.height = "280px";
    return true;
}

function create_champ(i) {

    var nb = i + 1;

    document.getElementById('par_'+i).innerHTML = '<span id="par_'+i+'"> <img src="<?php echo img_url('marker_2.png')?>"> <label> Par </label> <input type="text" name="villeEtape_'+i+'">';
    document.getElementById('par_'+i).innerHTML += 'Heure <select name="heure_'+i+'"> <option value=""></option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>  <option value="5">5</option><option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option> <option value="15">15</option> <option value="16">16</option> <option value="17">17</option> <option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option> </select> ';
    document.getElementById('par_'+i).innerHTML += '<select  name="minute_'+i+'" > <option value=""></option> <option value="00">00</option>  <option value="15">15</option> <option value="30">30</option>  <option value="45">45</option> </select>';
    document.getElementById('par_'+i).innerHTML += (i <= 5) ? '<br /><span id="par_'+nb+'"><img src="<?php echo img_url('marker_2.png')?>"> <label>Par</label> <a class="btn btn-default" href="javascript:create_champ('+nb+')">Ajouter une étape</a> <span Style="color:Gray;">ASTUCE : ajouter des étapes permet de trouver plus de passagers!</span>  <a rel="tooltip" title="Choisis jusqu\'à 5 lieux / villes le long de ton itinéraire comme étapes – ça en vaut la peine."><img src="img/icon_tooltip.gif"></a></span>' : '';

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
<!--                <button onClick="openWindow();" type="button" class="btn btn-default"><a href="--><?php //echo site_url('deconnexion');?><!--">Se déconnecter</a></button>-->


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
                        <a class="navbar-brand" href="<?php echo site_url('index');?>">Acceuil</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li ><a href="<?php echo site_url('trouver');?>">Trouver un trajet</a></li>
                            <li ><a href="<?php echo site_url('publier');?>">Publier un trajet</a></li>
                        </ul>
                        <ul  class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo site_url('messages');?>" data-notification="5" class="notifications"><img src="<?php echo img_url('inbox.png');?>"></a></li>
                            <ul class="nav navbar-nav navbar-left">

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo img_url('avatar.png');?>"> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('editer');?>">Mon profil</a></li>
                                        <li><a href="<?php echo site_url('index');?>">Mes trajets</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo site_url('editer');?>">Editer mon profil</a></li>
                                        <li><a href="<?php echo site_url('deconnexion');?>">Se déconnecter</a></li>

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