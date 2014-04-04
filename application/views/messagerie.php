<?php
//On récupère les données de la session afin de vérifier si l'utilisateur est connecté ou non
$verifSession = $this->session->userdata('pseudoConnecte');
?>
<?php
if($verifSession){
?>
<div class="container_page">
    <div class="container">
        <div class="corps">
            <h3>ENVOYER UN MESSAGE</h3>
            <hr>
            <form id = "formInscription" action="<?php echo site_url('messages');?>" method="post">
                <table cellspacing="10" width="500">
                    <tr>
                        <td colspan='4' height="50"><label for='destinataire'>Destinataire</label></td>
                        <td colspan='2'> <input class="form-control" type='text' id='destinataire' name='destinataire'> </td>
                    </tr>
                    <tr>
                        <td colspan='4' height="50"><label for='sujet'>Sujet</label></td>
                        <td colspan='2'> <textarea id="sujet" name="sujet" rows='1' cols='85'></textarea></td>
                    </tr>
                    <tr>
                        <td colspan='4' height="50"><label for='message'>Message</label></td>
                        <td colspan='2'> <textarea id="message" name="message" rows='7' cols='85'></textarea></td>
                    </tr>

                    <tr>
                        <td colspan='4' height="50"></td>
                        <td align='centre'><input Style='background:#d9e021 ' type="submit" class="btn btn-default" value="Envoyez votre message"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="corps">
            <h3>MESSAGES RECUS</h3>
            <?php
                $j=1;
                for ($i = 0 ; $i<$nbEntite;$i=$i+3){
                    $dest = "dest".$j;
                    $suj = "suj".$j;
                    $messages = "messages".$j;
                    echo eval('return $'. $dest . ';')." ";
                    echo eval('return $'. $suj . ';')." ";
                    echo eval('return $'. $messages . ';')." ";
                    echo "</br>";
                    $j=$j+1;
                }
            ?>
        </div>
    </div>
</div>




<?php
}
else{
?>
    <div class="container_page">
        <div class="container">
            <div class="corps">
                <h3>VEUILLEZ VOUS INSCRIRE OU VOUS CONNECTEZ</h3>
            </div>
            <div class="info">
                <h4>Inscrivez-vous gratuitement !</h4>
                <hr>
                <p Style='text-align:justify;'>
                    Notre site met en relation conducteurs et passagers. Que vous soyez conducteur à la recherche de passagers, ou passager à la recherche d'une place libre, consultez les profils et évaluations de vos covoitureurs et voyagez en toute confiance !
                </p>
            </div>
        </div>
    </div>
<?php
}
?>