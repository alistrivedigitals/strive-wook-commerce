<?php
  $strive_wookc_looppages_options_keys = get_option( 'strive_wookc_looppages_options_keys');
	if (isset($strive_wookc_looppages_options_keys['strive_wookc_product_permalink_shop']) && $strive_wookc_looppages_options_keys['strive_wookc_product_permalink_shop'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_product_permalink_shop.php';	
	}

	if (isset($strive_wookc_looppages_options_keys['strive_wookc_remove_sorting_option_woocommerce_shop']) && $strive_wookc_looppages_options_keys['strive_wookc_remove_sorting_option_woocommerce_shop'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_remove_sorting_option_woocommerce_shop.php';	
	}


	if (isset($strive_wookc_looppages_options_keys['strive_wookc_show_product_dimensions_loop']) && $strive_wookc_looppages_options_keys['strive_wookc_show_product_dimensions_loop'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_show_product_dimensions_loop.php';	
	}

	if (isset($strive_wookc_looppages_options_keys['strive_wookc_show_stock_shop']) && $strive_wookc_looppages_options_keys['strive_wookc_show_stock_shop'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_show_stock_shop.php';	
	}

	if (isset($strive_wookc_looppages_options_keys['']) && $strive_wookc_looppages_options_keys[''] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/.php';	
	}

	if (isset($strive_wookc_looppages_options_keys['strive_wookc_rename_sale']) && $strive_wookc_looppages_options_keys['strive_wookc_rename_sale'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_rename_sale.php';	
	}

	if (isset($strive_wookc_looppages_options_keys['strive_wookc_remove_default_sorting_storefront']) && $strive_wookc_looppages_options_keys['strive_wookc_remove_default_sorting_storefront'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_remove_default_sorting_storefront.php';	
	}

