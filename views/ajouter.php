

<div class="container_page">
    <div class="container">
        <div class="corps  form_ajoutTrajet">
            <h3>AJOUTER UN TRAJET</h3>
            <hr>
            <form method="POST">
                <fieldset>
                    <label for='date' width="150">Date <abbr title="Obligatoire">*</abbr> </label>
                    <table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
                        <tr>
                            <td id="ds_calclass"></td>
                        </tr>
                    </table>
                    <input id='date'  type='text' name="date" onclick="ds_sh(this);">

                    <br/>

                    
                    <label for='heure'>Heure </label>

                    <select  name="heure"  id="heure">
                        <option value=""></option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                    </select>
                    <select  name="min"  id="minute">
                        <option value=""></option>
                        <option value="00">00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                </fieldset>
                    <br>
                <fieldset>
                    <legend >Trajet <abbr title="Obligatoire">*</abbr></legend> <br>
                    <img src="img/marker.png"> <label>De</label> <input > <br>
                    <span id="par_1">
                    <img src="img/marker_2.png"> 

                    <label>Par</label> <input type="submit" class="btn btn-default" onclick="create_champ(1);" value="Ajouter une étape">

                       
                    </span>

                    <br>
                    <img  src="img/marker_3.png"> <label>à</label> <b>IUT de Lens</b>
                    <br>

                </fieldset>
                <fieldset>
                    <label>Place <abbr title="Obligatoire">*</abbr>
                    <a rel="tooltip" title="Correspond au nombre de personnes que vous pouvez transporter avec vous dans votre voiture."><img src="img/icon_tooltip.gif"></a>
                    </label>
                    <select  name="nbPlaces" required>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                    </select>
                    <br>

                    <label>Options de recherche</label> <br><br>

                    <input type='checkbox'> Réservé aux femmes<a rel="tooltip" title="Si vous cochez cette option, votre trajet sera proposé aux femmes."><img src="img/icon_tooltip.gif"></a> <br>
                    <input type='checkbox'> Réservé aux hommes<a rel="tooltip" title="Si vous cochez cette option, votre trajet sera proposé aux hommes."><img src="img/icon_tooltip.gif"></a> <br>
                    <input type='checkbox'> Fumeurs <br>
                    <input type='checkbox'> Musiques <br>
                    <input type='checkbox'> Discussion <br> <br>
                  

                    <label>Commentaire</label>
                    <textarea  class='form-control' rows='7' cols='85' placeholder=' Complétez votre annonce par un message détaillant au mieux votre trajet (lieu de RDV, arrêt, détour, style de conduite, conversation...). Conformément aux règles du site, merci de ne saisir ici aucun n° de téléphone, mais de compléter les informations de votre profil.'>
                    </textarea>
                </fieldset>



                <input Style='background:#d9e021;border:1px solid #fff;float:right;' type="submit" class="btn btn-default" value="Continuer">


            </form>

        </div>

        <div>


        </div>


    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="./dist/js/bootstrap.js"></script>

