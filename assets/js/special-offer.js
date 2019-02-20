/**
 * @since 1.0.0
 * Special offer script
 * 
 */

!( function( w, $ ) {
    'use strict';

    var special_offer_show = function() {
        $( 'body' ).addClass( 'special-offer-is-active' )
    }

    /**
     * Dom ready
     */
    $( function( ) {
        
        $( 'body' ).on( 'click', '.special-offer-container .__close', function() {
            $( 'body' ).removeClass( 'special-offer-is-active' )
        } )

    } )

    /**
     * Site load complete
     */
    $( w ).load( function() {

        // $( 'body' ).addClass( 'special-offer-is-active' )
        setTimeout( special_offer_show, 2000 );

    } )

} )( window, jQuery )