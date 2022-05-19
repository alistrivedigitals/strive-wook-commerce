<?php
	/**
	 * Registers tertiary options page, and set main item as parent.
	 */
	$tab = ( array(
		'id'           => 'strive_wookc_shipping_options',
		'title'        => esc_html__( 'Shipping options', 'woocommerce' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'strive_wookc_shipping_options_keys',
		'parent_slug'  => 'strive_wookc_main_options',
	) );


	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$tab['display_cb'] = 'yourprefix_options_display_with_tabs';
	}

	$shipping_options = new_cmb2_box($tab);

	/*	
		https://www.businessbloomer.com/woocommerce-show-shipping-rates-single-product-page/
	*/
	$shipping_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display Shipping Zones & Methods In Productpage ?','woocommerce'),
		'id'   => 'strive_wookc_shipping_rates_single_product',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-show-dispatch-est-shipping-date-single-product/
	*/
	$shipping_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display Dispatch Estimated Delivery Date ?','woocommerce'),
		'id'   => 'strive_wookc_dispatch_info_single_product',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-shipping-phone-checkout/
	*/
	$shipping_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Add new checkout field shipping phone ?','woocommerce'),
		'id'   => 'strive_wookc_shipping_phone_checkout',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-ship-predefined-local-pickup-addresses/
	*/
	$shipping_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Add Local Pickup Adress In Shipping Zone ?','woocommerce'),
		'id'   => 'strive_wookc_display_pickup_locations',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-setup-tiered-shipping-rates-order-amount/
	*/
	$shipping_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce'),
		'desc' => esc_html__('Shipping Zone Setup for Tiered Shipping ?','woocommerce'),
		'id'   => 'strive_wookc_woocommerce_tiered_shipping',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-house-number-field-checkout/
	*/
	$shipping_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Add House Number in the WooCommerce Checkout ?','woocommerce'),
		'id'   => 'strive_wookc_rename_address_placeholders_checkout',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-allow-shipping-one-state-only/
	*/
	$shipping_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Limit Shipping to Only One State ?','woocommerce'),
		'id'   => 'strive_wookc_cart_filter_us_states',
		'type' => 'checkbox',
	) );


	/*
		https://www.businessbloomer.com/woocommerce-add-shipping-fee-non-continental-states/
	*/
	$shipping_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Add Shipping Surcharge for Specific States ?','woocommerce'),
		'id'   => 'strive_wookc_add_cart_fee',
		'type' => 'checkbox',
	));
	$shipping_options->add_field( array(
		'name' => esc_html__('IF Enable ? ','woocommerce'),
		'desc' => esc_html__('Which States Surcharge for Fees ?','woocommerce'),
		'id'   => 'strive_wookc_add_cart_fee',
		'type' => 'text',
	
	 ));

	/*	
		https://www.businessbloomer.com/woocommerce-disallow-shipping-to-po-box/
	*/
	$shipping_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__(' Disallow Shipping to PO BOX Address?','woocommerce'),
		'id'   => 'strive_wookc_disallow_pobox_shipping',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-need-spend-x-get-free-shipping-cart-page/
	*/
	$shipping_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Get Free Shipping If You Add x Product ?','woocommerce'),
		'id'   => 'strive_wookc_free_shipping_cart_notice',
		'type' => 'checkbox',
	) );


	/*
		https://www.businessbloomer.com/woocommerce-add-text-product-shop-page-loop/
	*/
	$shipping_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__(' Add show Free Shipping under each product ?','woocommerce'),
		'id'   => 'strive_wookc_free_shipping_loop',
		'type' => 'checkbox',
	) );


	