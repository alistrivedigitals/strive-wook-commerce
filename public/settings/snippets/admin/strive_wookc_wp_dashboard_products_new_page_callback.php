<?php
	add_action( 'admin_menu', 'strive_wookc_wp_dashboard_products_new_page', 9999 );
 	function strive_wookc_wp_dashboard_products_new_page() {
   	add_submenu_page( 'edit.php?post_type=product', 'New Page Title', 'New Page Menu Title', 'edit_products', 'new_page_slug', 'strive_wookc_wp_dashboard_products_new_page_callback', 9999 );
	}
 	function strive_wookc_wp_dashboard_products_new_page_callback() {
   	echo '<div class="wrap"><h1 class="">New Page Title</h1>';
   	// add your your HTML, PHP, CSS, jQUERY here
   	echo '</div>';
}