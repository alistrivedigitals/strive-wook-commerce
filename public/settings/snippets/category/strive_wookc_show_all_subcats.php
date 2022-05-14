<?php
	add_action( 'woocommerce_after_shop_loop_item_title', 'strive_wookc_show_all_subcats', 2 );
 	function strive_wookc_show_all_subcats() {
   	global $product;
   	$cats = get_the_terms( $product->get_id(), 'product_cat' );
   	if ( empty( $cats ) ) return;
   	echo join( ', ', wp_list_pluck( $cats, 'name' ) );
	}
	add_action( 'woocommerce_after_shop_loop_item_title', 'strive_wookc_show_all_in_subcats', 2 );
 	function strive_wookc_show_all_in_subcats() {
   	global $product;
   	$cats = get_the_terms( $product->get_id(), 'product_cat' );
  	if ( empty( $cats ) ) return;
   	foreach ( $cats as $term ) {
    if ( $term->parent == 116 ) {
      echo $term->name;
      }
   }
}