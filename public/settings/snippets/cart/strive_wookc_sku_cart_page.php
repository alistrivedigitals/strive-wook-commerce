<?php
	
	function strive_wookc_return_sku( $product ) {
   	$sku = $product->get_sku();
   	if ( ! empty( $sku ) ) {
    return '<p>SKU: ' . $sku . '</p>';
   }
     else {
      return '';
    }
   }
   add_filter( 'woocommerce_cart_item_name', 'strive_wookc_sku_add_checkout_pages', 9999, 3 );
 
   function strive_wookc_sku_add_checkout_pages( $item_name, $cart_item, $cart_item_key  ) {
   $product = $cart_item['data'];
   $item_name .= strive_wookc_return_sku( $product );
   return $item_name;
}
 
   add_action( 'woocommerce_order_item_meta_start', 'strive_wookc_sku_thankyou_order_email_pages', 9999, 4 );
   function bblstrive_wookc_sku_thankyou_order_email_pages( $item_id, $item, $order, $plain_text ) {
   $product = $item->get_product();
   echo strive_wookc_return_sku( $product );
}