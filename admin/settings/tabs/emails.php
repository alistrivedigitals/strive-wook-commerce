<?php

	$tab = ( array(
		'id'           => 'strive_wookc_emails_page',
		'title'        => esc_html__( 'Emails options','woocommerce' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'strive_wookc_emails_page_keys',
		'parent_slug'  => 'strive_wookc_main_options',
	) );

	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$tab['display_cb'] = 'yourprefix_options_display_with_tabs';
	}
	
	$emails_options = new_cmb2_box($tab); 

	/*
		https://www.businessbloomer.com/woocommerce-remaining-stock-order-emails/
	*/
	
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Display Remaining Item Stock Quantity In New Order?','woocommerce' ),
		'id'   => 'strive_Wookc_item_remaining_stock',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-attach-file-pdf-emails/
	*/
	$emails_options->add_field( array(
		'name' => esc_html__('Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__('Add New Order Email now features a fancy PDF attachment ?', 'woocommerce' ),
		'id'   => 'strive_wookc_attach_pdf_to_emails',
		'type' => 'checkbox',
	) );


	/*
		https://www.businessbloomer.com/woocommerce-add-to-cc-bcc-order-email-recipients/
	*/
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'strive_wookc_order_completed_email_add_cc_bcc ?', 'woocommerce' ),
		'id'   => 'strive_wookc_order_completed_email_add_cc_bcc',
		'type' => 'checkbox',
	) );


	/*
		https://www.businessbloomer.com/woocommerce-hide-thanks-for-shopping-with-us-etc-emails/
	*/
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'strive_wookc_translate_woocommerce_strings_emails?', 'woocommerce' ),
		'id'   => 'strive_wookc_translate_woocommerce_strings_emails',
		'type' => 'checkbox',
	) );


	/*
		https://www.businessbloomer.com/woocommerce-send-custom-email/
	*/
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add Send a custom email when an order is marked with custom status?', 'woocommerce' ),
		'id'   => 'strive_wookc_status_custom_notification',
		'type' => 'checkbox',
	) );


	/*
		https://www.businessbloomer.com/woocommerce-send-custom-email/
	*/
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( '  disable a customer email if the order total is 0 ? ','woocommerce' ),
		'id'   => 'strive_wookc_disable_order_email_free',
		'type' => 'checkbox',
	) );


	/*
		https://www.businessbloomer.com/woocommerce-remove-permalink-product-order-table/
	*/
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Remove Link Product ? ', 'woocommerce' ),
		'id'   => 'strive_wookc_remove_permalink',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-css-woocommerce-emails/
	*/
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Customize Email CSS ? ', 'woocommerce' ),
		'id'   => 'strive_wookc_add_css_to_emails',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-remove-permalink-product-order-table/
	*/
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Remove Link Product ? ', 'woocommerce' ),
		'id'   => 'strive_wookc_change_processing_email_subject',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-payment-method-order-emails/
	*/
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add Payment Type To Order Emails in WooCommerce ?', 'woocommerce' ),
		'id'   => 'strive_wookc_display_payment_type_name_emails',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-extra-content-order-email/
	*/
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Remove Link Product ? ', 'woocommerce' ),
		'id'   => 'strive_wookc_add_content_specific_email',
		'type' => 'checkbox',
	) );
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable Checkbox ?', 'woocommerce' ),
		'desc' => esc_html__( 'Enter Your Message ? ', 'woocommerce' ),
		'id'   => 'strive_wookc_specific_email',
		'type' => 'text',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-custom-cron-job/
	*/
	$emails_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Send Email to Admin Every 3 Hours ? ', 'woocommerce' ),
		'id'   => 'strive_wookc_get_completed_orders_before_after',
		'type' => 'checkbox',
	) );
