<?php

	$tab = ( array(
		'id'           => 'strive_wookc_featureimage_page',
		'title'        => esc_html__( 'FeatureImage options','woocommerce' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'strive_wookc_featureimage_options_keys',
		'parent_slug'  => 'strive_wookc_main_options',
	) );

	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$tab['display_cb'] = 'yourprefix_options_display_with_tabs';
	}
	
	$image_options = new_cmb2_box($tab);

	/*
		https://www.businessbloomer.com/woocommerce-show-product-images-checkout-page/
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Add Product Featured Image In To Checkout Page','woocommerce'),
		'id'   => 'strive_wookc_product_image_review_order_checkout',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-blocks-hide-images-etc-from-product-grid-block/
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( ' Hide Images From Product Grid Block ?','woocommerce'),
		'id'   => 'strive_wookc_remove_product_grid_block_inmage',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-switch-image-background-on-color-variation-selection/
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( 'Switch Featured Image Background Color On Color Variation Select ?','woocommerce'),
		'id'   => 'strive_wookc_switch_image_background_variable_colors',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/tag/featured-image/
	*/
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( ' Add Content Below the Gallery Images ?','woocommerce'),
		'id'   => 'strive_wookc_add_below_prod_gallery',
		'type' => 'checkbox',
	) );

	/*
		https://www.businessbloomer.com/woocommerce-show-sold-archiveproduct-page/
	*/	
	$image_options->add_field( array(
		'name' => esc_html__( 'Enable/Disable','woocommerce' ),
		'desc' => esc_html__( ' Show WooCommerce Sold Out Badge ?','woocommerce'),
		'id'   => 'strive_wookc_display_sold_out_loop_woocommerce',
		'type' => 'checkbox',
	) );
	