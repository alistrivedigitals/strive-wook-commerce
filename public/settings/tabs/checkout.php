<?php

  	$strive_wookc_checkout_page_options = get_option( 'strive_wookc_checkout_page_options');
	if (isset($strive_wookc_price_options_keys['strive_wookc_register_guests']) && $strive_wookc_price_options_keys['strive_wookc_register_guests'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_register_guests.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_order_pay_billing_address']) && $strive_wookc_price_options_keys['strive_wookc_order_pay_billing_address'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_order_pay_billing_address.php';	
	}
	
	if (isset($strive_wookc_price_options_keys['strive_wookc_product_image_review_order_checkout']) && $strive_wookc_price_options_keys['strive_wookc_product_image_review_order_checkout'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_product_image_review_order_checkout.php';	
	}
	
	if (isset($strive_wookc_price_options_keys['strive_wookc_labels_inside_checkout_fields']) && $strive_wookc_price_options_keys['strive_wookc_labels_inside_checkout_fields'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_labels_inside_checkout_fields.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_alter_checkout_fields_after_order']) && $strive_wookc_price_options_keys['strive_wookc_alter_checkout_fields_after_order'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_alter_checkout_fields_after_order.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_conditionally_hide_show_checkout_field']) && $strive_wookc_price_options_keys['strive_wookc_conditionally_hide_show_checkout_field'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_conditionally_hide_show_checkout_field.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_checkout_fields_custom_attributes']) && $strive_wookc_price_options_keys['strive_wookc_checkout_fields_custom_attributes'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_checkout_fields_custom_attributes.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_custom_order_notes']) && $strive_wookc_price_options_keys['strive_wookc_custom_order_notes'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_custom_order_notes.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_checkout_page_empty']) && $strive_wookc_price_options_keys['strive_wookc_checkout_page_empty'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_checkout_page_empty.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_rename_state_province']) && $strive_wookc_price_options_keys['strive_wookc_rename_state_province'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_rename_state_province.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_checkout_add_on']) && $strive_wookc_price_options_keys['strive_wookc_checkout_add_on'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_checkout_add_on.php';	
	}
	
	if (isset($strive_wookc_price_options_keys['strive_wookc_checkout_fields_in_label_error']) && $strive_wookc_price_options_keys['strive_wookc_checkout_fields_in_label_error'] == "on"){	
				include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_checkout_fields_in_label_error.php';	
	}

	if (isset($strive_wookc_price_options_keys['srive_wookc_checkout_radio_choice']) && $strive_wookc_price_options_keys['srive_wookc_checkout_radio_choice'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/srive_wookc_checkout_radio_choice.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_rename_place_order_button_alt']) && $strive_wookc_price_options_keys['strive_wookc_rename_place_order_button_alt'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_rename_place_order_button_alt.php';	
	}
	
	if (isset($strive_wookc_price_options_keys['strive_wookc_display_terms_conditions_acceptance']) && $strive_wookc_price_options_keys['strive_wookc_display_terms_conditions_acceptance'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_display_terms_conditions_acceptance.php';	
		
	}
	
	if (isset($strive_wookc_price_options_keys['strive_wookc_privacy_message_below_checkout_button']) && $strive_wookc_price_options_keys['strive_wookc_privacy_message_below_checkout_button'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_privacy_message_below_checkout_button.php';	
		
	}

	
	if (isset($strive_wookc_price_options_keys['strive_wookc_email_with_twitter_username']) && $strive_wookc_price_options_keys['strive_wookc_email_with_twitter_username'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_email_with_twitter_username.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_remove_what_is_paypal']) && $strive_wookc_price_options_keys['strive_wookc_remove_what_is_paypal'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_remove_what_is_paypal.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_add_checkout_privacy_policy']) && $strive_wookc_price_options_keys['strive_wookc_add_checkout_privacy_policy'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_add_checkout_privacy_policy.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_reorder_checkout_fields']) && $strive_wookc_price_options_keys['strive_wookc_reorder_checkout_fields'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_reorder_checkout_fields.php';	
	}

	
	if (isset($strive_wookc_price_options_keys['strive_wookc_echo_notice_shipping']) && $strive_wookc_price_options_keys['strive_wookc_echo_notice_shipping'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_echo_notice_shipping.php';	
	}

	
	if (isset($strive_wookc_price_options_keys['strive_wookc_change_default_checkout_state']) && $strive_wookc_price_options_keys['strive_wookc_change_default_checkout_state'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_change_default_checkout_state.php';	
	}

	
	if (isset($strive_wookc_price_options_keys['strive_wookc_add_checkout_fee']) && $strive_wookc_price_options_keys['strive_wookc_add_checkout_fee'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_add_checkout_fee.php';	
	}
	
	
	if (isset($strive_wookc_price_options_keys['strive_wookc_replace_paypal_icon']) && $strive_wookc_price_options_keys['strive_wookc_replace_paypal_icon'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_replace_paypal_icon.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_remove_billing_postcode_checkout']) && $strive_wookc_price_options_keys['strive_wookc_remove_billing_postcode_checkout'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_remove_billing_postcode_checkout.php';	
	}

	
	if (isset($strive_wookc_price_options_keys['strive_wookc_delivery_weight_display_admin_order_meta']) && $strive_wookc_price_options_keys['strive_wookc_delivery_weight_display_admin_order_meta'] == "on"){	{	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_delivery_weight_display_admin_order_meta.php';	
	}
	
	if (isset($strive_wookc_price_options_keys['strive_wookc_products_no_weight_admin']) && $strive_wookc_price_options_keys['strive_wookc_products_no_weight_admin'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_products_no_weight_admin.php';	
	}
	
	if (isset($strive_wookc_price_options_keys['strive_wookc_order_pay_without_login']) && $strive_wookc_price_options_keys['strive_wookc_order_pay_without_login'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_order_pay_without_login.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_tracking_exclude_failed_orders']) && $strive_wookc_price_options_keys['strive_wookc_tracking_exclude_failed_orders'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_tracking_exclude_failed_orders.php';	
	}

	if (isset($strive_wookc_price_options_keys['strive_wookc_validate_privacy_registration']) && $strive_wookc_price_options_keys['strive_wookc_validate_privacy_registration'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_validate_privacy_registration.php';	
	}	
	
	if (isset($strive_wookc_price_options_keys['strive_wookc_disable_customer_order_email_if_free']) && $strive_wookc_price_options_keys['strive_wookc_disable_customer_order_email_if_free'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_disable_customer_order_email_if_free.php';
	}

	
	if (isset($strive_wookc_price_options_keys['strive_wookc_add_free_sample_add_cart']) && $strive_wookc_price_options_keys['strive_wookc_add_free_sample_add_cart'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_add_free_sample_add_cart.php';	
	}
	

