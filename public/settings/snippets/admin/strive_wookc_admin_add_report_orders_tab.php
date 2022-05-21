<?php
	add_filter( 'woocommerce_admin_reports', 'strive_wookc_admin_add_report_orders_tab' );
	function strive_wookc_admin_add_report_orders_tab( $reports ) { 
	$array = array(
    'sales_by_state' => array(
        'title' => 'Sales by state',
        'description' => '',
        'hide_title' => 1,
        'callback' => 'bbloomer_yearly_sales_by_state'
    )
	);
	$reports['orders']['reports'] = array_merge($reports['orders']['reports'],$array);
	return $reports; 
	}
	function bbloomer_yearly_sales_by_state() {
 	$year = 2017; // change this if needed
   	$total_ca = $total_wa = 0; // add states if needed
 	$args = [
        'post_type' => 'shop_order',
        'posts_per_page' => '-1',
      'year' => $year,
        'post_status' => ['wc-completed']
    ];
    $my_query = new WP_Query($args);
    $orders = $my_query->posts;
    foreach ($orders as $order => $value) {
   	$order_id = $value->ID;
   	$order = wc_get_order($order_id);
   	$order_data = $order->get_data();
   	if ( $order_data['billing']['country'] === 'US' ) {   
      if ( $order_data['billing']['state'] === 'CA' ) $total_ca += $order->get_total();
      if ( $order_data['billing']['state'] === 'WA' ) $total_wa += $order->get_total();
  	 }
    }
   	echo "<h3>Sales by State for Year " . $year . "</h3>";
   	echo "CA: " . wc_price($total_ca) . "</br>";
   	echo "WA: " . wc_price($total_wa) . "</br>";
 
}