<?php
	add_action( 'woocommerce_single_product_summary', 'strive_wookc_add_free_sample_add_cart', 35 );
  	function strive_wookc_add_free_sample_add_cart() {
   	?>
      <form class="cart" method="post" enctype='multipart/form-data'>
      <button type="submit" name="add-to-cart" value="123" class="single_add_to_cart_button button alt">Order a Free Sample</button>
      <input type="hidden" name="free_sample" value="<?php the_ID(); ?>">
      </form>
   	<?php
	}
	add_filter( 'woocommerce_add_cart_item_data', 'strive_wookc_store_free_sample_id', 9999, 2 );
	  
	function strive_wookc_store_free_sample_id( $cart_item, $product_id ) {
	   if ( isset( $_POST['free_sample'] ) ) {
	         $cart_item['free_sample'] = $_POST['free_sample'];
	   }
	return $cart_item; 
	}
	add_filter( 'woocommerce_cart_item_name', 'strive_wookc_alter_cart_item_name', 9999, 3 );
	  
	function strive_wookc_alter_cart_item_name( $product_name, $cart_item, $cart_item_key ) {
	   if ( 123 === $cart_item['product_id'] ) {
	      $product = wc_get_product( $cart_item["free_sample"] );
	      $product_name .=  " (" . $product->get_name() . ")";
	   }
	   return $product_name;
	}
	add_action( 'woocommerce_add_order_item_meta', 'strive_wookc_save_posted_field_into_order', 9999, 2 );
	  
	function strive_wookc_save_posted_field_into_order( $itemID, $values ) {
	    if ( ! empty( $values['free_sample'] ) ) {
	      $product = wc_get_product( $values['free_sample'] );
	      $product_name = $product->get_name();
	      wc_add_order_item_meta( $itemID, 'Free sample for', $product_name );
    }
}