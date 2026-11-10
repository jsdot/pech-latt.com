
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<div class="wrap">


    <div class="row mb-3">
        <div class="col-6">
            <h4> SECTION LOGS  </h4>
        </div>
        <div class="col-6 text-end">
            <a href="" id="del_log" class="btn btn-primary text-end"> Vider les logs</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <table class="table" id="myTable">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Status</th>
                    <th scope="col">Message</th>
                    <th scope="col">date</th>
                </tr>
                </thead>
                <tbody>
                <?php if (!empty($logs)) : ?>
                    <?php foreach ($logs as $log) : ?>
                        <tr>
                            <td> <?= $log->id ?></td>
                            <td> <?= $log->status ?></td>
                            <td> <?= $log->message ?></td>
                            <td> <?= $log->creat_ad ?></td>
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
            $('#del_log').click( function(e){
                e.preventDefault();
                let valid = prompt("suprimer tout les logs ? (reponse oui ou non)", "");
                if (valid == 'oui') {

                    $.ajax({
                        url: '<?php echo site_url(); ?>/wp-admin/admin-ajax.php', // à adapter selon la ressource
                        method: 'POST', // GET par défaut
                        data: {
                            'action': 'primus_del_all_logs',
                        }, // mes variables
                        dataType: 'JSON',
                        success: function (data) { // en cas de requête réussie
                            console.log(data);
                            location.reload();
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