<?php
	$strive_wookc_price_options_keys = get_option('strive_wookc_price_options_keys');
	
	if (isset($strive_wookc_price_options_keys['strive_wookc_update_price_with_variation_price']) && $strive_wookc_price_options_keys['strive_wookc_update_price_with_variation_price'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_update_price_with_variation_price.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_hide_price_if_out_stock_frontend']) && $strive_wookc_price_options_keys['strive_wookc_hide_price_if_out_stock_frontend'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_hide_price_if_out_stock_frontend.php';	
	}

	
	if (isset($strive_wookc_price_options_keys['strive_wookc_hide_price_in_google']) && $strive_wookc_price_options_keys['strive_wookc_hide_price_in_google'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_hide_price_in_google.php';	
	}

	
	if (isset($strive_wookc_price_options_keys['strive_wookc_product_price_recalculate']) && $strive_wookc_price_options_keys['strive_wookc_product_price_recalculate'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_product_price_recalculate.php';	
	}

	
	if (isset($strive_wookc_price_options_keys['strive_wookc_quantity_based_pricing']) && $strive_wookc_price_options_keys['strive_wookc_quantity_based_pricing'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_quantity_based_pricing.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_price_free_zero']) && $strive_wookc_price_options_keys['strive_wookc_price_free_zero'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_price_free_zero.php';	
		
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_single_varible_price']) && $strive_wookc_price_options_keys  ['strive_wookc_single_varible_price'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_single_varible_price.php';	
		
	}

	
	if (isset($strive_wookc_price_options_keys['single_wookc_simple_product_price_format']) && $strive_wookc_price_options_keys['single_wookc_simple_product_price_format'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/single_wookc_simple_product_price_format.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_if_coupon_slash_item_subtotal']) && $strive_wookc_price_options_keys['strive_wookc_if_coupon_slash_item_subtotal'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_if_coupon_slash_item_subtotal.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_cart_subtotal_discount']) && $strive_wookc_price_options_keys['strive_wookc_cart_subtotal_discount'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_cart_subtotal_discount.php';	
	}


	if (isset($strive_wookc_price_options_keys['strive_wookc_force_cart_for_to']) && $strive_wookc_price_options_keys['strive_wookc_force_cart_for_to'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_force_cart_for_to.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_show_sale_percentage_loop']) && $strive_wookc_price_options_keys['strive_wookc_show_sale_percentage_loop'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_show_sale_percentage_loop.php';	
	}


	if (isset($strive_wookc_price_options_keys['strive_wookc_add_RRP_to_products']) && $strive_wookc_price_options_keys['strive_wookc_add_RRP_to_products'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_add_RRP_to_products.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_change_cart_table_price_display']) && $strive_wookc_price_options_keys['strive_wookc_change_cart_table_price_display'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_change_cart_table_price_display.php';	
	}
	
	if (isset($strive_wookc_price_options_keys['strive_wookc_add_price_suffix']) && $strive_wookc_price_options_keys['strive_wookc_add_price_suffix'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_add_price_suffix.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_hide_price_addcart_not_logged_in']) && $strive_wookc_price_options_keys['strive_wookc_hide_price_addcart_not_logged_in'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_hide_price_addcart_not_logged_in.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_variation_price_format_min']) && $strive_wookc_price_options_keys['strive_wookc_variation_price_format_min'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/price/strive_wookc_variation_price_format_min.php';	
	}

	