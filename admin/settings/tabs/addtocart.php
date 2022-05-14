<?php
	/**
	 * Registers tertiary options page, and set main item as parent.
	 */
	$add_to_cart_options = new_cmb2_box( array(
		'id'           => 'strive_wookc_add_to_cart_page',
		'title'        => esc_html__( 'Addtocart options', 'woocommerce' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'strive_wookc_add_to_cart',
		'parent_slug'  => 'strive_wookc_main_options',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-hide-add-to-cart-if-already-purchased/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Hide Add to Cart If Already Purchased?', 'woocommerce' ),
		'id'   => 'strive_wookc_hide_add_cart_if_already_purchased',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-force-product-quantity-1-cart/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Conditionally Force Product Minimum Quantity 1', 'woocommerce' ),
		'id'   => 'strive_wookc_product_max_one_cart_stock_low',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-product-from-cart-programmatically/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Remove Item From Cart Automatically?','woocommerce' ),
		'id'   => 'strive_wookc_remove_product_from_cart_programmatically',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-plus-minus-buttons-to-add-to-cart-quantity-input/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Add Display Plus & Minus Quantity Buttons?', 'woocommerce' ),
		'id'   => 'strive_wookc_display_quantity_plus',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-hide-mini-cart-widget-dropdown/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( ' Hide Menu Mini-Cart Widget Dropdown?', 'woocommerce' ),
		'id'   => 'strive_wookc_hide_mini_cart_widget',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-force-product-quantity-1-cart/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Add Product to Cart When Visiting a Specific Page ID?', 'woocommerce' ),
		'id'   => 'strive_wookc_add_product_to_cart_on_page_id_load',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-rename-add-to-cart-button-if-product-already-cart/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Rename WooCommerce “Add to Cart” Button if Product Already in Cart', 'woocommerce?' ),
		'id'   => 'strive_wookc_custom_add_cart_button_loop',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-force-product-quantity-1-cart/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Conditionally Force Product Minimum Quantity 1', 'woocommerce' ),
		'id'   => 'strive_wookc_product_max_one_cart_stock_low',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-icon-add-cart-buttons/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Add an HTML Symbol to the Add to Cart Button?', 'woocommerce' ),
		'id'   => 'strive_wookc_add_symbol_add_cart_button_single',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-force-product-quantity-1-cart/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'WooCommerce Holidays Order Hide Add to Cart Buttons', 'woocommerce' ),
		'id'   => 'strive_wookc_enable_holiday_enable_message',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-redirect-checkout-add-cart/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Redirect to Checkout on Add to Cart?', 'woocommerce' ),
		'id'   => 'strive_wookc_redirect_checkout_add_cart',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-add-cart-add-view-product-loop/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( ' Remove Add to Cart, Add View Product Button ?', 'woocommerce' ),
		'id'   => 'strive_wookc_view_product_button',
		'type' => 'checkbox',
	) );


	/*
		https://www.businessbloomer.com/woocommerce-edit-add-to-cart-text-by-product-category/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Change Add to Cart Text depending on the Product Category?', 'woocommerce' ),
		'id'   => 'strive_wookc_archive_custom_cart_button_text',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-item-to-cart-programmatically/
	*/
	$add_to_cart_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Add Product to Cart On Visit Programmatically?','woocommerce' ),
		'id'   => 'strive_wookc_add_product_cart_automatically',
		'type' => 'checkbox',
	) );


