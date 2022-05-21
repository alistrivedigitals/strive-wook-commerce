<?php
	function strive_Wooks_show_sales_to_admin_325() {
	global $product, $post;
	if ( current_user_can( 'administrator' ) ) {
	echo '<div class="sales-admin"><b>SALES (admin-only):</b><ol>';
	$orders = get_posts( array('post_type'   => 'shop_order',
        'post_status' => 'wc-completed'
	) );
	foreach ($orders as $order) {
 	$order = new WC_Order( $order->ID );
 	$items = $order->get_items();
 	foreach( $items as $item ) {
  	$product_id = $item['product_id'];
  	if ( $post->ID == $product_id ) { echo '<li>' . $order->get_billing_first_name() . ' ' . $order->get_billing_last_name() . '</li>'; }   
 	}            
	} 
	echo '</ol></div>';
	}
	}
 	add_action( 'woocommerce_after_shop_loop_item', 'strive_Wooks_show_sales_to_admin_325', 10 );	
 	function strive_wooks_show_sales_to_admin() {
	global $product, $post;
	if ( current_user_can( 'administrator' ) ) {
	echo '<div class="sales-admin"><b>SALES (admin-only):</b><ol>';
	$orders = get_posts( array(
	        'post_type'   => 'shop_order',
	        'post_status' => 'wc-completed'
	) );
	foreach ($orders as $order) {
	 $order = new WC_Order($order->ID);
	 $items = $order->get_items();
	 foreach($items as $item) {
	  $product_id = $item['product_id'];
	  if ($post->ID == $product_id) { echo '<li>' . $order->billing_first_name . ' ' . $order->billing_last_name . '</li>'; }   
	  }            
	} 
	echo '</ol></div>';
	}
	}
	 
	add_action('woocommerce_after_shop_loop_item','bbloomer_show_sales_to_admin', 10);