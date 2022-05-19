<?php
	
	$strive_wookc_category_options_key = get_option( 'strive_wookc_category_options_key');
	if (isset($strive_wookc_category_options_key['strive_wookc_hide_category_image']) && $strive_wookc_category_options_key['strive_wookc_hide_category_image'] == "on"){	
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/category/strive_wookc_hide_category_image.php';	
	}
	
	if (isset($strive_wookc_category_options_key['strive_wookc_filter_by_tag']) && $strive_wookc_category_options_key['strive_wookc_filter_by_tag'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/category/strive_wookc_filter_by_tag.php';	
	}

	if (isset($strive_wookc_category_options_key['strive_wookc_wp_editor_add']) && $strive_wookc_category_options_key['strive_wookc_wp_editor_add'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/category/strive_wookc_wp_editor_add.php';	
	}

	if (isset($strive_wookc_category_options_key['strive_wookc_hide_shop_page_title']) && $strive_wookc_category_options_key['strive_wookc_hide_shop_page_title'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/category/strive_wookc_hide_shop_page_title.php';	
	}

	if (isset($strive_wookc_category_options_key['strive_wookc_no_product_found']) && $strive_wookc_category_options_key['strive_wookc_no_product_found'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/category/strive_wookc_no_product_found.php';	
	}

	if (isset($strive_wookc_category_options_key['strive_wookc_change_product_permalink_shop']) && $strive_wookc_category_options_key['strive_wookc_change_product_permalink_shop'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/category/strive_wookc_change_product_permalink_shop.php';	
	}

	
	if (isset($strive_wookc_category_options_key['strive_wookc_show_all_subcats']) && $strive_wookc_category_options_key['strive_wookc_show_all_subcats'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/category/strive_wookc_show_all_subcats.php';	
	}

	if (isset($strive_wookc_category_options_key['strive_avada_show_social_sharing']) && $strive_wookc_category_options_key['strive_avada_show_social_sharing'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/category/strive_avada_show_social_sharing.php';	
	}

	if (isset($strive_wookc_category_options_key['strive_Wookc_hide_current_cat_prod_cat_widget']) && $strive_wookc_category_options_key['strive_Wookc_hide_current_cat_prod_cat_widget'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/category/strive_Wookc_hide_current_cat_prod_cat_widget.php';	
	}

	