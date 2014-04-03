<script type = text/javascript>
    $(function(){
            $("#formInscription").submit(function(){
                login =  $(this).find("input[name=login]").val();
                prenom = $(this).find("input[name=prenom]").val();
                nom = $(this).find("input[name=nom]").val();
                mail = $(this).find("input[name=email]").val();
                motdepasse = $(this).find("input[name=pass]").val();
            });
    });
</script>
    <div class="container_page">
        <div class="container">
            <div class="corps">
                <p style='float:right'>Déjà inscrit ? <br> <a href="<?php echo site_url('connexion');?>">Connectez-vous</a></p>

                <h3>NOUVELLE INSCRIPTION <br />

                </h3>
                <hr>
                <form id = "formInscription" action="<?php echo site_url('inscription');?>" method="post">
                    <table cellspacing="10" width="500">

                        <tr>
                            <td colspan='4' height="50"><label for='login'>Login</label></td>
                            <td colspan='2'> <input class="form-control" type='text' id='login' name='login'> </td>
                        </tr>

                        <tr>
                            <td colspan='4' height="50"><label for='prenom'>Prénom</label></td>
                            <td colspan='2'> <input class="form-control" type='text' id='prenom' name='prenom'> </td>
                        </tr>

                        <tr>
                            <td colspan='4' height="50"><label for='nom'>Nom</label></td>
                            <td colspan='2'> <input class="form-control" type='text' id='nom' name='nom'> </td>
                        </tr>

                        <tr>
                            <td colspan='4' height="50"><label for='email'>E-mail</label></td>
                            <td colspan='2'> <input class="form-control" type='text' id='email' name='email'> </td>

                            <?php
                            echo form_error('email'); ?>
                        </tr>

                        <tr>
                            <td colspan='4' height="50"><label for='pass'>Mot de passe</label></td>
                            <td colspan='2'> <input class="form-control" type='password' id='pass' name='pass'> </td>
                        </tr>

                        <tr>
                            <td colspan='4' height="50"><label for='sexe'>Sexe</label></td>
                            <td><label for='homme'> Homme</label> <input class="checkbox" type='radio' id='homme' name='sexe'> </td>
                            <td><label for='femme'> Femme </label><input class="checkbox" type='radio' id='femme' name='femme'> </td>
                        </tr>

                        <tr>
                            <td colspan='4' height="50"><label for='fonction'>Fonction</label></td>
                            <td colspan='2'>
                                <select class="form-control" type='text' id='fonction' name='fonction'>
                                    <option>Etudiant</option>
                                    <option>Enseignant</option>
                                    <option>Personnel</option>
                                    <option>Autre ...</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='4' height="50"></td>
                            <td align='centre'><input Style='background:#d9e021 ' type="submit" class="btn btn-default" value="Je m'inscris"></td>
                        </tr>
                    </table>
                </form>
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