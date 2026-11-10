
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<div class="wrap">


    <div class="row mb-3">
        <div class="col-6">
            <h4> SECTION DEMANDE DE FACTURE  </h4>
        </div>
        <div class="col-6 text-end">

        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <table class="table" id="myTable">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Commande</th>
                    <th scope="col">status</th>
                    <th scope="col">Message</th>
                    <th scope="col">date</th>
                    <th scope="col">action</th>
                </tr>
                </thead>
                <tbody>
                <?php if (!empty($invoices)) : ?>
                    <?php foreach ($invoices as $invoice) : ?>

                        <tr>
                            <td>
                                <?= $invoice->id ?>
                                <div class="spinner-border" role="status" id="spiner-<?= $invoice->id ?>" style="display: none">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </td>
                            <td>
                                <a href="/wp-admin/post.php?post=<?= $invoice->order_id; ?>&action=edit">Order n°<?= $invoice->order_id ?></a>
                            </td>
                            <td>

                                <?php if($invoice->status == 'terminer'): ?>

                                <p><?= $invoice->status ?></p>
                                <?php else: ?>
                                    <select name="s-<?= $invoice->id ?>"  id="status">
                                        <option value=" <?= $invoice->status ?>" selected> <?= $invoice->status ?></option>
                                        <option value="terminer">terminer</option>
                                    </select>
                                <?php endif; ?>


                                <?php if($invoice->status == 'demande') :?>
                                    <span class="badge rounded-pill bg-warning"> </span>

                                <?php elseif ($invoice->status == 'terminer') :?>
                                    <span class="badge rounded-pill bg-success"> </span>

                                <?php endif; ?>
                            </td>
                            <td> <?= $invoice->message ?></td>
                            <td> <?= $invoice->creat_ad ?></td>
                            <td>

                                <?php if($invoice->status == 'demande') :?>
                                    <a href="" id="del" title="<?= $invoice->id ?>" class="btn btn-primary text-end disabled">supprimer</a>

                                <?php elseif ($invoice->status == 'terminer') :?>
                                    <button id="del" value="d-<?= $invoice->id ?>" class="btn btn-primary text-end ">supprimer</button>

                                <?php endif; ?>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>
    '

    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>

        jQuery(function($){

            $('#myTable').DataTable();

        });

    </script>

    <script>

        jQuery(function($){
            $('#status*').change( function(e){
                e.preventDefault();

                var row =$(this).attr('name');
                row =  row.split('-');
                row =  row[row.length - 1];

                $('#spiner-'+row).show();
                console.log(row);

                let valid = confirm("Confirmer le changement de status de cet facture ?");


                if (valid) {

                    $.ajax({
                        url: '<?php echo site_url(); ?>/wp-admin/admin-ajax.php', // à adapter selon la ressource
                        method: 'POST', // GET par défaut
                        data: {
                            'action': 'primus_status_invoice',
                            'id': row,
                            'status': $(this).val()
                        }, // mes variables
                        dataType: 'JSON',
                        success: function (data) { // en cas de requête réussie
                            console.log(data);
                            setTimeout(function () {
                                $('#spiner-' + row).hide();
                            }, 1000);
                            setTimeout(function () {
                                location.reload();
                            }, 2000);
                        },
                        error: function (data) { // en cas d'échec
                            // Sinon je traite l'erreur

                            location.reload();
                        }
                    });

                }
            });


            $('#del*').click( function(e){
                e.preventDefault();

                var row =$(this).attr('value');
                row =  row.split('-');
                row =  row[row.length - 1];

                $('#spiner-'+row).show();


                let valid = confirm('êtes vous sur de vouloir suprimer la demande de facture N° ' + row+" ?");
                if (valid) {

                    $.ajax({
                        url: '<?php echo site_url(); ?>/wp-admin/admin-ajax.php', // à adapter selon la ressource
                        method: 'POST', // GET par défaut
                        data: {
                            'action': 'primus_del_invoice',
                            'id': row,
                        }, // mes variables
                        dataType: 'JSON',
                        success: function (data) { // en cas de requête réussie
                            console.log(data);
                            setTimeout(function () {
                                $('#spiner-' + row).hide();
                            }, 1000);
                            setTimeout(function () {
                               location.reload();
                            }, 2000);
                        },
                        error: function (data) { // en cas d'échec
                            // Sinon je traite l'erreur
                            location.reload();
                        }
                    });

                }

            })




        });


    </script>