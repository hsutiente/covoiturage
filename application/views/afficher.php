
<div class="container_page">
    <div class="container">
        <div class="corps">
            <h3>AFFICHAGE DU TRAJET SELECTIONNE</h3>
            <h4><?php echo $villeDepart." -> Iut de Lens";?></h4>
            <h4><?php echo "Trajet proposé par ".$nomconducteur;?></h4>
            <form>
                </br>
                <h5><a href="<?php echo site_url('affichertrajet/sinscrire/'.$id);?>">S'inscrire à ce trajet ?</a></h5>
                </br>
            </form>
            <div id="directionsDiv"></div>
            <div id="map_canvas"></div>
            <?php echo $map['js']; ?>
                <?php echo $map['html'];?>
        </div>
        <div class="info">
            <h4>Ce trajet vous intéresse ?</h4>
            <hr>
            <p Style='text-align:justify;'>
                Vous pouvez vous y inscrire en cliquant sur "S'inscrire a ce trajet"
            </p>
        </div>
        <div class="info">
            <h4>Qui participe à ce trajet ?</h4>
            <hr>
            <p Style='text-align:justify;'>
                <?php
                for ($i = 1 ; $i<$nbParticipant+1;$i++){
                    $passager = "passager".$i;
                    echo eval('return $'. $passager . ';');
                    echo "</br>";
                }
                ?>
            </p>
        </div>
    </div>
</div>
