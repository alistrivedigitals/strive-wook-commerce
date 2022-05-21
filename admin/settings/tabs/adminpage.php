<?php
	
	$tab = ( array(
		'id'           => 'strive_wookc_admin_options',
		'title'        => esc_html__( 'Admin options','woocommerce' ),
		'object_types' => array('options-page'),
		'option_key'   => 'strive_wookc_admin_options',
		'parent_slug'  => 'strive_wookc_main_options',
	) );

	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$tab['display_cb'] = 'yourprefix_options_display_with_tabs';
	}
	
		$adminpage_options = new_cmb2_box($tab); 
	
	/*
		https://www.businessbloomer.com/woocommerce-view-thank-you-page-order-admin/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add “View Thank You Page” to Order actions ?' ),
		'id'   => 'strive_wookc_show_thank_you_page_order_actions',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-sync-billing-name-wp-user-name/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Sync Billing First & Last Name With User Edit User Profile ?' ),
		'id'   => 'strive_wookx_sync_user_edit_profile_edit_billing_last_name',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-custom-field-quick-edit/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add Custom Field to Quick Edit In Product Admin ?' ),
		'id'   => 'strive_wookc_save_custom_field_quick_edit',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-programmatically-create-product/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Create Product Automatically When A New Image Is Uploaded ?' ),
		'id'   => 'strive_wookc_create_product_automatically',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-sort-products-admin-by-stock/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( ' Sort Products by Stock Status In Admin ?' ),
		'id'   => 'strive_wookc_sort_products_by_stock_status_admin',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-force-max-1-category-per-product/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Force Max 1 Product Category Per Product In Edit Admin Page ?' ),
		'id'   => 'strive_wookc_max_one_product_category',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-find-products-with-no-weight-wp-admin/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Display List of Products With No Weight In Products ?' ),
		'id'   => 'strive_wookc_no_weight_admin',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-additional-products-table-column-admin/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add Column to Products Table ?' ),
		'id'   => 'strive_Wooks_admin_products_visibility_column',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-custom-field-to-bulk-actions-edit/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Display a custom product field input inside the Bulk Edit In Products admin ?' ),
		'id'   => 'strive_wookc_custom_field_bulk_edit_input',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-a-second-content-box-product-category-pages/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add a second description content area to product category pages ?' ),
		'id'   => 'strive_wookc_wp_editor_add',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-new-subpage-wordpress-admin-dashboard/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add New Page and Menu Link to Product Dashboard ?' ),
		'id'   => 'strive_wookc_wp_dashboard_products_new_page_callback',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-metaboxes-product-edit-admin-page/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Hide specific metaboxes Edit Product Page' ),
		'id'   => 'strive_wookc_remove_metaboxes_edit_product',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-jetpack-ads-wp-dashboard/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Disable Jetpack Ad Banners ?' ),
		'id'   => 'strive_wookc_remove_jackpack',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-column-to-users-dashboard-table/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Display a custom column  Users Dashboard ?' ),
		'id'   => 'strive_wookc_add_new_user_column',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-disable-update-notifications-dashboard/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Display Plugin Theme Update Notifications for All Users ?' ),
		'id'   => 'strive_wookc_hide_update_notifications_users',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-set-default-dashboard-login-page-to-products/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Redirect Dashboard Login to Products Page ?' ),
		'id'   => 'strive_wookc_direct_access_wp_dashboard_redirect',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-column-to-orders-table-wp-dashboard/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Display Coumtry Column in Admin Order Tables ? ' ),
		'id'   => 'strive_wookc_add_new_order_admin_list_column',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-display-custom-filters-wp-dashboard-products/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Adding custom Admin product filters in Productadmin ? ' ),
		'id'   => 'strive_wookc_filter_by_custom_taxonomy_dashboard_products',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-how-to-create-a-new-product-type/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add a custom product type to WooCommerce Admin ?' ),
		'id'   => 'strive_wookc_add_custom_product_type',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-calculate-sales-state/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Show the Report Get Sales by State In Admin Report ?' ),
		'id'   => 'strive_wookc_admin_add_report_orders_tab',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-calculate-sales-coupon-code/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( ' Show Total Sales by Coupon Code ?' ),
		'id'   => 'strive_wookc_admin_shop_coupon_sales_column_content',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-wp-menu-wc-pages-via-php/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Create a new menu in WordPress ?' ),
		'id'   => 'strive_wookc_echo_categories_menu',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-hide-wp-admin-bar-non-admins/
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Hide the WP Admin Bar for non-Admins ?' ),
		'id'   => 'strive_wookc_hide_admin_bar_if_non_admin',
		'type' => 'checkbox',
	) );

	/*
		
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( '' ),
		'id'   => 'strive_Wooks_show_sales_to_admin',
		'type' => 'checkbox',
	) );

	/*
		
	*/
	$adminpage_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( '' ),
		'id'   => '',
		'type' => 'checkbox',
	) );


