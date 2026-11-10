
    <div class="row mt-3 mb-3">
        <div class="col-12 bg-success text-center" >
            <h3 class="text-white">Primus SETTING</h3>
        </div>
          
    </div>

    <?php

    db_creat_log('success', 'invoice email send order id ');

    dump(db_all_logs());


    ?>
    <div class="row">
        <div class="col-8">

           <h6>URL endpoint</h6>
           <hr>
        <form method="post" action="<?php DIR_PATH.'primus/admin/admin_generale.php' ?>">
        <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Clients</label>
    <div class="col-sm-10">
      <input type="email" name="url_client" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Stock</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">VENTE</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>


    <h6 class="mt-4">Fichier WSDL</h6>
<hr>
    <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">WSDL (STOCK)</label>
</div>
<div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">WSDL (ARTICLE)</label>
</div>
<div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">WSDL (VENTE)</label>
</div>
<input type="submit" value="submit">
</form>
        </div>
    </div>