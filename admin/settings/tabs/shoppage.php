<?php
	/**
	 * Registers tertiary options page, and set main item as parent.
	 */
	$shop_options = new_cmb2_box( array(
		'id'           => 'strive_wookc_shoppage_options_page',
		'title'        => esc_html__( 'Shoppage options', 'woocommerce' ),
		'object_types' => array( 'Options page' ),
		'option_key'   => 'strive_wookc_shoppage_options_keys',
		'parent_slug'  => 'strive_wookc_main_options',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-prices-inc-and-ex-tax/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display Prices With Without Tax ?','woocommerce'),
		'id'   => 'strive_wookc_add_price_suffix_price_inc_tax',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-rename-read-more-out-of-stock-shop/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__(' Rename Read More To Out Of Stock ?','woocommerce'),
		'id'   => 'strive_wookc_archive_custom_cart_button_text',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-hide-add-to-cart-if-already-purchased/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Hide Add to Cart If Already Purchased ?','woocommerce'),
		'id'   => 'strive_wookc_hide_add_cart_if_already_purchased',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-rename-select-options-button-shop-page/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Change Select Options To View Product in Button ?','woocommerce'),
		'id'   => 'strive_wookc_change_select_options_button_text',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-hide-category-images-shop/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce'),
		'desc' => esc_html__('Remove Product Category Images?','woocommerce'),
		'id'   => 'strive_wookc_remove_category_page',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-shop-title-woocommerce-shop-page/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Remove Shop Title ?','woocommerce'),
		'id'   => 'strive_wookc_hide_shop_page_title',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-show-empty-product-categories/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Show Empty Product Categories?','woocommerce'),
		'id'   => 'strive_wookc_storefront_homepage_show_empty_cats',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-change-product-permalinks-shop-loop-pages/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Change Product Permalinks?','woocommerce'),
		'id'   => 'strive_wookc_change_product_permalink_shop',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-show-in-stock-products-first-shop/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display In Stock Products First ?','woocommerce'),
		'id'   => 'strive_wookc_first_sort_by_stock_amount',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-rename-add-to-cart-button-if-product-already-cart/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Rename WooCommerce “Add to Cart” Button if Product Already in Cart ?','woocommerce'),
		'id'   => 'strive_wookc_custom_add_cart_button_single_product',
		'type' => 'checkbox',
	) );

	/*
		
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display Variations Name & Stock In Loop Pages ?','woocommerce'),
		'id'   => 'strive_wookc_echo_stock_variations_loop',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-display-product-height-length-width-shop-page/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Show Product Height, Length, Width In Shop Page?','woocommerce'),
		'id'   => 'strive_wookc_show_product_dimensions_loop',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-check-current-user-already-purchased-product/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Check If Logged in User bought a Product And Display a Message Under Such Item in The Shop Page?','woocommerce'),
		'id'   => 'strive_wookc_user_logged_in_product_already_bought',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-new-badge-recent-products/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Show a NEW Badge On Recent Products ?','woocommerce'),
		'id'   => 'strive_wookc_new_badge_shop_page',
		'type' => 'checkbox',
	) );


	/*
		https://www.businessbloomer.com/woocommerce-add-stock-quantity-on-shop-page/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display Stock Quantity ?','woocommerce'),
		'id'   => 'strive_wookc_show_stock_shop',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-sale-badge-everywhere/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Change Sale Lable To ONOFFER ?','woocommerce'),
		'id'   => 'strive_wookc_rename_sale_badge',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-cart-url-open-new-tab/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__(' Add to Cart URL to Open in a New Tab?','woocommerce'),
		'id'   => 'strive_wookc_loop_add_cart_open_new_tab',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-default-sorting-dropdown/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Hide Default Sorting Dropdown ?','woocommerce'),
		'id'   => 'strive_wookc_remove_default_sorting_storefront',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-product-category-counters/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Remove the Product Category Counters Loop Pages ?','woocommerce'),
		'id'   => 'strive_wookc_remove_category_counter',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-text-product-shop-page-loop/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('show Free Shipping under each product ?','woocommerce'),
		'id'   => 'strive_wookc_show_free_shipping_loop',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-hide-price-add-cart-logged-users/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Hide Price & Add to Cart to Logged Out Users ?','woocommerce'),
		'id'   => 'strive_wookc_hide_price_addcart_not_logged_in',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-show-number-products-shop-page/
	*/
	$shop_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Number Of WooCommerce Products Per Page ?','woocommerce'),
		'id'   => 'strive_wookc_redefine_products_per_page',
		'type' => 'checkbox',
	) );
