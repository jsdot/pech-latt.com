<?php

/**
 * Plugin Name: URL Coupon
 * Description: Applique un code promo WooCommerce via ?coupon=CODE. Si le panier est vide, le code est gardé en session et appliqué au premier ajout au panier.
 * Version: 1.0.0
 */

defined('ABSPATH') || exit;

final class Mu_Url_Coupon
{

    const PARAM       = 'coupon';
    const SESSION_KEY = 'mu_url_coupon';

    public static function init(): void
    {
        // Priorité 30 : après le traitement de ?add-to-cart (priorité 20).
        add_action('wp_loaded', [__CLASS__, 'capture'], 30);

        // Appliquer le coupon en attente dès que le panier n'est plus vide.
        add_action('woocommerce_add_to_cart', [__CLASS__, 'apply_pending']);
        add_action('woocommerce_before_cart', [__CLASS__, 'apply_pending']);
        add_action('woocommerce_before_checkout_form', [__CLASS__, 'apply_pending']);
    }

    /**
     * Lit ?coupon=CODE et le stocke en session.
     */
    public static function capture(): void
    {
        if (empty($_GET[self::PARAM]) || is_admin() || ! function_exists('WC')) {
            return;
        }

        if (! self::boot_wc()) {
            return;
        }

        $code = wc_format_coupon_code(
            sanitize_text_field(wp_unslash($_GET[self::PARAM]))
        );

        if ('' === $code || strlen($code) > 50) {
            return;
        }

        // Garantit un cookie de session pour un visiteur anonyme.
        if (! WC()->session->has_session()) {
            WC()->session->set_customer_session_cookie(true);
        }

        WC()->session->set(self::SESSION_KEY, $code);

        self::apply_pending();
    }

    /**
     * Applique le coupon en session si le panier contient au moins un produit.
     */
    public static function apply_pending(): void
    {
        if (! function_exists('WC') || ! self::boot_wc()) {
            return;
        }

        $code = WC()->session->get(self::SESSION_KEY);
        if (empty($code)) {
            return;
        }

        if (WC()->cart->has_discount($code)) {
            WC()->session->set(self::SESSION_KEY, null);
            return;
        }

        // Panier vide : on garde le code et on retentera plus tard.
        if (WC()->cart->is_empty()) {
            return;
        }

        // add_discount() valide le coupon et affiche lui-même la notice succès/erreur.
        WC()->cart->add_discount($code);

        // Un seul essai, pour éviter de réafficher une erreur à chaque page.
        WC()->session->set(self::SESSION_KEY, null);
    }

    /**
     * S'assure que session et panier sont initialisés.
     */
    private static function boot_wc(): bool
    {
        if (null === WC()->session) {
            return false;
        }
        if (null === WC()->cart && function_exists('wc_load_cart')) {
            wc_load_cart();
        }
        return null !== WC()->cart;
    }
}

Mu_Url_Coupon::init();
