<?php
	function strive_wookc_hide_admin_bar_if( $show ) {
   	if ( /* CONDITION */ ) $show = false;
   	return $show;
	}
 	add_filter( 'show_admin_bar', 'strive_wookc_hide_admin_bar_if' );
 	function wc_disable_admin_bar( $show_admin_bar ) {
   	if ( apply_filters( 'woocommerce_disable_admin_bar', get_option( 'woocommerce_lock_down_admin', 'yes' ) === 'yes' 	) && ! ( current_user_can( 'edit_posts' ) || current_user_can( 'manage_woocommerce' ) ) ) {
  	    $show_admin_bar = false;
  	}
 	return $show_admin_bar;
	}
	add_filter( 'show_admin_bar', 'wc_disable_admin_bar', 10, 1 );
	function strive_wookc_hide_admin_bar_if_non_admin( $show ) {
	   if ( ! current_user_can( 'administrator' ) ) $show = false;
	   return $show;
	}
	 
	add_filter( 'show_admin_bar', 'strive_wookc_hide_admin_bar_if_non_admin', 20, 1 );