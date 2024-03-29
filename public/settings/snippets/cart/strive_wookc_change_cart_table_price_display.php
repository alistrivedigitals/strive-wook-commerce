<?php
   add_filter( 'woocommerce_cart_item_price', 'strive_wookc_change_cart_table_on_price_display', 30, 3 );
   function strive_wookc_change_cart_table_on_price_display( $price, $values, $cart_item_key ) {
   $slashed_price = $values['data']->get_price_html();
   $is_on_sale = $values['data']->is_on_sale();
   if ( $is_on_sale ) {
      $price = $slashed_price;
   }
   return $price;
}