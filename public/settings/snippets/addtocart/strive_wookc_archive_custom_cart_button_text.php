<?php
	add_filter( 'woocommerce_product_add_to_cart_text', 'strive_wookc_archive_custom_cart_button_text' );
	function strive_wookc_archive_custom_cart_button_text() {
	global $product;       
	if ( has_term( 'category1', 'product_cat', $product->ID ) ) {           
	return 'Category 1 Add Cart';
	} else {
	return 'Category 2 Buy Now';
	}
	}
	add_filter( 'woocommerce_product_add_to_cart_text', 'strive_wookc_archive_custom_cart_button_text' );
  	function strive_wookc_archive_custom_cart_button_text() {
	global $product;
	 
	$terms = get_the_terms( $product->ID, 'product_cat' );
	 foreach ($terms as $term) {
	            $product_cat = $term->name;
	            break;
	}
	 
	switch($product_cat)
	{
	    case 'category1';
	        return 'Category 1 button text'; break;
	    case 'category2';
	        return 'Category 2 button text'; break;
	// case 'category3'; etc...
	// return 'Category 3 button text'; break;
	 
	    default;
	        return 'Default button text when no match found'; break;
	}
}