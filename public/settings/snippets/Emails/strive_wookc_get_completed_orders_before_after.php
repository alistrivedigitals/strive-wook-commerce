<?php
	add_filter( 'cron_schedules', 'strive_wookc_check_every_3_hours' );
	function strive_wookc_check_every_3_hours( $schedules ) {
    $schedules['every_three_hours'] = array(
        'interval' => 10800,
        'display'  => __( 'Every 3 hours' ),
    );
    return $schedules;
}
 	add_action( 'wp', 'strive_wookc_custom_cron_job' );
	function strive_wookc_custom_cron_job() {
   	if ( ! wp_next_scheduled( 'strive_wookc_woocommerce_send_email_digest' ) ) {
      wp_schedule_event( time(), 'every_three_hours', 'strive_wookc_woocommerce_send_email_digest' );
   	}
	}
 	add_action( 'strive_wookc_woocommerce_send_email_digest', 'strive_wookc_generate_email_digest' );
 	function strive_wookc_generate_email_digest() {   
   	$range = 180; // 3 hours in minutes
   	$completed_orders = strive_wookc_get_completed_orders_before_after( strtotime( '-' . absint( $end ) . ' MINUTES', current_time( 'timestamp' ) ), current_time( 'timestamp' ) );
   	if ( $completed_orders ) {
      $email_subject = "Completed Orders Email Digest";
      $email_content = "Completed Order IDs: " . implode( "|", $completed_orders );
      wp_mail( 'your@email.com', $email_subject, $email_content );
   	}
	}
 	function strive_wookc_get_completed_orders_before_after( $date_one, $date_two ) {
   	global $wpdb;
   	$completed_orders = $wpdb->get_col(
      $wpdb->prepare(
         "SELECT posts.ID
         FROM {$wpdb->prefix}posts AS posts
         WHERE posts.post_type = 'shop_order'
         AND posts.post_status = 'wc-completed'
         AND posts.post_modified >= '%s'
         AND posts.post_modified <= '%s'",
         date( 'Y/m/d H:i:s', absint( $date_one ) ),
         date( 'Y/m/d H:i:s', absint( $date_two ) )
      )
   	);
   	return $completed_orders;
}