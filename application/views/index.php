<?php
$verifSession = $this->session->userdata('pseudoConnecte');
?>
    <?php
    if(!$verifSession){
    ?>

    <div id="rechercher">
        <div class="container">
            <div class="publier">
                <a href="<?php echo site_url('publier');?>" class="btn btn-success">Publier un trajet</a>
            </div>
            <div class="trouver" >
                <h3>Trouver votre covoiturage</h3>
                <form method='POST' action='' name="rechercher">
                    <table >
                        <tr>
                            <td colspan="3"> <label for='villeDepart'>Ville de départ</label> </td>
                            <td ><input search="ville" class="ui-autocomplete-input" autocomplete="off" id='villeDepart' type="text" name="depart"> </td>
                            <td width='10'></td>
                            
                            <td colspan="3"><label for='dateDepart'>Date de départ</label></td> 

                            <td width='240'><input class="form-control" id='dateDepart' type='text' name="dateDepart" onclick="ds_sh(this);"></td>
                            
                            <td><input type="submit" class="btn btn-default" value="Rechercher"></td>
                            <table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
                                <tr>
                                    <td id="ds_calclass"></td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <td><a href="#" id="criteres" onClick="afficherCriteres();return false;">Plus de critères</a></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <table style="visibility:hidden;clear:both;" id="criteresliste">
                        <tr>
                            <td><label for="type">Département</label></td>
                            <td colspan="3">
                                <select class="form-control" name="type" id="type">

                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><label for="type">Type d'annonce</label></td>
                            <td colspan="3">
                                <select class="form-control" name="type" id="type">
                                    <option value="All">Conducteur &amp; Passager</option>
                                    <option value="Conducteur" >Conducteur uniquement</option>
                                    <option value="Passager" >Passager uniquement</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><label for="depart_km">Ville de départ</label></td>
                            <td>
                                <select class="form-control" name="depart_km" id="depart_km">
                                    <option value="60" >+/- 10 km</option>
                                    <option value="30" >+/- 5 km</option>
                                    <option value="10" >+/- 2 km</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><label for="tri">Trier par</label></td>
                            <td colspan="3">
                                <select class="form-control" name="tri" id="tri">
                                    <option value="DATE HEURE">Date & Heure de départ</option>
                                    <option value="PRIX ASC">Prix croissant</option>
                                    <option value="PRIX DESC">Prix décroissant</option>
                                    <option value="PLACES ASC">Nombre de places croissant</option>
                                    <option value="PLACES DESC">Nombre de places décroissant</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php
    }
?>
    <div class="container_page">
        <div class="container">
            <div class="corps">
                <h3>Les 10 derniers trajets publiés </h3>
                <hr>
                <?php
                echo "- Au départ de ".$trajetunville." le ".$trajetundate." ";
                echo "cliquez : "?><a href="<?php echo site_url('affichertrajet/afficher/'.$trajetunid.'/');?>">ici </a>
                </br>
                <?php
                echo "- Au départ de ".$trajetdeuxville." le ".$trajetdeuxdate." ";
                echo "cliquez : "?><a href="<?php echo site_url('affichertrajet/afficher/'.$trajetdeuxid.'/');?>">ici </a>
                </br>
                <?php
                echo "- Au départ de ".$trajettroisville." le ".$trajettroisdate." ";
                echo "cliquez : "?><a href="<?php echo site_url('affichertrajet/afficher/'.$trajettroisid.'/');?>">ici </a>
                </br>
                <?php
                echo "- Au départ de ".$trajetquatreville." le ".$trajetquatredate." ";
                echo "cliquez : "?><a href="<?php echo site_url('affichertrajet/afficher/'.$trajetquatreid.'/');?>">ici </a>
                </br>
                <?php
                echo "- Au départ de ".$trajetcinqville." le ".$trajetcinqdate." ";
                echo "cliquez : "?><a href="<?php echo site_url('affichertrajet/afficher/'.$trajetcinqid.'/');?>">ici </a>
                </br>
                <?php
                echo "- Au départ de ".$trajetsixville." le ".$trajetsixdate." ";
                echo "cliquez : "?><a href="<?php echo site_url('affichertrajet/afficher/'.$trajetsixid.'/');?>">ici </a>
                </br>
                <?php
                echo "- Au départ de ".$trajetseptville." le ".$trajetseptdate." ";
                echo "cliquez : "?><a href="<?php echo site_url('affichertrajet/afficher/'.$trajetseptid.'/');?>">ici </a>
                </br>
                <?php
                echo "- Au départ de ".$trajethuitville." le ".$trajethuitdate." ";
                echo "cliquez : "?><a href="<?php echo site_url('affichertrajet/afficher/'.$trajethuitid.'/');?>">ici </a>
                </br>
                <?php
                echo "- Au départ de ".$trajetneufville." le ".$trajetneufdate." ";
                echo "cliquez : "?><a href="<?php echo site_url('affichertrajet/afficher/'.$trajetneufid.'/');?>">ici </a>
                </br>
                <?php
                echo "- Au départ de ".$trajetdixville." le ".$trajetdixdate." ";
                echo "cliquez : "?><a href="<?php echo site_url('affichertrajet/afficher/'.$trajetdixid.'/');?>">ici </a>



                </br>
                </br>
                <a href=""> Afficher tous les trajets</a>

            </div>
            <div class="info">
                <h3>Suivez-nous sur FB</h3>
                <hr>
            </div>
        </div>
    </div>