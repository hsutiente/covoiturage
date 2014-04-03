
<div class="container_page">
    <div class="container">
        <div id="corps">
            <h3>AFFICHAGE DU TRAJET SELECTIONNE</h3>
            <h4><?php echo $villeDepart." - Iut de Lens";?></h4>
            <h4><?php echo "Trajet proposé par ".$nomconducteur;?></h4>
            <h5><a href="">S'inscrire à ce trajet ?</a></h5>
            <div id="directionsDiv"></div>
            <div id="map_canvas"></div>

            <?php echo $map['js']; ?>
                <?php echo $map['html'];?>
            </div>
        </div>
    </div>
</div>