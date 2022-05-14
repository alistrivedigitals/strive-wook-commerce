<?php

	add_action( 'woocommerce_review_order_after_submit', 'strive_wookc_trust_place_order' );
 	function strive_wookc_trust_place_order() {
   	echo '<img src="https://www.paypalobjects.com/digitalassets/c/website/marketing/na/us/logo-center/9_bdg_secured_by_pp_2line.png" style="margin: 1em auto">';
}