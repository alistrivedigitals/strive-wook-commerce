<?php
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	add_action( 'woocommerce_after_shop_loop_item', 'strive_wookc_view_product_button', 10 );
	function strive_wookc_view_product_button() {
   	global $product;
   	$link = $product->get_permalink();
   echo '<a href="' . $link . '" class="button addtocartbutton">View Product</a>';
}