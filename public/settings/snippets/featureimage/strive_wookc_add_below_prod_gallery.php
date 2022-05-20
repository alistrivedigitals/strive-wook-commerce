<?php
	add_action( 'woocommerce_after_single_product_summary','strive_wookc_add_below_prod_gallery', 5 );
  	function strive_wookc_add_below_prod_gallery() {
   	echo '<div class="woocommerce-product-gallery" style="background: #fdfd5a; padding: 1em 2em">';
   	echo '<span>THIS IS A TEST. YOU CAN ADD TEXT, IMAGES AND ANY HTML</span>';
   	echo '</div>';
}