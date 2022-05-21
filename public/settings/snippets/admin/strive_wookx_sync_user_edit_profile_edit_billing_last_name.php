<?php
	
	add_filter( 'pre_user_first_name', 'strive_wookc_sync_user_edit_profile_edit_billing_first_name' );
 	function strive_wookc_sync_user_edit_profile_edit_billing_first_name( $first_name ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        $first_name = $_POST['billing_first_name'];
    }
    return $first_name;
	}
 	add_filter( 'pre_user_last_name', 'strive_wookx_sync_user_edit_profile_edit_billing_last_name' );
	function strive_wookx_sync_user_edit_profile_edit_billing_last_name( $last_name ) {
    if ( isset( $_POST['billing_last_name'] ) ) {
        $last_name = $_POST['billing_last_name'];
    }
    return $last_name;
}
