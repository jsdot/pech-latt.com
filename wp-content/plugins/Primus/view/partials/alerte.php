
<div class="notice notice-<?= $status; ?> is-dismissible">
    <p><?php _e( $message, 'sample-text-domain' ); ?></p>
</div>
        



<script>
    setTimeout(function() {
        jQuery('.notice').fadeOut('slow');}, 5000
     ); 
</script>