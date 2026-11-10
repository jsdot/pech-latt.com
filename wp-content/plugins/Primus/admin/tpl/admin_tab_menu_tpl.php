
<?php
$default_tab = null;
$tab = isset($_GET['section']) ? $_GET['section'] : $default_tab;

?>



<div class="row">
    <div class="col-12">
        <ul class="nav nav-pill" style="display: flex">
            <li class="nav-item">
                <a href="<?php echo site_url(); ?>/wp-admin/admin.php?page=wc-settings&amp;tab=primus"
                   class=""  >Paramétrage</a> |
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url(); ?>/wp-admin/admin.php?page=wc-settings&amp;tab=primus&amp;section=clients"
                    <?php if(!empty($_GET['section']) && $_GET['section'] == 'clients'):?> class="current" <?php endif;?>> Clients</a> |
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url(); ?>/wp-admin/admin.php?page=wc-settings&amp;tab=primus&amp;section=stock"
                    <?php if(! empty($_GET['section']) && $_GET['section'] == 'stock'):?> class="current" <?php endif;?>> Stock</a> |
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url(); ?>/wp-admin/admin.php?page=wc-settings&amp;tab=primus&amp;section=test-soap"
                    <?php if(! empty($_GET['section']) && $_GET['section'] == 'test-soap'):?> class="current" <?php endif;?>> test-soap</a>  |
            </li>

            <li class="nav-item">
                <a href="<?php echo site_url(); ?>/wp-admin/admin.php?page=wc-settings&amp;tab=primus&amp;section=invoices"
                    <?php if(! empty($_GET['section']) && $_GET['section'] == 'invoices'):?> class="current" <?php endif;?>> invoices</a> |
            </li>

            <li class="nav-item">
                <a href="<?php echo site_url(); ?>/wp-admin/admin.php?page=wc-settings&amp;tab=primus&amp;section=logs"
                    <?php if(!empty($_GET['section']) && $_GET['section'] == 'logs'):?> class="current" <?php endif;?>> Logs</a>
            </li>
        </ul>
    </div></div>


<hr>


<div class="container">
    <div class="row">
        <div class="col-md-12">




        </div>
    </div>
</div>
<?php


switch($tab) :
    case null:

            $set_invoices= get_option('primus_invoice_setting');
            $cron = get_option('primus_cron');
            $url = get_option('primus_url');
            $wsdl = get_option('primus_wsdl_setting');
            include_once DIR_PATH.'Primus/admin/tpl/admin_setting_tpl.php';

        break;
    case 'test-soap':

        include_once DIR_PATH.'Primus/admin/script/admin_test_soap.php';

        break;

    case 'clients':

        $clients = db_all_clients();
        include_once DIR_PATH.'Primus/admin/tpl/admin_clients_tpl.php';

    break;
    case 'stock':

        include_once DIR_PATH.'Primus/admin/tpl/admin_stock_tpl.php';
        break;

    case 'invoices':

        $invoices = db_all_invoices();
        include_once DIR_PATH.'Primus/admin/tpl/admin_invoices_tpl.php';

        break;

    case 'logs':

        $logs = db_all_logs();
        include_once DIR_PATH.'Primus/admin/tpl/admin_logs_tpl.php';

        break;

endswitch; ?>
