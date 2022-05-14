<?php

 $strive_wookc_thankyou_options_key = get_option( 'strive_wookc_thankyou_options_key');
	if ($strive_wookc_thankyou_options_key['strive_wookc_show_thank_you_page_order_admin_actions'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/thankyou/strive_wookc_show_thank_you_page_order_admin_actions.php';	
	}

	if (isset($strive_wookc_thankyou_options_key['strive_wookc_register_guests']) && $strive_wookc_thankyou_options_key['strive_wookc_register_guests'] == "on"){		
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/thankyou/strive_wookc_register_guests.php';	
	}

	if (isset($strive_wookc_thankyou_options_key['strive_wookc_upsells_thankyou']) && $strive_wookc_thankyou_options_key['strive_wookc_upsells_thankyou'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/thankyou/strive_wookc_upsells_thankyou.php';	
	}

	if (isset($strive_wookc_thankyou_options_key['strive_wookc_sku_checkout_pages']) && $strive_wookc_thankyou_options_key['strive_wookc_sku_checkout_pages'] == "on"){	
			include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/thankyou/strive_wookc_sku_checkout_pages.php';	
	}

	if (isset($strive_wookc_thankyou_options_key['strive_wookc_custom_thank_you_page']) && $strive_wookc_thankyou_options_key['strive_wookc_custom_thank_you_page'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/thankyou/strive_wookc_custom_thank_you_page.php';	
	}

	if (isset($strive_wookc_thankyou_options_key['strive_wookc_tracking_exclude_failed_orders']) && $strive_wookc_thankyou_options_key['strive_wookc_tracking_exclude_failed_orders'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/thankyou/strive_wookc_tracking_exclude_failed_orders.php';	
	}

	if (isset($strive_wookc_thankyou_options_key['strive_wookc_remove_product_link']) && $strive_wookc_thankyou_options_key['strive_wookc_remove_product_link'] == "on"){		
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/thankyou/strive_wookc_remove_product_link.php';	
	}

	if (isset($strive_wookc_thankyou_options_key['strive_wookc_conversion_tracking_thank_you_page']) && $strive_wookc_thankyou_options_key['strive_wookc_conversion_tracking_thank_you_page'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/thankyou/strive_wookc_conversion_tracking_thank_you_page.php';	
	}

	if (isset($strive_wookc_thankyou_options_key['strive_wpookc_share_purchase_twitter']) && $strive_wookc_thankyou_options_key['strive_wpookc_share_purchase_twitter'] == "on"){
			include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/thankyou/strive_wpookc_share_purchase_twitter.php';	
	}

	if (isset($strive_wookc_thankyou_options_key['strive_Wookc_add_content_thankyou']) && $strive_wookc_thankyou_options_key['strive_Wookc_add_content_thankyou'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/thankyou/strive_Wookc_add_content_thankyou.php';	
	}

	