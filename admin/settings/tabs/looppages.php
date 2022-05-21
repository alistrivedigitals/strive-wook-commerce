<?php

	$tab = ( array(
		'id'           => 'strive_wookc_loop_pages',
		'title'        => esc_html__( 'Looppages options', 'woocommerce' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'strive_wookc_looppages_options_keys',
		'parent_slug'  => 'strive_wookc_main_options',
	) );

	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$tab['display_cb'] = 'yourprefix_options_display_with_tabs';
	}
	
	$loop_pages = new_cmb2_box($tab);


	/*
		https://www.businessbloomer.com/woocommerce-change-product-permalinks-shop-loop-pages/
	*/
	$loop_pages->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Change Product Links ?','woocommerce'),
		'id'   => 'strive_wookc_product_permalink_shop',
		'type' => 'checkbox',
	) );
	$loop_pages->add_field( array(
		'name' => esc_html__( 'Enable Checkbox ?','woocommerce' ),
		'desc' => esc_html__( 'Id Name ?','woocommerce'),
		'id'   => 'strive_wookc_permalink_shop',
		'type' => 'text',
	) );
	/*
		https://www.businessbloomer.com/woocommerce-remove-rename-add-default-sorting-options-shop/
	*/
	$loop_pages->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Remove, Rename or Add Options to the WooCommerce Default Sorting Dropdown ?','woocommerce'),
		'id'   => 'strive_wookc_remove_sorting_option_woocommerce_shop',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-display-product-height-length-width-shop-page/
	*/
	$loop_pages->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'show product height, width, length In loop pages ?','woocommerce'),
		'id'   => 'strive_wookc_show_product_dimensions_loop',
		'type' => 'checkbox',
	) );

	/*
		 https://www.businessbloomer.com/woocommerce-add-stock-quantity-on-shop-page/
	*/
	$loop_pages->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Add Stock Quantity on Shop Page','woocommerce'),
		'id'   => 'strive_wookc_show_stock_shop',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-sale-badge-everywhere/
	*/
	$loop_pages->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Remove Sale! Label From Products pages ?','woocommerce'),
		'id'   => 'strive_wookc_rename_sale',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-default-sorting-dropdown/
	*/
	$loop_pages->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Hide Default Sorting Dropdown ?','woocommerce'),
		'id'   => 'strive_wookc_remove_default_sorting_storefront',
		'type' => 'checkbox',
	) );

	