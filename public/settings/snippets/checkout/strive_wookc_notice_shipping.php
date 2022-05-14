<?php
	add_action( 'woocommerce_after_order_notes', 'strive_wookc_notice_shipping' );
 	function strive_wookc_notice_shipping() {
	echo '<p class="allow">Please allow 5-10 business days for delivery after order processing.</p>';
}