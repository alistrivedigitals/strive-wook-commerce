<?php
	add_filter( 'woocommerce_checkout_redirect_empty_cart', '__return_false');
	add_filter( 'woocommerce_checkout_update_order_review_expired', '__return_false');