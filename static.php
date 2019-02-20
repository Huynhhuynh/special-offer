<?php 
/**
 * @since 1.0.0
 * Static
 * 
 */

if( ! function_exists( 'special_offer_enqueue_scripts' ) ) {
    /**
     * @since 1.0.0
     * Special offer enqueue scripts
     * 
     */
    function special_offer_enqueue_scripts() {

        $special_offer_enable = carbon_get_theme_option( 'special_offer_enable' );
        if( true != $special_offer_enable ) return;

        wp_enqueue_style( 'special-offer-css', SPECIAL_OFFER_DIR_URL . '/assets/css/special-offer.css', false, SPECIAL_OFFER_VERSION );
        wp_enqueue_script( 'special-offer-js', SPECIAL_OFFER_DIR_URL . '/assets/js/special-offer.bundle.js', array( 'jquery' ), SPECIAL_OFFER_VERSION, true );

    }

    add_action( 'wp_enqueue_scripts', 'special_offer_enqueue_scripts' );

}
