<?php
	add_filter( 'product_type_selector', 'strive_wookc_add_custom_product_type' );
 	function strive_wookc_add_custom_product_type( $types ){
	    $types[ 'custom' ] = 'Custom product';
	    return $types;
	}
	add_action( 'init', 'strive_wookc_create_custom_product_type' );
	function strive_wookc_create_custom_product_type(){
	    class WC_Product_Custom extends WC_Product {
	      public function get_type() {
	         return 'custom';
	      }
	    }
	}
	add_filter( 'woocommerce_product_class', 'strive_wookc_woocommerce_product_class', 10, 2 );
	 
	function strive_wookc_woocommerce_product_class( $classname, $product_type ) {
	    if ( $product_type == 'custom' ) {
        $classname = 'WC_Product_Custom';
    }
    return $classname;
}