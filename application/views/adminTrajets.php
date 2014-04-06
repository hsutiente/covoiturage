<meta charset="UTF-8">
<?php
$j = 1;
for ($i = 1 ; $i<$nbTrajets+1;$i++){
    $id = "id".$i;
    $date = "villedepart".$i;
    $ville = "date".$i;
    echo "ID : ";
    echo eval('return $'. $id . ';')." / ";
    echo eval('return $'. $date . ';')." / ";
    echo eval('return $'. $ville. ';');
    echo "<a href = ".site_url('admin/supprimerTrajet/'.eval('return $'. $id . ';')."> : Supprimer ce trajet ?</a>");
    echo "</br>";
}
?>
</br>
<a href = "<?php echo site_url('admin/');?>">Revenir a l'acceuil de l'administration</a>