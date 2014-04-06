<meta charset="UTF-8">
<?php
$j = 1;
for ($i = 1 ; $i<$nbUtilisateurs+1;$i++){
    $user = "user".$i;
    echo eval('return $'. $user . ';');
    echo "<a href = ".site_url('admin/bannirUtilisateur/'.eval('return $'. $user . ';')."> : Bannir   /  </a>");
    echo "<a href = ".site_url('admin/debannirUtilisateur/'.eval('return $'. $user . ';')."> : Debannir </a>");
    echo "</br>";
}
?>
</br>
<a href = "<?php echo site_url('admin/');?>">Revenir a l'acceuil de l'administration</a>