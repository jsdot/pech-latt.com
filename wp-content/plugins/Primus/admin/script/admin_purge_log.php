<?php


add_action( 'wp_ajax_primus_del_all_logs', 'primus_del_all_logs' );

function primus_del_all_logs()
{
    $logs = db_all_logs();

    foreach ($logs as $log){
        db_del_logs($log->id);
    }
    echo true;
}
