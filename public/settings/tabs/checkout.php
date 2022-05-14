<?php

  	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_register_guests'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_register_guests.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_order_pay_billing_address'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_order_pay_billing_address.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_product_image_review_order_checkout'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_product_image_review_order_checkout.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_labels_inside_checkout_fields'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_labels_inside_checkout_fields.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_alter_checkout_fields_after_order'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_alter_checkout_fields_after_order.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_conditionally_hide_show_checkout_field'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_conditionally_hide_show_checkout_field.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_checkout_fields_custom_attributes'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_checkout_fields_custom_attributes.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
		if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_custom_order_notes'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_custom_order_notes.php';	
		}
	} 
	//id iser $xyz ['abc']  
	//{ uisser and not empty
	//if (isset ($strive_wookc_checkout_page_options['strive_wookc_custom_order_notes']);

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_checkout_page_empty'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_checkout_page_empty.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_rename_state_province'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_rename_state_province.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_checkout_add_on'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_checkout_add_on.php';	
		}
	}
	//
	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_checkout_fields_in_label_error'] == "on"){	include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_checkout_fields_in_label_error.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['srive_wookc_checkout_radio_choice'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/srive_wookc_checkout_radio_choice.php';	
		}
	}
//1
	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_rename_place_order_button_alt'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_rename_place_order_button_alt.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_display_terms_conditions_acceptance'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_display_terms_conditions_acceptance.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_privacy_message_below_checkout_button'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_privacy_message_below_checkout_button.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_email_with_twitter_username'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_email_with_twitter_username.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_remove_what_is_paypal'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_remove_what_is_paypal.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_add_checkout_privacy_policy'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_add_checkout_privacy_policy.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_reorder_checkout_fields'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_reorder_checkout_fields.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_echo_notice_shipping'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_echo_notice_shipping.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_change_default_checkout_state'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_change_default_checkout_state.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_add_checkout_fee'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_add_checkout_fee.php';	
		}
	}
	//
	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_replace_paypal_icon'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_replace_paypal_icon.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_remove_billing_postcode_checkout'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_remove_billing_postcode_checkout.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_delivery_weight_display_admin_order_meta'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_delivery_weight_display_admin_order_meta.php';	
		}
	}
	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_products_no_weight_admin'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_products_no_weight_admin.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_order_pay_without_login'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_order_pay_without_login.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_tracking_exclude_failed_orders'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_tracking_exclude_failed_orders.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_validate_privacy_registration'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_validate_privacy_registration.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_disable_customer_order_email_if_free'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_disable_customer_order_email_if_free.php';	
		}
	}

	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_checkout_page_options)) {
		if ($strive_wookc_checkout_page_options['strive_wookc_add_free_sample_add_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_add_free_sample_add_cart.php';	
		}
	}

