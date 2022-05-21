<?php
  $strive_wookc_emails_page_keys = get_option( 'strive_wookc_emails_page_keys');
	if (isset($strive_wookc_emails_page_keys['strive_Wookc_item_remaining_stock']) && $strive_wookc_emails_page_keys['strive_Wookc_item_remaining_stock'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_Wookc_item_remaining_stock.php';	
	}

	if (isset($strive_wookc_emails_page_keys['strive_wookc_attach_pdf_to_emails']) && $strive_wookc_emails_page_keys['strive_wookc_attach_pdf_to_emails'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_attach_pdf_to_emails.php';	
	}

	if (isset($strive_wookc_emails_page_keys['strive_wookc_order_completed_email_add_cc_bcc']) && $strive_wookc_emails_page_keys['strive_wookc_order_completed_email_add_cc_bcc'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_order_completed_email_add_cc_bcc.php';	
	}

	if (isset($strive_wookc_emails_page_keys['strive_wookc_translate_woocommerce_strings_emails']) && $strive_wookc_emails_page_keys['strive_wookc_translate_woocommerce_strings_emails'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_translate_woocommerce_strings_emails.php';	
	}

	if (isset($strive_wookc_emails_page_keys['strive_wookc_status_custom_notification']) && $strive_wookc_emails_page_keys['strive_wookc_status_custom_notification'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_status_custom_notification.php';	
	}
	
	if (isset($strive_wookc_emails_page_keys['strive_wookc_disable_order_email_free']) && $strive_wookc_emails_page_keys['strive_wookc_disable_order_email_free'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_disable_order_email_free.php';	
	}

	if (isset($strive_wookc_emails_page_keys['strive_wookc_remove_permalink']) && $strive_wookc_emails_page_keys['strive_wookc_remove_permalink'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_remove_permalink.php';	
	}

	if (isset($strive_wookc_emails_page_keys['strive_wookc_add_css_to_emails']) && $strive_wookc_emails_page_keys['strive_wookc_add_css_to_emails'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_add_css_to_emails.php';	
	}

	if (isset($strive_wookc_emails_page_keys['strive_wookc_change_processing_email_subject']) && $strive_wookc_emails_page_keys['strive_wookc_change_processing_email_subject'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/strive_wookc_change_processing_email_subject.php';	
	}

	if (isset($strive_wookc_emails_page_keys['strive_wookc_display_payment_type_name_emails']) && $strive_wookc_emails_page_keys['strive_wookc_display_payment_type_name_emails'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_display_payment_type_name_emails.php';	
	}

	if (isset($strive_wookc_emails_page_keys['strive_wookc_add_content_specific_email']) && $strive_wookc_emails_page_keys['strive_wookc_add_content_specific_email'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_add_content_specific_email.php';	
	}

	