<?php
  $strive_wookc_coupon_page_options = get_option( 'strive_wookc_coupon_page_options');
	if (isset($strive_wookc_coupon_page_options['strive_Wookc_subtotal_if_discount']) && $strive_wookc_coupon_page_options['strive_Wookc_subtotal_if_discount'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_Wookc_subtotal_if_discount.php';	
	}

	if (isset($strive_wookc_coupon_page_options['strive_wookc_admin_shop_coupon_sales_column']) && $strive_wookc_coupon_page_options['strive_wookc_admin_shop_coupon_sales_column'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_admin_shop_coupon_sales_column.php';	
	}

	if (isset($strive_wookc_coupon_page_options['strive_wookc_have_coupon_message']) && $strive_wookc_coupon_page_options['strive_wookc_have_coupon_message'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_have_coupon_message.php';	
	}

	if (isset($strive_wookc_coupon_page_options['strive_wookc_hide_coupon_code']) && $strive_wookc_coupon_page_options['strive_wookc_hide_coupon_code'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_hide_coupon_code.php';	
	}

	if (isset($strive_wookc_coupon_page_options['strive_wookc_apply_matched_coupons']) && $strive_wookc_coupon_page_options['strive_wookc_apply_matched_coupons'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_apply_matched_coupons.php';	
	}

	