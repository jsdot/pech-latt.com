
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<div class="wrap">


    <div class="row mb-3">
        <div class="col-6">
            <h4> SECTION CLIENTS WOO _ PRIMUS  </h4>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <table class="table" id="myTable">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">email</th>
                    <th scope="col">code client Primus</th>
                    <th scope="col">date creation</th>
                    <th scope="col">action</th>
                </tr>
                </thead>
                <tbody>


                <?php if (!empty($clients)) : ?>
                    <?php foreach ($clients as $client) : ?>
                        <?php
                              $customer = db_customer_by_email($client->email);



                        ?>

                        <tr>
                            <td> <?= $client->id ?></td>
                            <td>
                                <a class="btn btn-primary" href="/wp-admin/admin.php?page=wc-admin&path=%2Fcustomers&filter=advanced&email_includes=<?= $customer->customer_id ?>">
                                    <?= $customer->first_name ?> <?= $customer->last_name ?>
                                </a>
                            </td>
                            <td>  <?= $client->email ?></td>
                            <td> <?= $client->primus_cl ?></td>
                            <td> <?= $client->creat_ad ?></td>
                            <td>
                                <a class="btn btn-primary" href="/wp-admin/admin.php?page=wc-admin&path=%2Fcustomers&filter=advanced&email_includes=<?= $customer->customer_id  ?>"> Voir </a>
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

