<?php
add_action( 'woocommerce_after_shop_loop_item', 'strive_wookc_free_shipping_loop', 5 );
function strive_wookc_show_free_shipping_loop() {
   echo '<p class="shop-badge">Free Shipping</p>';
}