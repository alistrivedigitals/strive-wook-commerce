<?php
$strive_wookc_myaccount_options_keys = get_option( 'strive_wookc_myaccount_options_keys');
	if (isset($strive_wookc_myaccount_options_keys['strive_wookc_confirm_order_my_account_orders_actions']) &&
		 $strive_wookc_myaccount_options_keys['strive_wookc_confirm_order_my_account_orders_actions'] == "on"){
			include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/myaccount/strive_wookc_confirm_order_my_account_orders_actions.php';	
	}

	if (isset($strive_wookc_myaccount_options_keys['strive_wookc_sync_edit_billing_first_name']) && $strive_wookc_myaccount_options_keys['strive_wookc_sync_edit_billing_first_name'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/myaccount/strive_wookc_sync_edit_billing_first_name.php';	
	}

	if (isset($strive_wookc_myaccount_options_keys['strive_wookc_actual_referrer']) && $strive_wookc_myaccount_options_keys['strive_wookc_actual_referrer'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/myaccount/strive_wookc_actual_referrer.php';	
	}

	if (isset($strive_wookc_myaccount_options_keys['strive_wookc_customer_login_redirect']) && $strive_wookc_myaccount_options_keys['strive_wookc_customer_login_redirect'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/myaccount/strive_wookc_customer_login_redirect.php';	
	}

	if (isset($strive_wookc_myaccount_options_keys['strive_wookc_add_woo_account_registration_fields']) && $strive_wookc_myaccount_options_keys['strive_wookc_add_woo_account_registration_fields'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/myaccount/strive_wookc_add_woo_account_registration_fields.php';
	}

	if (isset($strive_wookc_myaccount_options_keys['strive_wookc_automatic_login']) && $strive_wookc_myaccount_options_keys['strive_wookc_automatic_login'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/myaccount/strive_wookc_automatic_login.php';	
	}

	if (isset($strive_wookc_myaccount_options_keys['strive_wookc_registration_privacy_policy']) && $strive_wookc_myaccount_options_keys['strive_wookc_registration_privacy_policy'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/myaccount/strive_wookc_registration_privacy_policy.php';	
	}

	if (isset($strive_wookc_myaccount_options_keys['strive_wookc_extra_register_select_field']) && $strive_wookc_myaccount_options_keys['strive_wookc_extra_register_select_field'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/myaccount/strive_wookc_extra_register_select_field.php';	
	}

	if (isset($strive_wookc_myaccount_options_keys['strive_wookc_assign_custom_role']) && $strive_wookc_myaccount_options_keys['strive_wookc_assign_custom_role'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/myaccount/strive_wookc_assign_custom_role.php';	
	}

	