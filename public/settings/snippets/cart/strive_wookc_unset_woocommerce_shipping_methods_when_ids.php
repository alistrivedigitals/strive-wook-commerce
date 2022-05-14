<?php
	add_filter( 'woocommerce_package_rates', 'strive_wookc_unset_woocommerce_shipping_methods_when_ids', 10 ,2 );
	 
	function strive_wookc_unset_woocommerce_shipping_methods_when_ids ( $rates, $package ) {
	   foreach ( WC()->cart->get_cart() as $cart_item_key => $values ) {
	   $_product = $values['data'];
	   if( $_product->variation_id == 3102 || $_product->variation_id == 3103 || $_product->variation_id == 3093 || $_product->variation_id == 3094 ) {
	      $local_pickup = $rates['local_pickup'];
	           $rates = array();
	           $rates['local_pickup'] = $local_pickup;
	      }
	 
	   }
 
    return $rates;
 
}