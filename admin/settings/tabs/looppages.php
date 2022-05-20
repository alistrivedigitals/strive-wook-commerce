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
	
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( '','woocommerce'),
		'id'   => '',
		'type' => 'checkbox',
	) );

	/*
	
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( '','woocommerce'),
		'id'   => '',
		'type' => 'checkbox',
	) );

	/*
	
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( '','woocommerce'),
		'id'   => '',
		'type' => 'checkbox',
	) );

	/*
	
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( '','woocommerce'),
		'id'   => '',
		'type' => 'checkbox',
	) );

	/*
	
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( '','woocommerce'),
		'id'   => '',
		'type' => 'checkbox',
	) );

	/*
	
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( '','woocommerce'),
		'id'   => '',
		'type' => 'checkbox',
	) );

	/*
	
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( '','woocommerce'),
		'id'   => '',
		'type' => 'checkbox',
	) );


	/*
	
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( '','woocommerce'),
		'id'   => '',
		'type' => 'checkbox',
	) );

	/*
	
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( '','woocommerce'),
		'id'   => '',
		'type' => 'checkbox',
	) );

	/*
	
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( '','woocommerce'),
		'id'   => '',
		'type' => 'checkbox',
	) );

	/*
	
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( '','woocommerce'),
		'id'   => '',
		'type' => 'checkbox',
	) );
