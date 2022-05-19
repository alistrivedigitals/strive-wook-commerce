<?php
	
$strive_wookc_order_options = get_option( 'strive_wookc_order_options' );
	 if (isset($strive_wookc_order_options['strive_wookc_redirect_thank_you_page_order_admin_actions']) && $strive_wookc_order_options['strive_wookc_redirect_thank_you_page_order_admin_actions'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_wookc_redirect_thank_you_page_order_admin_actions.php';
	}

	 if (isset($strive_wookc_order_options['strive_Wookc_confirm_order_my_account_orders_actions']) && $strive_wookc_order_options['strive_Wookc_confirm_order_my_account_orders_actions'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_Wookc_confirm_order_my_account_orders_actions.php';
	}

	 if (isset($strive_wookc_order_options['strive_Wookc_confirm_order_my_account_orders_actions']) && $strive_wookc_order_options['strive_Wookc_confirm_order_my_account_orders_actions'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_Wookc_confirm_order_my_account_orders_actions.php';
	}

	 if (isset($strive_wookc_order_options['strive_wookc_set_singapore_city']) && $strive_wookc_order_options['strive_wookc_set_singapore_city'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_wookc_set_singapore_city.php';
	}

	 if (isset($strive_wookc_order_options['strive_wookc_woocommerce_send_email_digest']) && $strive_wookc_order_options['strive_wookc_woocommerce_send_email_digest'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_wookc_woocommerce_send_email_digest.php';
	}

	 if (isset($strive_wookc_order_options['strive_wookc_add_new_order_admin_list_column_content']) && $strive_wookc_order_options['strive_wookc_add_new_order_admin_list_column_content'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_wookc_add_new_order_admin_list_column_content.php';
	}

	 if (isset($strive_wookc_order_options['strive_wookc_register_custom_order_status']) && $strive_wookc_order_options['strive_wookc_register_custom_order_status'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_wookc_register_custom_order_status.php';
	}

	 if (isset($strive_wookc_order_options['strive_wookc_disable_customer_order_email_if_free']) && $strive_wookc_order_options['strive_wookc_disable_customer_order_email_if_free'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_wookc_disable_customer_order_email_if_free.php';
	}

	 if (isset($strive_wookc_order_options['strive_wookc_get_sales_by_coupon']) && $strive_wookc_order_options['strive_wookc_get_sales_by_coupon'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_wookc_get_sales_by_coupon.php';
	}

	 if (isset($strive_wookc_order_options['strive_wookc_checkout_save_user_meta']) && $strive_wookc_order_options['strive_wookc_checkout_save_user_meta'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_wookc_checkout_save_user_meta.php';
	}

	 if (isset($strive_wookc_order_options['strive_wookc_add_note_to_customer_to_PDF_invoice_new']) && $strive_wookc_order_options['strive_wookc_add_note_to_customer_to_PDF_invoice_new'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_wookc_add_note_to_customer_to_PDF_invoice_new.php';
	}

	 if (isset($strive_wookc_order_options['strive_wookc_add_recurring_row_email']) && $strive_wookc_order_options['strive_wookc_add_recurring_row_email'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_wookc_add_recurring_row_email.php';
	}

	 if (isset($strive_wookc_order_options['strive_wookc_check_order_product_id']) && $strive_wookc_order_options['strive_wookc_check_order_product_id'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/order/strive_wookc_check_order_product_id.php';
	}

