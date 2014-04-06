<div class="container_page">
    <div class="container">
        <div class="corps">
            <h3>TROUVER UN TRAJET</h3>
            <hr>
            <form id = "formPublier" action="<?php echo site_url('publier');?>" method="post">
                <div class="row">

                    <div class="col-lg-1">
                        <label>Type</label>
                    </div>
                    <div class="col-lg-4">
                        <select class="form-control">
                            <option value="offre">Offre</option>
                            <option value="demande">Demande</option>
                            <option value="peuimporte">Peu importe</option>
                        </select>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-1" >
                        <label>De</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" search="ville" class="ui-autocomplete-input" autocomplete="off" value="Votre ville" name="vileDepart">
                    </div>
                    <div class="col-lg-2">
                        <label>Code postal</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="cp" value="" search="cp" autocomplete="off" class="ui-autocomplete-input"> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-1">
                        <label>+/- Km</label>
                    </div>
                    <div class="col-lg-4">
                        <select class="form-control">
                            <option value="1">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-1">
                        <label>Date</label>
                    </div>
                    <div class="col-lg-1">
                        <input type="radio" name="date" id="peuimporte" class="radio" checked="checked"/>
                    </div>
                    <div class="col-lg-4">
                        <span>Peu importe</span> <br>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1">
                        <input type="radio" name="date" id="le" class="radio" checked="checked"/>
                    </div>
                    <div class="col-lg-1">
                        <span>le</span>
                    </div>
                    <div class="col-lg-4">
                        
                        <input  class="form-control" type="date"></td>
                    </div>
                </div>
                <input Style='background:#d9e021 ' type="submit" class="btn btn-default" value="Trouver son trajet">
            </form>
        </div>
    </div>
</div>
