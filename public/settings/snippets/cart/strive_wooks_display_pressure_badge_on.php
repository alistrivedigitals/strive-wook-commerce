<?php
	add_action( 'woocommerce_single_product_summary', 'strive_wooks_display_pressure_badge', 6 );
 	function strive_wooks_display_pressure_badge() {
   	echo '<div class="woocommerce-message">Order by 6pm and get it delivered tomorrow!</div>';
}

