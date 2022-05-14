<?php
	add_action( 'admin_notices', 'strive_wookc_products_no_weight_admin' );
 	function strive_wookc_products_no_weight_admin(){
    global $pagenow, $typenow;
    if ( 'edit.php' === $pagenow && 'product' === $typenow ) {
      echo '<div class="notice notice-warning is-dismissible"><h3>Products with no weight</h3><ul>';
      $args = array(
         'status' => 'publish',
         'visibility' => 'visible',
         'limit' => -1
      );
      $products = wc_get_products( $args );
      foreach ( $products as $product ) {
         if ( ! $product->get_weight() ) {
            echo '<li><a href="' . esc_url( get_edit_post_link( $product->get_id() ) ) . '">' . $product->get_name() . '</a></li>';
         }
      }
      echo '</ul></div>';
    }
}