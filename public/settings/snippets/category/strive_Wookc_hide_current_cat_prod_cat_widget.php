<?php
	add_filter( 'woocommerce_product_categories_widget_args', 'strive_Wookc_hide_current_cat_prod_cat_widget' );
 	function strive_Wookc_hide_current_cat_prod_cat_widget( $args ) {
   	if ( is_product_category() ) {
    $current_cat_id = get_queried_object_id();
    $args['exclude'] = $current_cat_id;
   	}
   	return $args;
}