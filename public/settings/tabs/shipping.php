<?php
	$strive_wookc_shipping_options_keys = get_option('strive_wookc_shipping_options_keys');
	
	if (isset($strive_wookc_shipping_options_keys['']) && $strive_wookc_shipping_options_keys['strive_wookc_shipping_rates_single_product'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shipping/strive_wookc_shipping_rates_single_product.php';	
	}

	if (isset($strive_wookc_shipping_options_keys['strive_wookc_dispatch_info_single_product']) && $strive_wookc_shipping_options_keys['strive_wookc_dispatch_info_single_product'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shipping/strive_wookc_dispatch_info_single_product.php';	
	}

	if (isset($strive_wookc_shipping_options_keys['strive_wookc_shipping_phone_checkout']) && $strive_wookc_shipping_options_keys['strive_wookc_shipping_phone_checkout'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shipping/strive_wookc_shipping_phone_checkout.php';	
	}

	if (isset($strive_wookc_shipping_options_keys['strive_wookc_shipping_rates_single_product']) && $strive_wookc_shipping_options_keys['strive_wookc_shipping_rates_single_product'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shipping/strive_wookc_shipping_rates_single_product.php';	
	}

	if (isset($strive_wookc_shipping_options_keys['strive_wookc_display_pickup_locations']) && $strive_wookc_shipping_options_keys['strive_wookc_display_pickup_locations'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shipping/strive_wookc_display_pickup_locations.php';	
	}

	if (isset($strive_wookc_shipping_options_keys['strive_wookc_woocommerce_tiered_shipping']) && $strive_wookc_shipping_options_keys['strive_wookc_woocommerce_tiered_shipping'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shipping/strive_wookc_woocommerce_tiered_shipping.php';	
	}

	if (isset($strive_wookc_shipping_options_keys['strive_wookc_rename_address_placeholders_checkout']) && $strive_wookc_shipping_options_keys['strive_wookc_rename_address_placeholders_checkout'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shipping/strive_wookc_rename_address_placeholders_checkout.php';	
	}

	if (isset($strive_wookc_shipping_options_keys['strive_wookc_cart_filter_us_states']) && $strive_wookc_shipping_options_keys['strive_wookc_cart_filter_us_states'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shipping/strive_wookc_cart_filter_us_states.php';	
	}

	if (isset($strive_wookc_shipping_options_keys['strive_wookc_add_cart_fee']) && $strive_wookc_shipping_options_keys['strive_wookc_add_cart_fee'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shipping/strive_wookc_add_cart_fee.php';	
	}

	if (isset($strive_wookc_shipping_options_keys['strive_wookc_disallow_pobox_shipping']) && $strive_wookc_shipping_options_keys['strive_wookc_disallow_pobox_shipping'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shipping/strive_wookc_disallow_pobox_shipping.php';	
	}

	if (isset($strive_wookc_shipping_options_keys['strive_wookc_free_shipping_loop']) && $strive_wookc_shipping_options_keys['strive_wookc_free_shipping_loop'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shipping/strive_wookc_free_shipping_loop.php';	
	}

	