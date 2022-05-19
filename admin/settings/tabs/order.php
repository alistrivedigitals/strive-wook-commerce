<?php
	
	$tab = ( array(
		'id'           => 'strive_wookc_order_options_page',
		'title'        => esc_html__( 'Order options','woocommerce' ),
		'object_types' => array('options-page'),
		'option_key'   => 'strive_wookc_order_options',
		'parent_slug'  => 'strive_wookc_main_options',
	) );

	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$tab['display_cb'] = 'yourprefix_options_display_with_tabs';
	}
	
	$order_options = new_cmb2_box($tab); 
	
	/*
		https://www.businessbloomer.com/woocommerce-let-customer-complete-order/
	*/
	$order_options->add_field( array(
		'name' => esc_html__('Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__('Add View Thank You Page to Order actions ?','woocommerce' ),
		'id'   => 'strive_wookc_redirect_thank_you_page_order_admin_actions',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-let-customer-complete-order/
	*/
	$order_options->add_field( array(
		'name' => esc_html__('Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__('Add Confirm Order Button to My Account Page ?','woocommerce' ),
		'id'   => 'strive_Wookc_confirm_order_my_account_orders_actions',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-set-checkout-field-value-order-creation/
	*/
	$order_options->add_field( array(
		'name' => esc_html__('Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__('Set a Checkout Field Value Programmatically upon WooCommerce order Creation ?','woocommerce'),
		'id'   => 'strive_wookc_set_singapore_city',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-custom-cron-job/
	*/
	$order_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__('Send Email to Admin Every 3 Hours On Complate Orders?'),
		'id'   => 'strive_wookc_woocommerce_send_email_digest',
		'type' => 'checkbox',
	) );

	/*
	https://www.businessbloomer.com/woocommerce-add-column-to-orders-table-wp-dashboard/
	*/

	$order_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Display an Additional Columns in The Orders Table ?','woocommerce' ),
		'id'   => 'strive_wookc_add_new_order_admin_list_column_content',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-set-custom-order-status-for-new-orders/
	*/

	$order_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Set Custom Order Status for New Orders?', 'woocommerce' ),
		'id'   => 'strive_wookc_register_custom_order_status',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-disable-customer-order-email-for-free-orders/
	*/
	$order_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Disable a customer email if the order total is zero?', 'woocommerce' ),
		'id'   => 'strive_wookc_disable_customer_order_email_if_free',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-calculate-sales-coupon-code/
	*/
	$order_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Show Total Sales by Coupon Code In Cooupon Page?', 'woocommerce' ),
		'id'   => 'strive_wookc_get_sales_by_coupon',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-update-user-meta-successful-order/
	*/
	$order_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Edit User Meta After Successful Checkout?', 'woocommerce' ),
		'id'   => 'strive_wookc_checkout_save_user_meta',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-order-notes-woocommerce-pdf-invoices/
	*/
	$order_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Displaying order notes on  PDF Packing Slips ?', 'woocommerce' ),
		'id'   => 'strive_wookc_add_note_to_customer_to_PDF_invoice_new',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-add-new-row-order-totals-email-thank-page/
	*/
	$order_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable', 'woocommerce' ),
		'desc' => esc_html__( 'Add a New Row to The WooCommerce Order Totals Table?', 'woocommerce' ),
		'id'   => 'strive_wookc_add_recurring_row_email',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-check-product-id-order/
	*/
	$order_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Check if Order Contains Product ID In Default Thankyou Page ?', 'woocommerce' ),
		'id'   => 'strive_wookc_check_order_product_id',
		'type' => 'checkbox',
	) );
	
