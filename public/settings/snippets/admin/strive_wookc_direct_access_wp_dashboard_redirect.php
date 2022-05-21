<?php
	add_action( 'load-index.php', 'strive_wookc_direct_access_wp_dashboard_redirect' );
 	function strive_wookc_direct_access_wp_dashboard_redirect(){
	   wp_redirect( admin_url( 'edit.php?post_type=product' ) );
	}
	add_filter( 'login_redirect', 'strive_wookc_login_wp_dashboard_redirect', 9999, 3 );
	function strive_wookc_login_wp_dashboard_redirect( $redirect_to, $request, $user ){
    $redirect_to = admin_url( 'edit.php?post_type=product' );
    return $redirect_to;
}