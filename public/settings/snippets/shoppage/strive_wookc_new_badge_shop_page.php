<?php
	add_action( 'woocommerce_before_shop_loop_item_title', 'strive_wookc_new_badge_shop_page', 3 );
    function strive_wookc_new_badge_shop_page() {
   	global $product;
   	$newness_days = 30;
   	$created = strtotime( $product->get_date_created() );
   	if ( ( time() - ( 60 * 60 * 24 * $newness_days ) ) < $created ) {
      echo '<span class="itsnew onsale">' . esc_html__( 'New!', 'woocommerce' ) . '</span>';
   	}
}