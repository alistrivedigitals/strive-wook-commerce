<?php

/**
	 * Registers main options page menu item and form.
	 */
	$wookc_options = new_cmb2_box( array(
		'id'           => 'strive_wookc_main_options_page',
		'title'        => esc_html__( 'Cart options', 'woocommerce' ),
		'object_types' => array( 'options-page' ),

		/*
		 * The following parameters are specific to the options-page box
		 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
		 */
		'option_key'      		=> 'strive_wookc_main_in_options', // The option key and admin menu page slug.
		'icon_url'        		=> 'dashicons-plugins-checked', // Menu icon. Only applicable if 'parent_slug' is left empty.
		'menu_title'      		=> esc_html__( 'Wookc setting', 'woocommerce' ), // Falls back to 'title' (above).
	) );
