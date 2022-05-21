<?php
	add_action( 'admin_init', 'strive_wookc_hide_update_notifications_users' );
	fuction strive_wookc_hide_update_notifications_users() {
    global $menu, $submenu;
    $user = wp_get_current_user();
    $allowed = array( 'rodolfomelogli' );
    if ( $user && isset( $user->user_login ) && ! in_array( $user->user_login, $allowed ) ) {
        add_filter( 'pre_site_transient_update_core', 'bbloomer_disable_update_notifications' );
        add_filter( 'pre_site_transient_update_plugins', 'bbloomer_disable_update_notifications' ); 
        add_filter( 'pre_site_transient_update_themes', 'bbloomer_disable_update_notifications' );
       $menu[65][0] = 'Plugins up to date';   
        $submenu['index.php'][10][0] = 'Updates disabled';   
    	}
	}
 
	function bbloomer_disable_update_notifications() {
    global $wp_version;
    return (object) array( 'last_checked' => time(), 'version_checked' => $wp_version, );
}