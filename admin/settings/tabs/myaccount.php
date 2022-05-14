<?php
	/**
	 * Registers tertiary options page, and set main item as parent.
	 */
	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$tab['display_cb'] = 'yourprefix_options_display_with_tabs';
	}
	
	$myaccount_options = new_cmb2_box( array(
		'id'           => 'strive_wookc_tertiary_options_page',
		'title'        => esc_html__( 'Myaccount options', 'woocommerce' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'strive_wookc_myaccount_options_keys',
		'parent_slug'  => 'strive_wookc_main_options',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-let-customer-complete-order/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Confirm Order Button On click the order is automatically marked as completed? ','woocommerce'),
		'id'   => 'strive_wookc_confirm_order_my_account_orders_actions',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-sync-billing-name-wp-user-name/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Sync Billing First & Last Name With User First & Last Name? ','woocommerce'),
		'id'   => 'strive_wookc_sync_edit_billing_first_name',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-login-redirect-previous-url/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Login Redirect to Previous URL ?','woocommerce'),
		'id'   => 'strive_wookc_actual_referrer',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-redirect-customer-to-url-upon-login/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Customer Login, Redirect to Custom URL MyAccount Page?','woocommerce'),
		'id'   => 'strive_wookc_customer_login_redirect',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-add-a-custom-download-file-my-account/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Add a Downloadable File for All Users ?','woocommerce'),
		'id'   => 'strive_wookc_add_custom_default_download',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-file-upload-my-account-registration-form/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Add File Upload Field in MyAccount RagisterForm ?','woocommerce'),
		'id'   => 'strive_wookc_add_woo_account_registration_fields',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-deny-automatic-login-upon-registration-my-account/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Automatic Login Upon After Registration? ','woocommerce'),
		'id'   => 'strive_wookc_automatic_login',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-add-privacy-policy-consent-my-account-registration/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Add Privacy Policy Checkbox ? ','woocommerce'),
		'id'   => 'strive_wookc_registration_privacy_policy',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-merge-account-tabs/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Merge Two My Account Tabs ? ','woocommerce'),
		'id'   => 'strive_wookc_remove_address_my_account',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-add-select-field-account-register-form/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( ' Add Select Field to My Account Register Form ? ','woocommerce'),
		'id'   => 'strive_wookc_extra_register_select_field',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-change-user-role-new-customers/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce'),
		'desc' => esc_html__( 'Change WooCommerce User Role Upon Registration?','woocommerce'),
		'id'   => 'strive_wookc_assign_custom_role',
		'type' => 'checkbox',
	) );
	

	/*
		https://www.businessbloomer.com/woocommerce-add-first-last-name-account-register-form/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( ' Add First & Last Name My Account Registration Form ? ','woocommerce'),
		'id'   => 'strive_wookc_add_name_woo_account_registration',
		'type' => 'checkbox',
	) );
	
	/*
		https://www.businessbloomer.com/woocommerce-show-extra-content-my-account-page/
	*/
	$myaccount_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Add Content To My Account Register ? ','woocommerce'),
		'id'   => 'strive_wookc_add_login_text',
		'type' => 'checkbox',
	) );
	
	