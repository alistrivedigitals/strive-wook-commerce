<?php
	add_action( 'woocommerce_cart_totals_after_order_total', 'strive_wookc_show_total_discount_cart_checkout', 9999 );
	add_action( 'woocommerce_review_order_after_order_total', 'strive_wookc_show_total_discount_cart_checkout', 9999 );
	 
	function strive_wookc_show_total_discount_cart_checkout() {
	    
	   $discount_total = 0;
	    
  	 foreach ( WC()->cart->get_cart() as $cart_item_key => $values ) {         
      $product = $values['data'];
      if ( $product->is_on_sale() ) {
         $regular_price = $product->get_regular_price();
         $sale_price = $product->get_sale_price();
         $discount = ( $regular_price - $sale_price ) * $values['quantity'];
         $discount_total += $discount;
      }
   	}         
    if ( $discount_total > 0 ) {
      echo '<tr><th>You Saved</th><td data-title="You Saved">' . wc_price( $discount_total + WC()->cart->get_discount_total() ) .'</td></tr>';
    }
  
}