 <?php
 $strive_wookc_shoppage_options_keys = get_option('strive_wookc_shoppage_options_keys');
if (isset($strive_wookc_shoppage_options_keys['strive_wookc_add_price_suffix_price_inc_tax']) && $strive_wookc_shoppage_options_keys['strive_wookc_add_price_suffix_price_inc_tax'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_add_price_suffix_price_inc_tax.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_archive_custom_cart_button_text']) && $strive_wookc_shoppage_options_keys['strive_wookc_archive_custom_cart_button_text'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_archive_custom_cart_button_text.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_hide_add_cart_if_already_purchased']) && $strive_wookc_shoppage_options_keys['strive_wookc_hide_add_cart_if_already_purchased'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_hide_add_cart_if_already_purchased.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_change_select_options_button_text']) && $strive_wookc_shoppage_options_keys['strive_wookc_change_select_options_button_text'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_change_select_options_button_text.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_remove_category_page']) && $strive_wookc_shoppage_options_keys['strive_wookc_remove_category_page'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_remove_category_page.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_hide_shop_page_title']) && $strive_wookc_shoppage_options_keys['strive_wookc_hide_shop_page_title'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_hide_shop_page_title.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_new_badge_shop_page']) && $strive_wookc_shoppage_options_keys['strive_wookc_new_badge_shop_page'] == "on"){		
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_new_badge_shop_page.php';	
	}
	
	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_storefront_homepage_show_empty_cats']) && $strive_wookc_shoppage_options_keys['strive_wookc_storefront_homepage_show_empty_cats'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_storefront_homepage_show_empty_cats.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_change_product_permalink_shop']) && $strive_wookc_shoppage_options_keys['strive_wookc_change_product_permalink_shop'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_change_product_permalink_shop.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_first_sort_by_stock_amount']) && $strive_wookc_shoppage_options_keys['strive_wookc_first_sort_by_stock_amount'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_first_sort_by_stock_amount.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_custom_add_cart_button_single_product']) && $strive_wookc_shoppage_options_keys['strive_wookc_custom_add_cart_button_single_product'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_custom_add_cart_button_single_product.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_echo_stock_variations_loop']) && $strive_wookc_shoppage_options_keys['strive_wookc_echo_stock_variations_loop'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_echo_stock_variations_loop.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_show_product_dimensions_loop']) && $strive_wookc_shoppage_options_keys['strive_wookc_show_product_dimensions_loop'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_show_product_dimensions_loop.php';	
	}
	
	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_user_logged_in_product_already_bought']) && $strive_wookc_shoppage_options_keys['strive_wookc_user_logged_in_product_already_bought'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_user_logged_in_product_already_bought.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_show_stock_shop']) && $strive_wookc_shoppage_options_keys['strive_wookc_show_stock_shop'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_show_stock_shop.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_rename_sale_badge']) && $strive_wookc_shoppage_options_keys['strive_wookc_rename_sale_badge'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_rename_sale_badge.php';	
	}
	
	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_loop_add_cart_open_new_tab']) && $strive_wookc_shoppage_options_keys['strive_wookc_loop_add_cart_open_new_tab'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_loop_add_cart_open_new_tab.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_remove_default_sorting_storefront']) && $strive_wookc_shoppage_options_keys['strive_wookc_remove_default_sorting_storefront'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_remove_default_sorting_storefront.php';	
	}
	
	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_remove_category_counter']) && $strive_wookc_shoppage_options_keys['strive_wookc_remove_category_counter'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_remove_category_counter.php';	
	}
	
	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_show_free_shipping_loop']) && $strive_wookc_shoppage_options_keys['strive_wookc_show_free_shipping_loop'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_show_free_shipping_loop.php';	
	}

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_hide_price_addcart_not_logged_in']) && $strive_wookc_shoppage_options_keys['strive_wookc_hide_price_addcart_not_logged_in'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_hide_price_addcart_not_logged_in.php';	
	} 

	if (isset($strive_wookc_shoppage_options_keys['strive_wookc_redefine_products_per_page']) && $strive_wookc_shoppage_options_keys['strive_wookc_redefine_products_per_page'] == "on"){		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/shoppage/strive_wookc_redefine_products_per_page.php';	
	} 
