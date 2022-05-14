<?php
	/**
	 * Registers tertiary options page, and set main item as parent.
	 */
	$price_options = new_cmb2_box( array(
		'id'           => 'strive_wookc_price_options_page',
		'title'        => esc_html__( '	Price Options', 'woocommerce' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'strive_wookc_price_options_keys',
		'parent_slug'  => 'strive_wookc_main_options',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-replace-variable-price-with-variation-price/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Dynamically Update Variable Product Price With Current Variation Price ?','woocommerce'),
		'id'   => 'strive_wookc_update_price_with_variation_price',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-hide-price-if-out-of-stock/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Hide Price If Product Is Not in Stock?','woocommerce'),
		'id'   => 'strive_wookc_hide_price_if_out_stock_frontend',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-hide-product-prices-from-google/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Remove WooCommerce Product Prices From Google Search Results?','woocommerce'),
		'id'   => 'strive_wookc_hide_price_in_google',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-calculate-subtotal-on-quantity-increment-single-product/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Calculate Subtotal On Quantity Increment ?','woocommerce'),
		'id'   => 'strive_wookc_product_price_recalculate',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-bulk-dynamic-pricing-without-a-plugin/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Change Product Price Based on Quantity Added to Cart ?','woocommerce'),
		'id'   => 'strive_wookc_quantity_based_pricing',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-always-display-single-variation-price/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Always Show Single Variation Price?','woocommerce'),
		'id'   => 'strive_wookc_single_varible_price',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-display-prices-now-save/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display Prices as Was, Now, Save for Simple Products on Sale ?','woocommerce'), 
		'id'   => 'single_wookc_simple_product_price_format',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-display-free-instead-0-00-empty-price/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display FREE Display if WooCommerce Product Price is Zero ?','woocommerce'),
		'id'   => 'strive_wookc_price_free_zero',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-display-cart-item-subtotal-coupon-discount/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Show price after coupon discount ?','woocommerce'),
		'id'   => 'strive_wookc_if_coupon_slash_item_subtotal',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-slashed-cart-subtotal-coupon-cart/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Show Slashed Original And Discounted Subtotal ?','woocommerce'),
		'id'   => 'strive_wookc_cart_subtotal_discount',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-force-cart-specific-amount-deposit/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Force Cart to Specific Amount Deposit?','woocommerce'),
		'id'   => 'strive_wookc_force_cart_for_to',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/disable-grouped-product-price-range-woocommerce/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Change the display of price range for Grouped Products?','woocommerce'),
		'id'   => 'strive_wookc_grouped_price_range_delete',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-display-discount-shop-loop-pages/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce'),
		'desc' => esc_html__('Display Discount Percentage?','woocommerce'),
		'id'   => 'strive_wookc_show_sale_percentage_loop',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-display-rrp-msrp-manufacturer-price/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Add RRP/MSRP Field Input Product Edit Page?','woocommerce'),
		'id'   => 'strive_wookc_add_RRP_to_products',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-display-regularsale-price-cart-table/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Display Sale Price In The Cart Table?','woocommerce'),
		'id'   => 'strive_wookc_change_cart_table_price_display',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-add-prefix-suffix-product-prices/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Add Prefix & Suffix To Product Prices?','woocommerce'),
		'id'   => 'strive_wookc_add_price_suffix',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-hide-prices-shop-category-pages/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Hide Prices from Shop & Category Pages?','woocommerce'),
		'id'   => 'strive_wookc_remove_prices',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-hide-price-add-cart-logged-users/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Hide Price & Add to Cart to Logged Out Users ?','woocommerce'),
		'id'   => 'strive_wookc_hide_price_addcart_not_logged_in',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/disable-variable-product-price-range-woocommerce/
	*/
	$price_options->add_field( array(
		'name' => esc_html__('Enable/Disable','woocommerce' ),
		'desc' => esc_html__('Disable Variation Price Range ?','woocommerce'),
		'id'   => 'strive_wookc_variation_price_format_min',
		'type' => 'checkbox',
	) );
	

	