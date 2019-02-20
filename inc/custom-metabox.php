<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * @since 1.0.0
 * Special Offer Custom Metabox
 * 
 */

if( ! function_exists( 'special_offer_custom_metabox_page' ) ) {
    /**
     * @since 1.0.0
     * Custom metabox
     */
    function special_offer_custom_metabox_page() {

        Container::make( 'post_meta', __( 'Special Offer Settings', 'so' ) )
            ->where( 'post_type', '=', 'page' )
            ->set_context( 'side' )
            ->add_fields( array(
                Field::make( 'checkbox', 'special_offer_override_global_options', __( 'Override Global Options', 'so' ) )
                    ->set_default_value( false ),
                Field::make( 'checkbox', 'special_offer_enable', __( 'Special Offer Enable', 'so' ) )
                    ->set_default_value( true )
                    ->set_conditional_logic( array(
                        array(
                            'field' => 'special_offer_override_global_options',
                            'value' => true
                        )
                    ) ),
                Field::make( 'text', 'special_offer_label_sticky', __( 'Label Sticky', 'so' ) )
                    ->set_default_value( 'Special offer - Free setup demo data' )
                    ->set_conditional_logic( array(
                        array(
                            'field' => 'special_offer_override_global_options',
                            'value' => true
                        )
                    ) ),
                Field::make( 'text', 'special_offer_link', __( 'Direct Link', 'so' ) )
                    ->set_default_value( '#' )
                    ->set_conditional_logic( array(
                        array(
                            'field' => 'special_offer_override_global_options',
                            'value' => true
                        )
                    ) ),
                Field::make( 'rich_text', 'special_offer_hover_desc', __( 'Description (on hover)', 'so' ) )
                    ->set_default_value( 'For each purchased, customer will get free demo installation worth $50 Just open a ticket support with your purchased code & provide us info your website. Our support team will help you setup WordPress website with our demo data quickly !' )
                    ->set_conditional_logic( array(
                        array(
                            'field' => 'special_offer_override_global_options',
                            'value' => true
                        )
                    ) ),
            ));

    }

    add_action( 'carbon_fields_register_fields', 'special_offer_custom_metabox_page' );
}
