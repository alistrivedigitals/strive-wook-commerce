<?php
	/**
	 * Registers tertiary options page, and set main item as parent.
	 */
	$tab = (array(
		'id'           => 'strive_wookc_category_page',
		'title'        => esc_html__( 'Category options','woocommerce' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'strive_wookc_category_options_key',
		'parent_slug'  => 'strive_wookc_main_options',
	) );


	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$tab['display_cb'] = 'yourprefix_options_display_with_tabs';
	}
	
	$category_page_options = new_cmb2_box($tab);

	/*
		https://www.businessbloomer.com/woocommerce-hide-category-images-shop/
	*/
	$category_page_options->add_field(array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Hide The CategoryPage Image? ', 'woocommerce' ),
		'id'   => 'strive_wookc_hide_category_image',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-display-product-categories-select-list/
	*/
	$category_page_options->add_field(array(
		'name' => esc_html__('Enable/Disable','woocommerce'),
		'desc' => esc_html__(' Display a Product Categories Dropdown Select? ', 'woocommerce' ),
		'id'   => 'strive_wookc_filter_by_tag',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-shop-title-woocommerce-shop-page/
	*/
	$category_page_options->add_field(array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__(' Remove Shop Title? ','woocommerce' ),
		'id'   => 'strive_wookc_hide_shop_page_title',
		'type' => 'checkbox',
	) );

	/*
..		https://www.businessbloomer.com/woocommerce-change-product-permalinks-shop-loop-pages/
	*/
	$category_page_options->add_field(array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__(' Change Product Links ? ','woocommerce' ),
		'id'   => 'strive_wookc_change_product_permalink_shop',
		'type' => 'checkbox',
	) );

	$category_page_options->add_field(array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Enter Product ID Number ? ','woocommerce' ),
		'id'   => 'strive_wookc_text_change_product_shop',
		'type' => 'text',
	) );



	/*
		https://www.businessbloomer.com/woocommerce-add-a-second-content-box-product-category-pages/
	*/
	$category_page_options->add_field(array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Add a second Description content area to the WooCommerce Product Category Pages? ', 'woocommerce' ),
		'id'   => 'strive_wookc_wp_editor_add',
		'type' => 'checkbox',
	) );

	/*
		
	*/
	$category_page_options->add_field(array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Hiding the No products were found matching your selection In CategoryPage? ', 'woocommerce' ),
		'id'   => 'strive_wookc_no_product_found',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-avada-social-sharing-product-category-resolved/
	*/
	$category_page_options->add_field(array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Add Social Sharing to WooCommerce Product Loop Items in Avada Theme? ', 'woocommerce' ),
		'id'   => 'strive_avada_show_social_sharing',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-hide-non-current-categories-product-categories-widget/
	*/
	$category_page_options->add_field(array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Hide Current Product Category From The Product Categories Widget? ', 'woocommerce' ),
		'id'   => 'strive_Wookc_hide_current_cat_prod_cat_widget',
		'type' => 'checkbox',
	) );


	/*
		https://www.businessbloomer.com/woocommerce-hide-non-current-categories-product-categories-widget/
	*/
	$category_page_options->add_field(array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Show All Subcates? ','woocommerce' ),
		'id'   => 'strive_wookc_show_all_subcats',
		'type' => 'checkbox',
	) );
	