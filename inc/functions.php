<?php 
/**
 * @since 1.0.0
 * Special offer functions
 * 
 */

if( ! function_exists( 'special_offer_data' ) ) {
    /**
     * @since 1.0.0
     * Special offer data
     * 
     */
    function special_offer_data() {
        
        $data = array(
            'special_offer_enable' => carbon_get_theme_option( 'special_offer_enable' ),
            'special_offer_label_sticky' => carbon_get_theme_option( 'special_offer_label_sticky' ),
            'special_offer_link' => carbon_get_theme_option( 'special_offer_link' ),
            'special_offer_hover_desc' => carbon_get_theme_option( 'special_offer_hover_desc' ),
        );

        if( is_page() ) {

            $override = carbon_get_the_post_meta( 'special_offer_override_global_options' );
            if( true == $override ) {

                $data = array(
                    'special_offer_enable' => carbon_get_the_post_meta( 'special_offer_enable' ),
                    'special_offer_label_sticky' => carbon_get_the_post_meta( 'special_offer_label_sticky' ),
                    'special_offer_link' => carbon_get_the_post_meta( 'special_offer_link' ),
                    'special_offer_hover_desc' => carbon_get_the_post_meta( 'special_offer_hover_desc' ),
                );
                
            }

        }

        return $data;
    }
}

if( ! function_exists( 'special_offer_html' ) ) {
    /**
     * @since 1.0.0
     * footer html template
     */
    function special_offer_html() {
        $special_offer_opts = special_offer_data();
        extract( $special_offer_opts );

        if( true != $special_offer_enable ) return;

        ?>
<div class="special-offer-container">
    <a href="javascipt:" class="__close" title="<?php echo esc_attr( 'close', 'so' ) ?>"></a>
    <a href="<?php echo esc_attr( $special_offer_link ) ?>" target="_blank" rel="nofollow">
        <div class="__icon">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path d="M484.662,34.972H164.308c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h320.355 c6.803,0,12.338,5.535,12.338,12.338v47.573H15V62.31c0-6.803,5.535-12.338,12.338-12.338h106.352c4.143,0,7.5-3.358,7.5-7.5 c0-4.142-3.357-7.5-7.5-7.5H27.338C12.264,34.972,0,47.236,0,62.31v398.15c0,9.135,7.432,16.567,16.567,16.567h159.789 c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-35.719V291.159l14.587-34.701c0.618-1.471,0.751-3.1,0.38-4.652 l-15.059-62.931c-0.808-3.375-3.824-5.754-7.294-5.754h-30.117c-3.47,0-6.486,2.38-7.294,5.754L80.78,251.805 c-0.371,1.552-0.238,3.181,0.38,4.652l14.473,34.429v171.14H16.567c-0.864,0-1.567-0.703-1.567-1.567V124.883h482v32.805 c0,4.142,3.357,7.5,7.5,7.5s7.5-3.358,7.5-7.5V62.31C512,47.236,499.736,34.972,484.662,34.972z M109.051,198.121h18.283 l13.11,54.789l-13.637,32.44c-0.741,1.163-1.171,2.544-1.171,4.025v172.652h-15.003V289.375c0.001-0.998-0.198-1.986-0.585-2.906 l-14.107-33.559L109.051,198.121z"/> </g> </g> <g> <g> <path d="M504.5,180.806c-4.143,0-7.5,3.358-7.5,7.5V460.46c0,0.864-0.703,1.567-1.567,1.567H358.97v-40.072 c38.54-17.727,63.167-55.924,63.167-98.687c0-19.034-4.996-37.764-14.447-54.168c-9.165-15.904-22.313-29.335-38.022-38.841 c-4.487-2.716-10.108-2.807-14.67-0.236c-4.603,2.595-7.351,7.301-7.351,12.589v58.617h-68.295v-58.617 c0-5.289-2.748-9.995-7.351-12.589c-4.561-2.57-10.182-2.48-14.67,0.236c-15.71,9.506-28.857,22.937-38.022,38.841 c-9.451,16.402-14.447,35.133-14.447,54.168c0,42.763,24.626,80.96,63.167,98.687v40.073h-61.052c-4.143,0-7.5,3.358-7.5,7.5 c0,4.142,3.357,7.5,7.5,7.5h288.457c9.136,0,16.567-7.432,16.567-16.567V188.306C512,184.164,508.643,180.806,504.5,180.806z M343.97,417.028v45h-22.971v-74.159c0-4.142-3.357-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v74.159h-22.972v-45 c0-3.055-1.851-5.804-4.682-6.951c-35.527-14.402-58.484-48.478-58.484-86.81c0-32.772,16.613-62.508,44.491-79.72v65.182 c0,4.142,3.357,7.5,7.5,7.5h83.295c4.143,0,7.5-3.358,7.5-7.5v-65.182c27.877,17.212,44.49,46.948,44.49,79.72 c0,38.332-22.956,72.408-58.484,86.81C345.822,411.224,343.97,413.973,343.97,417.028z"/> </g> </g> <g> <g> <path d="M341.693,73.812H74.159c-4.142,0-7.5,3.357-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h267.534c4.143,0,7.5-3.358,7.5-7.5 C349.193,77.17,345.836,73.812,341.693,73.812z"/> </g> </g> <g> <g> <path d="M377.964,71.775c-4.143,0-7.5,3.358-7.5,7.5v1.303c0,4.142,3.357,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5v-1.303 C385.465,75.133,382.107,71.775,377.964,71.775z"/> </g> </g> <g> <g> <path d="M407.902,71.775c-4.143,0-7.5,3.358-7.5,7.5v1.303c0,4.142,3.357,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5v-1.303 C415.402,75.133,412.045,71.775,407.902,71.775z"/> </g> </g> <g> <g> <path d="M437.841,71.775c-4.143,0-7.5,3.358-7.5,7.5v1.303c0,4.142,3.357,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5v-1.303 C445.341,75.133,441.984,71.775,437.841,71.775z"/> </g> </g> <g> <g> <path d="M206.729,204.489h-5.206v-5.206c0-4.142-3.357-7.5-7.5-7.5c-4.143,0-7.5,3.358-7.5,7.5v5.206h-5.206 c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5,7.5,7.5h5.206v5.206c0,4.142,3.357,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5v-5.206h5.206 c4.143,0,7.5-3.358,7.5-7.5S210.872,204.489,206.729,204.489z"/> </g> </g> <g> <g> <path d="M425.331,205.153h-5.205v-5.206c0-4.142-3.357-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v5.206h-5.206c-4.143,0-7.5,3.358-7.5,7.5 s3.357,7.5,7.5,7.5h5.206v5.206c0,4.142,3.357,7.5,7.5,7.5s7.5-3.358,7.5-7.5v-5.206h5.205c4.143,0,7.5-3.358,7.5-7.5 S429.474,205.153,425.331,205.153z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
        </div>
        <div class="__label">
            <?php echo $special_offer_label_sticky; ?>
        </div>
    </a>
    <div class="__desc">
        <?php echo $special_offer_hover_desc; ?>
    </div>
</div>
        <?php 

    }
}