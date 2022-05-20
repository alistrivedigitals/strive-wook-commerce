<?php
  $strive_wookc_featureimage_options_keys = get_option( 'strive_wookc_featureimage_options_keys');
	if (isset($strive_wookc_featureimage_options_keys['strive_wookc_product_image_review_order_checkout']) && $strive_wookc_featureimage_options_keys['strive_wookc_product_image_review_order_checkout'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_product_image_review_order_checkout.php';	
	}

	if (isset($strive_wookc_featureimage_options_keys['strive_wookc_remove_product_grid_block_image']) && $strive_wookc_featureimage_options_keys['strive_wookc_remove_product_grid_block_image'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_remove_product_grid_block_image.php';	
	}

	if (isset($strive_wookc_featureimage_options_keys['strive_wookc_add_below_prod_gallery']) && $strive_wookc_featureimage_options_keys['strive_wookc_add_below_prod_gallery'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_add_below_prod_gallery.php';	
	}

	if (isset($strive_wookc_featureimage_options_keys['strive_wookc_display_sold_out_loop_woocommerce']) && $strive_wookc_featureimage_options_keys['strive_wookc_display_sold_out_loop_woocommerce'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_display_sold_out_loop_woocommerce.php';	
	}

	
	if (isset($strive_wookc_featureimage_options_keys['strive_wookc_display_sold_out_loop_woocommerce']) && $strive_wookc_featureimage_options_keys['strive_wookc_display_sold_out_loop_woocommerce'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/checkout/strive_wookc_display_sold_out_loop_woocommerce.php';	
	}

