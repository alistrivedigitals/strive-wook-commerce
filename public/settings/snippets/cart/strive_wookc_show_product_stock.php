 <?php  
      add_action( 'woocommerce_after_cart_item_name', 'strive_wookc_show_product_stock', 
      9999, 2 );
      function strive_wookc_show_product_stock( $cart_item, $cart_item_key ) {
      $product = $cart_item['data'];

      if ( $product->backorders_require_notification() && $product->is_on_backorder( $cart_item['quantity'] ) ) return;   
      echo wc_get_stock_html( $product );
}