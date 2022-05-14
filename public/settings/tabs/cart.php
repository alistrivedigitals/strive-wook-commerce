<?php
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if($strive_wookc_main_options['strive_wookc_custome_field_data_checkout_reload'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_custome_field_data_checkout_reload.php';
}
	
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_user_label_content_data'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_user_label_content_data.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_display_coupon_form_proceed_checkout'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_display_coupon_form_proceed_checkout.php';
		
		}
	}



	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_cartpage_empty'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_cartpage_empty.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wooks_remove_product_programmatically'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wooks_remove_product_programmatically.php';
		
		}
	}

	// $strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	// 	if($strive_wookc_main_options['strive_wookc_quantity_min'] == "on"){	
	// 	include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_quantity_min.php';
		
	// 	}


	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_trust_place_order'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_trust_place_order.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_edit_left_stock'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_edit_left_stock.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_display_coupon_form_proceed_checkout'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_display_coupon_form_proceed_checkout.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_exclude_hidden_minicart_counter'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_exclude_hidden_minicart_counter.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_mini_cart_dropdown'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_mini_cart_dropdown.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_add_product_to_cart_on_page_id_load'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_add_product_to_cart_on_page_id_load.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_shipping_calculator_field'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_shipping_calculator_field.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_updated_message_label'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_updated_message_label.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_sort_cart_items_alphabetically'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_sort_cart_items_alphabetically.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_check_category_in_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_check_category_in_cart.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_coupon_slash_item_subtotal'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_coupon_slash_item_subtotal.php';
		
		}
	}

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_slash_cart_subtotal_if_discount'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_slash_cart_subtotal_if_discount.php';
		
		}
	}
	

	// $strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	// if (isset($strive_wookc_main_options)) {
	// 	if($strive_wookc_main_options['strive_wookc_add_to_shipping_label'] == "on"){	
	// 	include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_add_to_shipping_label.php';
		
	// 	}
	// }
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_cart_item_category'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_cart_item_category.php';
		
		}
	}
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_select_dropdownlist'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_select_dropdownlist.php';
		
		}
	}
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_find_product_in_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_find_product_in_cart.php';
		
		}
	}
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_disable_shipping_local_pickup'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_disable_shipping_local_pickup.php';
		
		}
	}
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strtive_wookc_force_cart_to'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strtive_wookc_force_cart_to.php';
		
		}
	}
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_split_product_individual_cart_items'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_split_product_individual_cart_items.php';
		
		}
	}
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_woocommerce_quantity_changes'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_woocommerce_quantity_changes.php';
		
		}
	}
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_poa_and_enquiry_cf7_woocommerce'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_poa_and_enquiry_cf7_woocommerce.php';
		
		}
	}
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_print_cart_array'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_print_cart_array.php';
		
		}
	}
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_print_cart_weight'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_print_cart_weight.php';
		
		}
	}
	
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_add_gift_if_id_in_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_add_gift_if_id_in_cart.php';
		
		}
	}
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_deny_checkout_if_weight'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_deny_checkout_if_weight.php';
		
		}
	}
	

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_add_content_empty_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_add_content_empty_cart.php';
		
		}
	}
	
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_have_coupon_message'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_have_coupon_message.php';
		
		}
	}
	
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_add_content_empty_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_add_content_empty_cart.php';
		
		}
	}
	
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_change_cart_table_price_display'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_change_cart_table_price_display.php';
		
		}
	}
	
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_show_total_discount_cart_checkout'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_show_total_discount_cart_checkout.php';
		
		}
	}
	
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_wc_minimum_order_amount'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_wc_minimum_order_amount.php';
		
		}
	}
	
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_add_product_to_cart_automatically'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_add_product_to_cart_automatically.php';
		
		}
	}
	
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_change_return_shop_url'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_change_return_shop_url.php';
		
		}
	}
	
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_only_one_in_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_only_one_in_cart.php';
		
		}
	}
	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	if (isset($strive_wookc_main_options)) {
		if($strive_wookc_main_options['strive_wookc_apply_matched_coupons'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_apply_matched_coupons.php';
		
		}
	}

