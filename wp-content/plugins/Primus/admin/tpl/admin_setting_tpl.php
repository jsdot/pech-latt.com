
<div class="row mt-3 mb-3">
    <div class="col-sm-12"  >
        <h4>Primus Paramétrage</h4>
    </div>

</div>


<div class="row">

        <!-- BEGIN FORM URL SOAP-->
        <div class="card  col-8">
            <div class="card-header">
               <h2> WSDL (URL SOAP PRIMUS)</h2>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">STOCK </label>
                        <div class="col-sm-10">
                        <input type="text" name="url_stock"  value="<?=  (!empty($url['stock']))? $url['stock']: '' ;?>"  id="inputEmail3">
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">CLIENT</label>
                        <div class="col-sm-10">
                            <input type="text" name="url_client" value="<?=  (!empty($url['client']))? $url['client']: '' ;?>" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">ORDER</label>
                        <div class="col-sm-10">
                            <input type="text" name="url_order" value="<?=  (!empty($url['order']))? $url['order']: '' ;?>" class="form-control" id="inputEmail3">
                        </div>
                    </div>


                    <?php
                    wp_nonce_field( 'primus_setting', 'url' );
                    submit_button();
                    ?>
                </form>
            </div>
        </div>
        <!-- END FORM URL SOAP-->

        <div class="card col-8">
            <div class="card-header">
                <h2>PARAMS SOAP</h2>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">CODE LOGICIEL</label>
                        <div class="col-sm-10">
                            <input type="text" name="code_logiciel" class="form-control" id="inputEmail3" value="<?=  (!empty($wsdl['code_logiciel']))? $wsdl['code_logiciel']: '' ;?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">WSDL - LOGIN</label>
                        <div class="col-sm-10">
                            <input type="text" name="wsdl_login" class="form-control" id="inputEmail3" value="<?=  (!empty($wsdl['wsdl_login']))? $wsdl['wsdl_login']: '' ;?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">WSDL -  PASSWORD</label>
                        <div class="col-sm-10">
                            <input type="text" name="wsdl_pass" class="form-control" id="inputEmail3" value="<?=  (!empty($wsdl['wsdl_pass']))? $wsdl['wsdl_pass']: '' ;?>">
                        </div>
                    </div>

                    <?php
                    wp_nonce_field( 'primus_setting', 'wsdl' );
                    submit_button();
                    ?>

                </form>
            </div>
        </div>

    <div class="card col-8">
        <div class="card-header">
            <h2>PARAMS MAJ AUTO STOCK</h2>

        </div>
        <div class="card-body">
            <form method="post">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" id="">
                            <option value="on" <?=  (!empty($cron['status']) && $cron['status'] == "on")? 'selected': '' ;?>>ON</option>
                            <option value="off" <?=  (!empty($cron['status']) && $cron['status'] == "off")? 'selected': '' ;?>>OFF</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Exécuter quand ?</label>
                    <div class="col-sm-10">
                        <select name="sequence" id="">
                            <option value="day" <?=  (!empty($cron['sequence']) && $cron['sequence'] == "day")? 'selected': '' ;?>>Tous les Jours</option>
                            <option value="week" <?=  (!empty($cron['sequence']) && $cron['sequence'] == "week")? 'selected': '' ;?>>Toutes les semaines </option>
                            <option value="month" <?=  (!empty($cron['sequence']) && $cron['sequence'] == "month")? 'selected': '' ;?>>Tous les mois</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">À quelle heure ?</label>
                    <div class="col-sm-10">
                        <input type="time" name="heure" value="<?=  (!empty($cron['heure']))? $cron['heure'].':00' : '' ;?>" class="form-control" id="inputEmail3">
                    </div>
                </div>

                <?php
                wp_nonce_field( 'primus_setting', 'cron' );
                submit_button();
                ?>

            </form>
        </div>
    </div>

    <div class="card col-8">
        <div class="card-header">
            <h2>PARAMS INVOICE REQUEST</h2>

        </div>
        <div class="card-body">

            <form method="post">

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email notification </label>
                    <div class="col-sm-10">
                        <input type="email" name="email" value="<?=  (!empty($set_invoices['email']))? $set_invoices['email']: '' ;?> " class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Message succés</label>
                    <div class="col-sm-10">
                        <input type="text" name="message_succes" value="<?=  (!empty($set_invoices['message_succes']))? $set_invoices['message_succes']: '' ;?>" class="form-control" id="inputEmail3">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Message Erreur</label>
                    <div class="col-sm-10">
                        <input type="text" name="message_erreur"  value="<?=  (!empty($set_invoices['message_erreur']))? $set_invoices['message_erreur']: '' ;?>" class="form-control" id="inputEmail3">
                    </div>
                </div>

                <?php
                wp_nonce_field( 'primus_setting', 'invoices' );
                submit_button();
                ?>

            </form>
        </div>
    </div>
</div>











