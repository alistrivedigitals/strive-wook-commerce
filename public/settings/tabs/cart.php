<?php

	$strive_wookc_main_options = get_option( 'strive_wookc_main_options' );
	 if (isset($strive_wookc_main_options['strive_wookc_custome_field_data_checkout_reload']) && $strive_wookc_main_options['strive_wookc_custome_field_data_checkout_reload'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_custome_field_data_checkout_reload.php';
	}
	
	if (isset($strive_wookc_main_options['strive_wookc_user_label_content_data']) && $strive_wookc_main_options['strive_wookc_user_label_content_data'] == "on"){
	include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_user_label_content_data.php';

	}

	if (isset($strive_wookc_main_options['strive_wookc_display_coupon_form_proceed_checkout']) && $strive_wookc_main_options['strive_wookc_display_coupon_form_proceed_checkout'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_display_coupon_form_proceed_checkout.php';

	}

	if (isset($strive_wookc_main_options['strive_wookc_product_from_promotions_frontend']) && $strive_wookc_main_options['strive_wookc_product_from_promotions_frontend'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_product_from_promotions_frontend.php';
		}

	if (isset($strive_wookc_main_options['strive_wookc_cartpage_empty']) && $strive_wookc_main_options['strive_wookc_cartpage_empty'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_cartpage_empty.php';
		
	}

	if (isset($strive_wookc_main_options['strive_wooks_remove_product_programmatically']) && $strive_wookc_main_options['strive_wooks_remove_product_programmatically'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wooks_remove_product_programmatically.php';


	}

	if (isset($strive_wookc_main_options['strive_wookc_trust_place_order']) && $strive_wookc_main_options['strive_wookc_trust_place_order'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_trust_place_order.php';
	}

	if (isset($strive_wookc_main_options['strive_wookc_edit_left_stock']) && $strive_wookc_main_options['strive_wookc_edit_left_stock'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_edit_left_stock.php';
		
	}	
	

	if (isset($strive_wookc_main_options['strive_wookc_exclude_hidden_minicart_counter']) && $strive_wookc_main_options['strive_wookc_exclude_hidden_minicart_counter'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_exclude_hidden_minicart_counter.php';
	}

	if (isset($strive_wookc_main_options['strive_wookc_mini_cart_dropdown']) && $strive_wookc_main_options['strive_wookc_mini_cart_dropdown'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_mini_cart_dropdown.php';
		
	}

	if (isset($strive_wookc_main_options['strive_wookc_add_product_to_cart_on_page_id_load']) && $strive_wookc_main_options['strive_wookc_add_product_to_cart_on_page_id_load'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_add_product_to_cart_on_page_id_load.php';
	}

	if (isset($strive_wookc_main_options['strive_wookc_shipping_calculator_field']) && $strive_wookc_main_options['strive_wookc_shipping_calculator_field'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_shipping_calculator_field.php';
	}
	if (isset($strive_wookc_main_options['strive_wookc_updated_message_label']) && $strive_wookc_main_options['strive_wookc_updated_message_label'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_updated_message_label.php';
	}

	if (isset($strive_wookc_main_options['strive_wookc_sort_cart_items_alphabetically']) && $strive_wookc_main_options['strive_wookc_sort_cart_items_alphabetically'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_sort_cart_items_alphabetically.php';
	}

	if (isset($strive_wookc_main_options['strive_wookc_check_category_in_cart']) && $strive_wookc_main_options['strive_wookc_check_category_in_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_check_category_in_cart.php';
	}

	if (isset($strive_wookc_main_options['strive_wookc_coupon_slash_item_subtotal']) && $strive_wookc_main_options['strive_wookc_coupon_slash_item_subtotal'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_coupon_slash_item_subtotal.php';
		
	}

	if (isset($strive_wookc_main_options['strive_wookc_slash_cart_subtotal_if_discount']) && $strive_wookc_main_options['strive_wookc_slash_cart_subtotal_if_discount'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_slash_cart_subtotal_if_discount.php';	
	}

	if (isset($strive_wookc_main_options['strive_wookc_cart_item_category']) && $strive_wookc_main_options['strive_wookc_cart_item_category'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_cart_item_category.php';
		
		}
	
	if (isset($strive_wookc_main_options['strive_wookc_select_dropdownlist']) && $strive_wookc_main_options['strive_wookc_select_dropdownlist'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_select_dropdownlist.php';
		
	}
	

	if (isset($strive_wookc_main_options['strive_wookc_find_product_in_cart']) && $strive_wookc_main_options['strive_wookc_find_product_in_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_find_product_in_cart.php';
		
	}
	

	if (isset($strive_wookc_main_options['strive_wookc_disable_shipping_local_pickup']) && $strive_wookc_main_options['strive_wookc_disable_shipping_local_pickup'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_disable_shipping_local_pickup.php';
		
	}
	

	if (isset($strive_wookc_main_options['strtive_wookc_force_cart_to']) && $strive_wookc_main_options['strtive_wookc_force_cart_to'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strtive_wookc_force_cart_to.php';
	}
	

	if (isset($strive_wookc_main_options['strive_wookc_split_product_individual_cart_items']) && $strive_wookc_main_options['strive_wookc_split_product_individual_cart_items'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_split_product_individual_cart_items.php';
	}
	

	if (isset($strive_wookc_main_options['strive_wookc_woocommerce_quantity_changes']) && $strive_wookc_main_options['strive_wookc_woocommerce_quantity_changes'] == "on"){		
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_woocommerce_quantity_changes.php';
	}
	

	if (isset($strive_wookc_main_options['strive_wookc_poa_and_enquiry_cf7_woocommerce']) && $strive_wookc_main_options['strive_wookc_poa_and_enquiry_cf7_woocommerce'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_poa_and_enquiry_cf7_woocommerce.php';
	}
	

	if (isset($strive_wookc_main_options['strive_wookc_print_cart_array']) && $strive_wookc_main_options['strive_wookc_print_cart_array'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_print_cart_array.php';
	}
	

	if (isset($strive_wookc_main_options['strive_wookc_print_cart_weight']) && $strive_wookc_main_options['strive_wookc_print_cart_weight'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_print_cart_weight.php';
	
	}
	
	if (isset($strive_wookc_main_options['strive_wookc_add_gift_if_id_in_cart']) && $strive_wookc_main_options['strive_wookc_add_gift_if_id_in_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_add_gift_if_id_in_cart.php';
	}
	

	if (isset($strive_wookc_main_options['strive_wookc_deny_checkout_if_weight']) && $strive_wookc_main_options['strive_wookc_deny_checkout_if_weight'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_deny_checkout_if_weight.php';
	}
	

	if (isset($strive_wookc_main_options['strive_wookc_add_content_empty_cart']) && $strive_wookc_main_options['strive_wookc_add_content_empty_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_add_content_empty_cart.php';
	}
	
	if (isset($strive_wookc_main_options['strive_wookc_have_coupon_message']) && $strive_wookc_main_options['strive_wookc_have_coupon_message'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_have_coupon_message.php';
	}

	
	if (isset($strive_wookc_main_options['strive_wookc_change_cart_table_price_display']) && $strive_wookc_main_options['strive_wookc_change_cart_table_price_display'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_change_cart_table_price_display.php';
		
	}
	
	if (isset($strive_wookc_main_options['strive_wookc_show_total_discount_cart_checkout']) && $strive_wookc_main_options['strive_wookc_show_total_discount_cart_checkout'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_show_total_discount_cart_checkout.php';
		
	}
	
	if (isset($strive_wookc_main_options['strive_wookc_wc_minimum_order_amount']) && $strive_wookc_main_options['strive_wookc_wc_minimum_order_amount'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_wc_minimum_order_amount.php';
		
	}
	
	if (isset($strive_wookc_main_options['strive_wookc_add_product_to_cart_automatically']) && $strive_wookc_main_options['strive_wookc_add_product_to_cart_automatically'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_add_product_to_cart_automatically.php';
		
	}
	
	if (isset($strive_wookc_main_options['strive_wookc_change_return_shop_url']) && $strive_wookc_main_options['strive_wookc_change_return_shop_url'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_change_return_shop_url.php';
		
	}
	
	if (isset($strive_wookc_main_options['strive_wookc_only_one_in_cart']) && $strive_wookc_main_options['strive_wookc_only_one_in_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_only_one_in_cart.php';
		
	}
	
	if (isset($strive_wookc_main_options['strive_wookc_apply_matched_coupons']) && $strive_wookc_main_options['strive_wookc_apply_matched_coupons'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/cart/strive_wookc_apply_matched_coupons.php';
	}

