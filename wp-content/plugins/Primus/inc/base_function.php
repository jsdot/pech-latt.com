<?php








function traitement_formulaire_don_cagnotte() {
    if ( ! isset( $_POST['cagnote-don-envoi'] ) || ! isset( $_POST['cagnotte-verif'] ) )  {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['cagnotte-verif'], 'faire-don' ) ) {
        return;
    }

 var_dump($_POST);

    wp_die();
}
add_action( 'template_redirect', 'traitement_formulaire_don_cagnotte' );