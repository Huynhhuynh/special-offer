<?php 
/*
 * Plugin Name: Special Offer
 * Plugin URI: http://bearsthemes/
 * Description: WordPress plugin 
 * Version: 1.0.0
 * Author: Bearsthemes
 * Author URI: http://bearsthemes.com/
 * Text Domain: so
 */

/**
 * Composer autoload
 */
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/static.php';

if(! function_exists('special_offer_plugin_crb_load')) {
    /**
     * @since 1.0.0
     *  
     */
    function special_offer_plugin_crb_load() {
        \Carbon_Fields\Carbon_Fields::boot();
    }
    
    add_action( 'after_setup_theme', 'special_offer_plugin_crb_load' );
}

if( ! function_exists('special_offer_plugin_links') ) {
    /**
     * Plugin page links
     * @since 1.0.0
     * 
     */
    function special_offer_plugin_links( $links ) {
  
        $plugin_links = array(
            '<a href="'. add_query_arg( array( 'page' => 'crb_carbon_fields_container_s3_media.php' ), admin_url( 'options-general.php' ) ) .'">' . __( 'Settings', 'so' ) . '</a>',
            '<a href="mailto:bearsthemes@gmail.com">' . __( 'Support', 'so' ) . '</a>',
        );
  
        return array_merge( $plugin_links, $links );
    }
  
    add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'special_offer_plugin_links' );
}

if( ! class_exists( 'Special_Offer_Main' ) ) {
    /**
     * @since 1.0.0
     * Special offer main class
     * 
     */
    class Special_Offer_Main {

        public function __construct() {

            $this->defined();
            $this->inc();

        }

        public function defined() {
            define( "SPECIAL_OFFER_DIR_URL"    , plugin_dir_url( __FILE__ ) );
            define( "SPECIAL_OFFER_DIR_PATH"   , plugin_dir_path( __FILE__ ) );
            define( "SPECIAL_OFFER_VERSION"    , '1.0.0' );
        }

        public function inc() {

            require( SPECIAL_OFFER_DIR_PATH . '/inc/settings.php' );
            require( SPECIAL_OFFER_DIR_PATH . '/inc/custom-metabox.php' );
            
            require( SPECIAL_OFFER_DIR_PATH . '/inc/functions.php' );
            require( SPECIAL_OFFER_DIR_PATH . '/inc/hooks.php' );

        }

    }

    $GLOBALS['Special_Offer_Main'] = new Special_Offer_Main();

}