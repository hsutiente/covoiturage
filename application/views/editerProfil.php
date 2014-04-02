<div class="container_page">
    <div class="container">
        <div id="corps">

            <h3>EDITION DU PROFIL</h3>
            <hr>
            <form id = "formEdition" action="<?php echo site_url('editer');?>" method="post">
                <table cellspacing="10" width="500">
                    <tr>
                        <td colspan='4' height="50"><label for='email'>E-mail</label></td>
                        <td colspan='2'> <input class="form-control" value = "<?php echo $email; ?>"type='text' id='email' name='email'> </td>
                    </tr>
                    <tr>
                        <td colspan='4' height="50"><label for='pass'>Mot de passe</label></td>
                        <td colspan='2'> <input class="form-control" type='password' id='pass1' name='pass1'> </td>
                    </tr>
                    <tr>
                        <td colspan='4' height="50"><label for='pass'>Confirmation mot de passe</label></td>
                        <td colspan='2'> <input class="form-control" type='password' id='pass2' name='pass2'> </td>
                    </tr>
<!--                    <tr>-->
<!--                        <td colspan='4' height="50"><label for='fonction'>Fonction</label></td>-->
<!--                        <td colspan='2'>-->
<!--                            <select class="form-control" type='text' id='fonction' name='fonction'>-->
<!--                                <option>Etudiant</option>-->
<!--                                <option>Enseignant</option>-->
<!--                                <option>Personnel</option>-->
<!--                                <option>Autre ...</option>-->
<!--                            </select>-->
<!--                        </td>-->
<!--                    </tr>-->
                    <tr>
                        <td colspan='4' height="50"></td>
                        <td align='centre'><input Style='background:#d9e021 ' type="submit" class="btn btn-default" value="Mettre a jour mes informations"></td>

                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>