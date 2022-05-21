 <?php
	$strive_wookc_admin_options = get_option( 'strive_wookc_admin_options' );
	if (isset($strive_wookc_admin_options['strive_wookc_show_thank_you_page_order_actions']) && $strive_wookc_admin_options['strive_wookc_show_thank_you_page_order_actions'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_show_thank_you_page_order_actions.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookx_sync_user_edit_profile_edit_billing_last_name']) && $strive_wookc_admin_options['strive_wookx_sync_user_edit_profile_edit_billing_last_name'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookx_sync_user_edit_profile_edit_billing_last_name.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_save_custom_field_quick_edit']) && $strive_wookc_admin_options['strive_wookc_save_custom_field_quick_edit'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_save_custom_field_quick_edit.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_create_product_automatically']) && $strive_wookc_admin_options['strive_wookc_create_product_automatically'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_create_product_automatically.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_sort_products_by_stock_status_admin']) && $strive_wookc_admin_options['strive_wookc_sort_products_by_stock_status_admin'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_sort_products_by_stock_status_admin.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_max_one_product_category']) && $strive_wookc_admin_options['strive_wookc_max_one_product_category'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_max_one_product_category.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_no_weight_admin']) && $strive_wookc_admin_options['strive_wookc_no_weight_admin'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_no_weight_admin.php';
	}

	if (isset($strive_wookc_admin_options['strive_Wooks_admin_products_visibility_column']) && $strive_wookc_admin_options['strive_Wooks_admin_products_visibility_column'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_Wooks_admin_products_visibility_column.php';
	}
	
	if (isset($strive_wookc_admin_options['strive_wookc_custom_field_bulk_edit_input']) && $strive_wookc_admin_options['strive_wookc_custom_field_bulk_edit_input'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_custom_field_bulk_edit_input.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_wp_editor_add']) && $strive_wookc_admin_options['strive_wookc_wp_editor_add'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_wp_editor_add.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_remove_metaboxes_edit_product']) && $strive_wookc_admin_options['strive_wookc_remove_metaboxes_edit_product'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_remove_metaboxes_edit_product.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_remove_jackpack']) && $strive_wookc_admin_options['strive_wookc_remove_jackpack'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_remove_jackpack.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_add_new_user_column']) && $strive_wookc_admin_options['strive_wookc_add_new_user_column'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_add_new_user_column.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_hide_update_notifications_users']) && $strive_wookc_admin_options['strive_wookc_hide_update_notifications_users'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_hide_update_notifications_users.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_direct_access_wp_dashboard_redirect']) && $strive_wookc_admin_options['strive_wookc_direct_access_wp_dashboard_redirect'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_direct_access_wp_dashboard_redirect.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_add_new_order_admin_list_column']) && $strive_wookc_admin_options['strive_wookc_add_new_order_admin_list_column'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_add_new_order_admin_list_column.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_filter_by_custom_taxonomy_dashboard_products']) && $strive_wookc_admin_options['strive_wookc_filter_by_custom_taxonomy_dashboard_products'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_filter_by_custom_taxonomy_dashboard_products.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_add_custom_product_type']) && $strive_wookc_admin_options['strive_wookc_add_custom_product_type'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_add_custom_product_type.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_admin_add_report_orders_tab']) && $strive_wookc_admin_options['strive_wookc_admin_add_report_orders_tab'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_admin_add_report_orders_tab.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_admin_shop_coupon_sales_column_content']) && $strive_wookc_admin_options['strive_wookc_admin_shop_coupon_sales_column_content'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_admin_shop_coupon_sales_column_content.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_echo_categories_menu']) && $strive_wookc_admin_options['strive_wookc_echo_categories_menu'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_echo_categories_menu.php';
	}

	if (isset($strive_wookc_admin_options['strive_wookc_hide_admin_bar_if_non_admin']) && $strive_wookc_admin_options['strive_wookc_hide_admin_bar_if_non_admin'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_hide_admin_bar_if_non_admin.php';
	}

	if (isset($strive_wookc_admin_options['strive_Wooks_show_sales_to_admin']) && $strive_wookc_admin_options['strive_Wooks_show_sales_to_admin'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_Wooks_show_sales_to_admin.php';
	}

	if (isset($strive_wookc_admin_options['']) && $strive_wookc_admin_options[''] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/.php';
	}

	if (isset($strive_wookc_admin_options['']) && $strive_wookc_admin_options[''] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/.php';
	}

	if (isset($strive_wookc_admin_options['']) && $strive_wookc_admin_options[''] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/.php';
	}

