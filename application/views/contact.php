<div class="container_page">
    <div class="container">
        <div class="corps">
            <p style='float:right'>Déjà inscrit ? <br> <a href="<?php echo site_url('connexion');?>">Connectez-vous</a></p>

            <h3>CONTACTEZ NOUS<br />

            </h3>
            <hr>
            <form id = "formInscription" action="<?php echo site_url('contacter');?>" method="post">
                <table cellspacing="10" width="500">
                    <tr>
                        <td colspan='4' height="50"><label for='email'>E-mail</label></td>
                        <td colspan='2'> <input class="form-control" type='text' id='email' name='email'> </td>

                    </tr>
                    <tr>
                        <td colspan='4' height="50"><label for='contenu'>Message</label></td>
                        <td colspan='2'> <textarea id="message" name="message" rows='7' cols='85'></textarea></td>

                    </tr>
                    <tr>
                        <td colspan='4' height="50"></td>
                        <td align='centre'><input Style='background:#d9e021 ' type="submit" class="btn btn-default" value="Envoyez votre message"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="info">
            <h4>Besoin d'aide ? Contactez nous</h4>

            <hr>
            <p Style='text-align:justify;'>
            </p>
        </div>
    </div>
</div>