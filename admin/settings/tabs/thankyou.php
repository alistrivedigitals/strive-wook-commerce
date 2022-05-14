<?php
	/**
	 * Registers tertiary options page, and set main item as parent.
	 */
	$tab = ( array(
		'id'           => 'strive_wookc_thankyou_options_page',
		'title'        => esc_html__( 'Thankyou options','woocommerce' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'strive_wookc_thankyou_options_key',
		'parent_slug'  => 'strive_wookc_main_options',
	) );

	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$tab['display_cb'] = 'yourprefix_options_display_with_tabs';
	}
	$price_options = new_cmb2_box($tab);

	/*
		https://www.businessbloomer.com/woocommerce-view-thank-you-page-order-admin/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Add View Thank You Page to Order actions ?','woocommerce'),
		'id'   => 'strive_wookc_show_thank_you_page_order_admin_actions',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-automatically-register-guest-checkouts/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Automatically Register Guest Customers ?','woocommerce'),
		'id'   => 'strive_wookc_register_guests',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-display-product-up-sells-thank-you-page/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display Some Products In Thankyou Page?','woocommerce'),
		'id'   => 'strive_wookc_upsells_thankyou',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-show-sku-cart-page/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display SKU Below Item Name ?','woocommerce'),
		'id'   => 'strive_wookc_sku_checkout_pages',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-include-custom-wp-page-thank-you-page/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Include Custom WordPress Page In Thankyou Page ?','woocommerce'),
		'id'   => 'strive_wookc_custom_thank_you_page',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-disable-tracking-if-order-failed-thank-you-page/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('The default Thank You Page in WooCommerce?','woocommerce'),
		'id'   => 'strive_wookc_tracking_exclude_failed_orders',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-share-purchase-twitter-thank-page/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display a your Purchase on Twitter Button On Thankyou Page?','woocommerce'),
		'id'   => 'strive_wpookc_share_purchase_twitter',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-permalink-product-order-table/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Remove the Product Permalink ?','woocommerce'),
		'id'   => 'strive_wookc_remove_product_link',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-conversion-tracking-code-thank-page/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__(' Add Conversion Tracking to the Thank You Page?','woocommerce'),
		'id'   => 'strive_wookc_conversion_tracking_thank_you_page',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-text-thank-page/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Add Content to the ThankYou Page ?','woocommerce'),
		'id'   => 'strive_Wookc_add_content_thankyou',
		'type' => 'checkbox',
	) );