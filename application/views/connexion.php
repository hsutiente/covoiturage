    <div class="add">
        <div class="container">
            <div id="add">
                <p style='float:right'>Toujours pas inscrit ? <br> <a href="<?php echo site_url('inscription');?>">Inscrivez-vous maintenant !</a></p>

                <h3>CONNEXION</h3>
                <hr>
                <form id = "formConnexion" action="<?php echo site_url('connexion');?>" method="post">
                    <table cellspacing="10" width="500">
                        <tr>
                            <td colspan='4' height="50"><label for='login'>Login ou E-mail</label></td>
                            <td colspan='2'> <input class="form-control" type='text' id='login' name='login'> </td>
                        </tr>

                        <tr>
                            <td colspan='4' height="50"><label for='pass'>Mot de passe</label></td>
                            <td colspan='2'> <input class="form-control" type='password' id='pass' name='pass'> </td>
                        </tr>
                        <tr>
                            <td colspan='0' height="0"><label for='rememberme'>Se souvenir de moi</label></td>
                            <td colspan='4'> <input class="form-control" type='checkbox' id='rememberme' name='rememberme'> </td>
                        </tr>

                        <tr>
                            <td colspan='4' height="50"></td>
                            <td align='centre'><input Style='background:#d9e021 ' type="submit" class="btn btn-default" value="Se connecter"></td>

                        </tr>
                    </table>


                </form>



            </div> 

            <div class="info">
                

            </div>

        </div>
    </div>
