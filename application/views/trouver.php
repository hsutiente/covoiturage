<div class="container_page">
    <div class="container">
        <div class="corps">
            <h3>TROUVER UN TRAJET</h3>
            <hr>
            <form id = "formPublier" action="<?php echo site_url('publier');?>" method="post">

                <table cellspacing="10" cellpadding="10">
                    <tr>
                        <td><label>Type</label></td>
                        <td>
                            <select class="form-control">
                                <option value="offre">Offre</option>
                                <option value="demande">Demande</option>
                                <option value="peuimporte">Peu importe</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label>De</label></td>
                        <td><input type="text" search="ville" class="ui-autocomplete-input" autocomplete="off" value="Votre ville" name="vileDepart"></td>
                        <td><label>Code postal</label></td>
                        <td><input type="text" name="cp" value="" search="cp" autocomplete="off" class="ui-autocomplete-input"> </td>
                    </tr>

                    <tr>
                        <td><label>+/- Km</label></td>
                        <td>
                            <select class="form-control">
                                <option value="1">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Date</label></td>
                        <td>
                            <input type="radio" name="date" id="peuimporte" class="radio" checked="checked"/>
                            <span>Peu importe</span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="radio" name="date" id="le" class="radio" checked="checked"/>
                            <span>le</span>
                        </td>
                        <td><input  class="form-control" type="date"></td>
                    </tr>

                </table>
                <input Style='background:#d9e021 ' type="submit" class="btn btn-default" value="Trouver son trajet">
            </form>
        </div>
    </div>
</div>
