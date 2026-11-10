<?php
/*
Plugin Name: Custom SMTP Config
Description: Force l'utilisation du SMTP pour l'envoi de mails.
*/

add_action( 'phpmailer_init', 'my_custom_smtp_config' );
function my_custom_smtp_config( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->Username   = SMTP_USER;
    $phpmailer->Password   = SMTP_PASS;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_NAME;
}
