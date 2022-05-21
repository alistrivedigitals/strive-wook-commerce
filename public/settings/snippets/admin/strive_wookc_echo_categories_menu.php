<?php
	add_action( 'woocommerce_before_main_content', 'strive_wookc_echo_categories_menu' );
 	function strive_wookc_echo_categories_menu() {
	wp_nav_menu( array( 'menu' => 'categories', 'container_id' => 'nav_menu-2' ) );
}