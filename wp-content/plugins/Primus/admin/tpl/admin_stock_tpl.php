<?php



/*
$products =new WC_Product(15);
$products->set_regular_price( 399.00 );
$products->set_stock_quantity( '200' );

$products->save();

dump($products);
*/
global $product;

dump($product);




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
                    <th scope="col">SKU</th>
                    <th scope="col">NAME</th>
                    <th scope="col">Qté</th>
                    <th scope="col">Prix</th>
                    <th scope="col">action</th>
                </tr>
                </thead>
                <tbody>
                <?php if (!empty($products)) : ?>
                    <?php foreach ($products as $product) : ?>
                        <?php
                            $article =new WC_Product($product->product_id);
                        ?>
                        <tr>
                            <td> <?= $product->product_id ?></td>
                            <td><?= $product->sku ?> </td>
                            <td><?= $article->get_name() ?> </td>
                            <td><?= $article->get_stock_quantity() ?> </td>
                            <td><?= $article->get_regular_price() ?> </td>
                            <td>

                                <button  id="maj_product"  value="<?= $product->product_id ?>" class="btn btn-primary text-end disabled">Mettre à jour</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>


    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>

        jQuery(function($){

            $('#myTable').DataTable();

        });

    </script>


    <script>


            jQuery("#maj_product*").click(function(e) {
                e.preventDefault();

                var id = jQuery(this).val()
                alert(jQuery(this).val());

                jQuery.ajax({
                    url: '<?php echo site_url(); ?>/wp-admin/admin-ajax.php', // à adapter selon la ressource
                    method: 'POST', // GET par défaut
                    data: {
                        'action': 'primus_maj_product',
                        'id': id,

                    }, // mes variables
                    dataType: 'JSON',
                    success: function (data) { // en cas de requête réussie
                        console.log(data);
                        setTimeout(function () {
                           // location.reload();
                        }, 2000);
                    },
                    error: function (data) { // en cas d'échec
                        // Sinon je traite l'erreur

                       // location.reload();
                    }
                });
            });

    </script>



