<?php
	/**
	 * Registers secondary options page, and set main item as parent.
	 */
	$tab = ( array(
		'id'           => 'strive_wookc_secondary_options_page',
		'title'        => esc_html__( 'Checkout options','woocommerce' ),
		'object_types' => array('options-page'),
		'option_key'   => 'strive_wookc_checkout_page_options',
		'parent_slug'  => 'strive_wookc_main_options',
	) );

	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$tab['display_cb'] = 'yourprefix_options_display_with_tabs';
	}
	
	$checkedout_options = new_cmb2_box($tab); 

	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Automatic Ragistered Guest checkout? ', 'woocommerce' ),
		'id'   => 'strive_wookc_register_guests',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-billing-address-order-pay/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Show Customer Billing/Shipping Addresses OrderPay Page? ', 'woocommerce' ),
		'id'   => 'strive_wookc_order_pay_billing_address',
		'type' => 'checkbox',
	) );
	/*
		https://www.businessbloomer.com/woocommerce-show-product-images-checkout-page/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add Product Featured Image Checkout Review Table? ', 'woocommerce' ),
		'id'   => 'strive_wookc_product_image_review_order_checkout',
		'type' => 'checkbox',
	) );
	/*
		https://www.businessbloomer.com/woocommerce-move-labels-inside-checkout-fields/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Display Field Labels Inside Input Boxes? ', 'woocommerce' ),
		'id'   => 'strive_wookc_labels_inside_checkout_fields',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-update-checkout-field-value-after-order/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Alter Order Field Value After An Order is Placed  display the phone number together with the country code' ),
		'id'   => 'strive_wookc_alter_checkout_fields_after_order',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-maxlength-minlength-checkout-fields/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Maximum And Minimum Length For Checkout Fields ?', 'woocommerce' ),
		'id'   => 'strive_wookc_checkout_fields_custom_attributes',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-dynamically-hide-show-checkout-field/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Hide a Checkout Field Based on Whether Another Field is Empty ? ', 'woocommerce' ),
		'id'   => 'strive_wookc_conditionally_hide_show_checkout_field',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-move-order-notes-checkout/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Moving order notes from below shipping to the billing form? ', 'woocommerce' ),
		'id'   => 'strive_wookc_custom_order_notes',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-show-checkout-even-if-cart-is-empty/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Checkout page empty Cartpage when no products are in the Cart?', 'woocommerce' ),
		'id'   => 'strive_wookc_checkout_page_empty',
		'type' => 'checkbox',
	) );	
	
	/*
		https://www.businessbloomer.com/woocommerce-rename-state-label-checkout/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Rename Change The State Labels? ', 'woocommerce' ),
		'id'   => 'strive_wookc_rename_state_province',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-add-upsell-area-checkout-page/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add Upsell show in select Area? ', 'woocommerce' ),
		'id'   => 'strive_wookc_checkout_add_on',
		'type' => 'checkbox',
	) );

	/* 	
IDHR	https://www.businessbloomer.com/woocommerce-display-required-field-errors-inline-checkout/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Display Required Fields Eror ? ','woocommerce' ),
		'id'   => 'strive_wookc_checkout_fields_in_label_error',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-add-checkout-fees-based-on-radio-button-choice-ajax/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add Checkout Fees Add On Custom Radio Buttons? ','woocommerce' ),
		'id'   => 'srive_wookc_checkout_radio_choice',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-rename-place-order-button-checkout/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Rename Placed Order Buttons Continue? ','woocommerce' ),
		'id'   => 'strive_wookc_rename_place_order_button_alt',
		'type' => 'checkbox',
	) );
	
	/* 
		https://www.businessbloomer.com/woocommerce-save-terms-conditions-user-acceptance-checkout/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Save Terms & Conditions acceptance upon checkout ? ','woocommerce' ),
		'id'   => 'strive_wookc_display_terms_conditions_acceptance',
		'type' => 'checkbox',
	) );
	//
	/* 
		
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( ' Add Content Under “Place Order” Button ? ','woocommerce' ),
		'id'   => 'strive_wookc_privacy_message_below_checkout_button',
		'type' => 'checkbox',
	) );

	/* 
		
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Turn Checkout Field Into a Drop-down ? ','woocommerce' ),
		'id'   => 'strive_wookc_address_field_dropdown',
		'type' => 'checkbox',
	) );

	/* 
		
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Send Checkout User Info to Email? ','woocommerce' ),
		'id'   => 'strive_wookc_email_with_twitter_username',
		'type' => 'checkbox',
	) );

	/* 
		
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( ' Deny Checkout if User Has Pending Orders ? ','woocommerce' ),
		'id'   => 'strive_wookc_deny_checkout_user_pending_orders',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-add-checkbox-hideshow-checkout-field/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add a Checkbox to Hide/Show a Custom Checkout Field? ','woocommerce' ),
		'id'   => 'strive_wookc_conditionally_hide_show_new_field',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-display-save-wp-user-field-e-g-user_url-checkout/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Display & save a default WordPress User Field ? ','woocommerce' ),
		'id'   => 'strive_wookc_checkout_field_update_user_meta',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-enable-payment-gateway-only-for-order-pay-checkout/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Remove The What is PayPal? ','woocommerce' ),
		'id'   => 'strive_wookc_remove_what_is_paypal',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-additional-acceptance-checkbox-checkout/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add a Privacy Policy Acceptance Checkbox ? ','woocommerce' ),
		'id'   => 'strive_wookc_add_checkout_privacy_policy',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-move-reorder-fields-checkout-page/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Move Billing/Shipping Checkout Fields Around? ','woocommerce' ),
		'id'   => 'strive_wookc_reorder_checkout_fields',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-add-fee-to-cart/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add Checkout Fees? ','woocommerce' ),
		'id'   => 'strive_wookc_add_checkout_fee',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-show-message-after-state-selection-checkout/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Show a notification based on Billing Country selection ? ','woocommerce' ),
		'id'   => 'strive_wookc_echo_notice_shipping',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-set-default-state-checkout-page/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add Checkout Fees? ','woocommerce' ),
		'id'   => 'strive_wookc_change_default_checkout_state',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-set-default-state-checkout-page/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Set Default Billing Country or State? ','woocommerce' ),
		'id'   => 'strive_wookc_change_default_checkout_state',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-add-fee-to-cart/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Add Checkout Fees? ','woocommerce' ),
		'id'   => 'bbloomer_add_checkout_fee',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/resolved-woocommerce-change-paypal-icon-checkout-page/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Change The PayPal Icon? ','woocommerce' ),
		'id'   => 'strive_wookc_replace_paypal_icon',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-disable-postcodezip-field-checkout-page/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Disable PostCode/Zip Field on the Checkout Page ? ','woocommerce' ),
		'id'   => 'strive_wookc_remove_billing_postcode_checkout',
		'type' => 'checkbox',
	) );

	/* 
		
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add Shipping Notices on Checkout Page? ','woocommerce' ),
		'id'   => 'strive_wookc_notice_shipping',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-view-thank-you-page-order-admin/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add “View Thank You Page” to “Order actions ? ','woocommerce' ),
		'id'   => 'strive_wookc_show_thank_you_page_order_admin_actions',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-sync-billing-name-wp-user-name/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Sync Billing First & Last Name With User First & Last Name?','woocommerce' ),
		'id'   => 'strive_wookc_sync_user_edit_profile_edit_billing_first_name',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-find-products-with-no-weight-wp-admin/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Find Products With No Weight ?','woocommerce' ),
		'id'   => 'strive_wookc_products_no_weight_admin',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-save-display-order-total-weight/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Display the order weight in orderpage?','woocommerce' ),
		'id'   => 'strive_wookc_delivery_weight_display_admin_order_meta',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-allow-to-pay-for-order-without-login/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Allow Customer to Pay for Order Without Login ?','woocommerce' ),
		'id'   => 'strive_wookc_order_pay_without_login',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-disable-tracking-if-order-failed-thank-you-page/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Disable thankyou Action If WooCommerce Order Failed?','woocommerce' ),
		'id'   => 'strive_wookc_tracking_exclude_failed_orders',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-add-privacy-policy-consent-my-account-registration/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( ' Add Privacy Policy Checkbox My Account Registration Form?','woocommerce' ),
		'id'   => 'strive_wookc_validate_privacy_registration',
		'type' => 'checkbox',
	) );


	/* 
		https://www.businessbloomer.com/woocommerce-disable-customer-order-email-for-free-orders/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Disable Customer Order Email for Free Orders?','woocommerce' ),
		'id'   => 'strive_wookc_disable_customer_order_email_if_free',
		'type' => 'checkbox',
	) );

	/* 
		https://www.businessbloomer.com/woocommerce-order-free-sample-single-product-page/
	*/
	$checkedout_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( ' Order a Free Sample Button In cart Productpage?','woocommerce' ),
		'id'   => 'strive_wookc_add_free_sample_add_cart',
		'type' => 'checkbox',
	) );





