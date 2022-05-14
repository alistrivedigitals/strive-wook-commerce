<?php
	add_action( 'woocommerce_thankyou', 'strive_wookc_thankyou_upsell', 5 );
 	function strive_wookc_thankyou_upsell() {
   	echo '<h2>Customers also bought...</h2>';
   	echo do_shortcode( '[products limit="3" columns="3" orderby="popularity" on_sale="true"]' );
}