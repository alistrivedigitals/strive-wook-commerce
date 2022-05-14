<?php
	add_action( 'woocommerce_cart_is_empty', 'strive_wookc_add_content_empty_cart' );
  
	function strive_wookc_add_content_empty_cart() {
   	echo 'This will show on the empty cart page';
 	echo '<h1>THIS IS A TEST..';
   	  	
}