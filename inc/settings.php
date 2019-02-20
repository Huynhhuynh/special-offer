<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * @since 1.0.0
 * Special Offer Settings
 * 
 */


if( ! function_exists( 'special_offer_crb_options' ) ) {
    /**
     * @since 1.0.0
     * Options
     * 
     */
    function special_offer_crb_options() {

        $special_offer_options = Container::make( 'theme_options', __( 'Special offer settings' ) )
            ->set_page_parent( 'options-general.php' )
            ->add_tab( __( 'General', 'so' ), array(
                Field::make( 'checkbox', 'special_offer_enable', __( 'Special Offer Enable', 'so' ) )
                    ->set_default_value( true ),
                Field::make( 'text', 'special_offer_label_sticky', __( 'Label Sticky', 'so' ) )
                    ->set_default_value( '<strong>Special Offer</strong> <br /> Free setup demo data' ),
                Field::make( 'text', 'special_offer_link', __( 'Direct Link', 'so' ) )
                    ->set_default_value( '#' ),
                Field::make( 'rich_text', 'special_offer_hover_desc', __( 'Description (on hover)', 'so' ) )
                    ->set_default_value( 'For each purchased, customer will get free demo installation worth $50 Just open a ticket support with your purchased code & provide us info your website. Our support team will help you setup WordPress website with our demo data quickly !' ),
            ) );
        
        do_action( 'special_offer_hook_options', $special_offer_options );
    }

    add_action( 'carbon_fields_register_fields', 'special_offer_crb_options' );
}