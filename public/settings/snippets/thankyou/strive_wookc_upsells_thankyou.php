<?php
	add_action( 'woocommerce_thankyou', 'strive_wookc_upsells_thankyou' );
 	function strive_wookc_upsells_thankyou() {
   	echo '<h2>Buy Some More?</h2>';
   	echo do_shortcode( '[[products ids="186177,186179,186181"]]' );
}