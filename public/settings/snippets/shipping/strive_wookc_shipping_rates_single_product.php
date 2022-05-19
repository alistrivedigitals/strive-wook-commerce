<?php
	add_action( 'woocommerce_after_add_to_cart_form', 'strive_wookc_shipping_rates_single_product');
 	function strive_wookc_shipping_rates_single_product() {
   	$zones = WC_Shipping_Zones::get_zones();
   	echo '<div><i class="fas fa-truck"></i> ' . __( 'Shipping', 'woocommerce' );
   	echo '<table>';
   	foreach ( $zones as $zone_id => $zone ) {
      echo '<tr><td>';
      echo $zone['zone_name'] . '</td><td>';
      $zone_shipping_methods = $zone['shipping_methods'];
      foreach ( $zone_shipping_methods as $index => $method ) {
         $instance = $method->instance_settings;
         $cost = $instance['cost'] ? $instance['cost'] : $instance['min_amount'];
         echo $instance['title'] . ' ' . wc_price( $cost ) . '<br>';
      }
      echo '</td></tr>';
   	}
   	echo '</table></div>';
}