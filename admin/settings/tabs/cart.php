<?php
	/**
	 * Registers main options page menu item and form.
	 */
	$cart_page_options = new_cmb2_box( array(
		'id'           => 'strive_wookc_main_options_page',
		'title'        => esc_html__( 'Cart Options', 'woocommerce' ),
		'object_types' => array( 'options-page' ),

		/*
		 * The following parameters are specific to the options-page box
		 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
		 */
		'option_key'      		=> 'strive_wookc_main_options', // The option key and admin menu page slug.
		'icon_url'        		=> 'dashicons-plugins-checked', // Menu icon. Only applicable if 'parent_slug' is left empty.
		'menu_title'      		=> esc_html__( 'WOOKC_PLUGIN', 'woocommerce' ), // Falls back to 'title' (above).
	) );

	/*
		https://www.businessbloomer.com/woocommerce-retain-checkout-data-reload/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
	    'desc' => esc_html__( 'Keep Billing, Shipping and Custom Field Data WooCommerce Checkout Reload', 'woocommerce'),
		'id'   => 'strive_wookc_custome_field_data_checkout_reload',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-get-total-spent-by-customer/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Do you want to label your purchases over items?', 'woocommerce' ),
		'id'   => 'strive_wookc_user_label_content_data',
		'type' => 'checkbox',
	) );
	/* 
		https://www.businessbloomer.com/woocommerce-exclude-product-from-discount-coupons/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Disable All Coupons for a Single Product ID  Checkout Page', 'woocommerce' ),
		'id'   => 'strive_wookc_disable_coupon_for_single_page',
		'type' => 'checkbox',
	) );

	/* 
	`	https://www.businessbloomer.com/woocommerce-show-stock-cart-page/	
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Show the product stock in a cart page? ', 'woocommerce' ),
		'id'   => 'strive_wookc_show_product_quantity',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-how-to-alter-cart-items-count/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Total Item Show the Mini-Card Header? ', 'woocommerce' ),
		'id'   => 'strive_wookc_custome_cart_count_item',
		'type' => 'checkbox',
	) );	

	/* 
		https://www.businessbloomer.com/woocommerce-show-sku-cart-page/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Display SKU Below Item Name in Cartpage,Checkoutpage,Order,Emails ', 'woocommerce' ),
		'id'   => 'strive_wookc_sku_added_pages',
		'type' => 'checkbox',
	) );	

	/* 
		https://www.businessbloomer.com/woocommerce-how-to-alter-cart-items-count/	
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Alter Product Price Programmatically Set?', 'woocommerce' ),
		'id'   => 'strive_wookc_set_price_programatically',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-sync-product-quantities-cart/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Product Id Syns The Product Quantity', 'woocommerce' ),
		'id'   => 'strive_wookc_Syns_the_product_Quantity',
		'type' => 'checkbox',
	) );
	///
	/* 
		https://www.businessbloomer.com/woocommerce-set-min-purchase-amount-for-specific-product/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Set Minimum Perchase Amount for Specific Product', 'woocommerce' ),
		'id'   => 'strive_wookc_min_pechase_amount',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-split-cart-table-az-headings/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Split Cart by A>Z Letter Display', 'woocommerce'),
		'id'   => 'strive_wookc_cart_letters_display',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-show-checkout-even-if-cart-is-empty/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Show Checkout Even Cart is Empty', 'woocommerce'),
		'id'   => 'strive_wookc_cartpage_empty',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-sync-product-quantities-cart/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Admin Remove The Product Programmatically', 'woocommerce'),
		'id'   => 'strive_wooks_remove_product_programmatically',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-bulk-dynamic-pricing-without-a-plugin/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Dynamically Change The Quantity Bese Price  ', 'woocommerce' ),
		'id'   => 'strive_wooks_quantity_based_pricing',
		'type' => 'checkbox',
	) );
////
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Add a Link in Continued Shopping', 'woocommerce' ),
		'id'   => 'strive_wooks_change_continue_shopping',
		'type' => 'checkbox',
	) );

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Order Noticed The Delivery Time And Date', 'woocommerce' ),
		'id'   => 'strive_wooks_order_notices_show',
		'type' => 'checkbox',
	) );

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Adding a Secure Badge On The WooCommerce Checkout Page', 'woocommerce' ),
		'id'   => 'strive_wookc_trust_place_order',
		'type' => 'checkbox',
	) );

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Add The Scarcity Message On The WooCommerce Single Product Page', 'woocommerce' ),
		'id'   => 'strive_wookc_edit_left_stock',
		'type' => 'checkbox',
	) );

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Showing Products On Sale On The WooCommerce Thankyou page', 'woocommerce' ),
		'id'   => 'strive_wookc_thankyou_upsell',
		'type' => 'checkbox',
	) );
	//
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Move Coupon Form Under the processtocheckout Button', 'woocommerce' ),
		'id'   => 'strive_wookc_display_coupon_form_proceed_checkout',
		'type' => 'checkbox',
	) );

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'do not count hidden products?', 'woocommerce' ),
		'id'   => 'strive_wookc_exclude_hidden_minicart_counter',
		'type' => 'checkbox',
	) );

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Hide a Minicart Dropdown Widget? ', 'woocommerce' ),
		'id'   => 'strive_wookc_mini_cart_dropdown',
		'type' => 'checkbox',
	) );

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Product Added To Cart Only When a User Like You Visits a Specific WordPress Page ID', 'woocommerce' ),
		'id'   => 'strive_wookc_add_product_to_cart_on_page_id_load',
		'type' => 'checkbox',
	) );

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Do You Want To Hide Shipping Calculator', 'woocommerce' ),
		'id'   => 'strive_wookc_shipping_calculator_field',
		'type' => 'checkbox',
	) );
	//
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Automatic Cart-Update Message Print? ', 'woocommerce' ),
		'id'   => 'strive_wookc_updated_message_label',
		'type' => 'checkbox',
	) );

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Sort WooCommerce Cart Products Alphabetically?', 'woocommerce' ),
		'id'   => 'strive_wookc_sort_cart_items_alphabetically',
		'type' => 'checkbox',
	) );

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Do You Want To Hide Shipping Calculator', 'woocommerce' ),
		'id'   => 'strive_wookc_check_category_in_cart',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-display-cart-item-subtotal-coupon-discount/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Display Cart Item Subtotal After Coupons Discount?', 'woocommerce' ),
		'id'   => 'strive_wookc_coupon_slash_item_subtotal',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-slashed-cart-subtotal-coupon-cart/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Show Slashed Original And Discount In Subtotal?', 'woocommerce' ),
		'id'   => 'strive_wookc_slash_cart_subtotal_if_discount',
		'type' => 'checkbox',
	) );
//
	/* 
		https://www.businessbloomer.com/woocommerce-display-0-00-amount-free-shipping-rates/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Display 0 Amount For Free Shipping Rate?', 'woocommerce' ),
		'id'   => 'strive_wookc_add_0_to_shipping_label',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-display-categories-product-name-cart/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Disable Category Under Products Name?', 'woocommerce' ),
		'id'   => 'strive_wookc_cart_item_category',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-change-add-cart-quantity-drop/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Add To Cart Quantity Into Dropdown List?', 'woocommerce' ),
		'id'   => 'strive_wookc_select_dropdownlist',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-easily-check-product-id-cart/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Easily Check if Product ID is Contained in the Cart Or Not ?', 'woocommerce' ),
		'id'   => 'strive_wookc_find_product_in_cart',
		'type' => 'checkbox',
	) );
	
	/* 
		https://www.businessbloomer.com/woocommerce-hide-shipping-local-pickup-selected/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Hide The Shipping Fields Whem Localpickup Is Selected?' ),
		'id'   => 'strive_wookc_disable_shipping_local_pickup',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-force-cart-specific-amount-deposit/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( ' Force Cart to Specific Amount Deposit 100 ?', 'woocommerce' ),
		'id'   => 'strtive_wookc_force_cart_to',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-display-separate-cart-items-product-quantity-1/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Display Seprate Cart Item For Product Quantity 1 or more ?', 'woocommerce' ),
		'id'   => 'strive_wookc_split_product_individual_cart_items',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-define-add-cart-min-max-incremental-quantities/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Set Min And Maximum Start Value Already Increment?', 'woocommerce' ),
		'id'   => 'strive_wookc_woocommerce_quantity_changes',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-poa-call-price-button-price-empty/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Display POA Enquiry Button If Price Empty?', 'woocommerce' ),
		'id'   => 'strive_wookc_poa_and_enquiry_cf7_woocommerce',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-see-whats-inside-cart-array-print_r/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Print WooCommerce Cart Array Im Cartpage?', 'woocommerce' ),
		'id'   => 'strive_wookc_print_cart_array',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-hide-hidden-products-cart-order-emails/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Hide Hidden Product From WooCommerce Cart?', 'woocommerce' ),
		'id'   => 'strive_wookc_hide_hidden_product_from',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-display-weight-cart-checkout/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Show Total Weight In Display?', 'woocommerce' ),
		'id'   => 'strive_wookc_print_cart_weight',
		'type' => 'checkbox',

	) );


	/* 
		https://www.businessbloomer.com/woocommerce-buy-1-product-add-free-product-cart-programmatically/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Add BUY ONE GET ONE “Product Gift” to Cart if Product ID is Added to Cart?', 'woocommerce' ),
		'id'   => 'strive_wookc_add_gift_if_id_in_cart',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-deny-checkout-based-cart-weight/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Deny WooCommerce Checkout Processing if Cart Weight More Then Target? ', 'woocommerce' ),
		'id'   => 'strive_wookc_deny_checkout_if_weight',
		'type' => 'checkbox',
	) );
	//..
	/* 
		https://www.businessbloomer.com/woocommerce-add-content-empty-cart-page/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Add Content to the Empty Cart Page?', 'woocommerce' ),
		'id'   => 'strive_wookc_add_content_empty_cart',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-change-coupon-code-message-cart-checkout/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Have a Coupon Message Displayed?', 'woocommerce' ),
		'id'   => 'strive_wookc_have_coupon_message',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-deny-checkout-based-cart-weight/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Add Content to the Empty Cart Page? > ', 'woocommerce' ),
		'id'   => 'strive_wookc_add_content_empty_cart',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-display-regularsale-price-cart-table/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Display Sale Price in the CartTable WooCommerce Cart?', 'woocommerce' ),
		'id'   => 'strive_wookc_change_cart_table_price_display',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-display-total-discount-savings-cart/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Show How Much Customer Saved ?', 'woocommerce' ),
		'id'   => 'strive_wookc_show_total_discount_cart_checkout',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-define-a-minimum-order-amount/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Define a Minimum Order Amount and Show Error Messages?','woocommerce'),
		'id'   => 'strive_wookc_wc_minimum_order_amount',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-add-item-to-cart-programmatically/
	*/

	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Add Product to WooCommerce Cart Automatically On Visit?', 'woocommerce' ),
		'id'   => 'strive_wookc_add_product_to_cart_automatically',
		'type' => 'checkbox',
	) );
	/* 
		https://www.businessbloomer.com/woocommerce-disable-shipping-variation-id-cart/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( ' Disable Shipping Rates if Variation ID is in the Cart ?', 'woocommerce'),
		'id'   => 'strive_wookc_unset_woocommerce_shipping_methods',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-display-regularsale-price-cart-table/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Change “Return to Shop” Button Link?', 'woocommerce' ),
		'id'   => 'strive_wookc_change_return_shop_url',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-allow-1-product-cart/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( ' Limit the Cart to Max One Product?', 'woocommerce' ),
		'id'   => 'strive_wookc_only_one_in_cart',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-apply-coupon-programmatically-product-cart/
	*/
	$cart_page_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce'),
		'desc' => esc_html__( 'Apply a Coupon Programmatically if a Product is in the Cart?', 'woocommerce' ),
		'id'   => 'strive_wookc_apply_matched_coupons',
		'type' => 'checkbox',
	) );

	