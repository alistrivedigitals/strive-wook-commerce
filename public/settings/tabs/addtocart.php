 <?php
	$strive_wookc_add_to_cart = get_option( 'strive_wookc_add_to_cart' );
	
    if (isset($strive_wookc_add_to_cart['strive_wookc_hide_add_cart_if_already_purchased']) && $strive_wookc_add_to_cart['strive_wookc_hide_add_cart_if_already_purchased'] == "on"){
	   include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_hide_add_cart_if_already_purchased.php';
	}
    
    if (isset($strive_wookc_add_to_cart['strive_wookc_product_max_one_cart_stock_low']) && $strive_wookc_add_to_cart['strive_wookc_product_max_one_cart_stock_low'] == "on"){
		include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_product_max_one_cart_stock_low.php';
	}

    if (isset($strive_wookc_add_to_cart['strive_wookc_remove_product_from_cart_programmatically']) && $strive_wookc_add_to_cart['strive_wookc_remove_product_from_cart_programmatically'] == "on"){
        include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_remove_product_from_cart_programmatically.php';
    }
	
    if (isset($strive_wookc_add_to_cart['strive_wookc_hide_mini_cart_widget']) && $strive_wookc_add_to_cart['strive_wookc_hide_mini_cart_widget'] == "on"){
        include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_hide_mini_cart_widget.php';
    }


    if (isset($strive_wookc_add_to_cart['strive_wookc_add_product_to_cart_on_page_id_load']) && $strive_wookc_add_to_cart['strive_wookc_add_product_to_cart_on_page_id_load'] == "on"){
        include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_add_product_to_cart_on_page_id_load.php';
    }
    
  
    if (isset($strive_wookc_add_to_cart['strive_wookc_custom_add_cart_button_loop']) && $strive_wookc_add_to_cart['strive_wookc_custom_add_cart_button_loop'] == "on"){
        include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_custom_add_cart_button_loop.php';
    }
    
    if (isset($strive_wookc_add_to_cart['strive_wookc_add_symbol_add_cart_button_single']) && $strive_wookc_add_to_cart['strive_wookc_add_symbol_add_cart_button_single'] == "on"){
        include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_add_symbol_add_cart_button_single.php';
    }
    

    if (isset($strive_wookc_add_to_cart['strive_wookc_enable_holiday_enable_message']) && $strive_wookc_add_to_cart['strive_wookc_enable_holiday_enable_message'] == "on"){
        include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_enable_holiday_enable_message.php';
    }
    

    if (isset($strive_wookc_add_to_cart['strive_wookc_redirect_checkout_add_cart']) && $strive_wookc_add_to_cart['strive_wookc_redirect_checkout_add_cart'] == "on"){
        include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_redirect_checkout_add_cart.php';
    }
    
    
     if (isset($strive_wookc_add_to_cart['strive_wookc_view_product_button']) && $strive_wookc_add_to_cart['strive_wookc_view_product_button'] == "on"){
        include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_view_product_button.php';

    }
    
    if (isset($strive_wookc_add_to_cart['strive_wookc_add_product_cart_automatically']) && $strive_wookc_add_to_cart['strive_wookc_add_product_cart_automatically'] == "on"){
        include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/settings/snippets/addtocart/strive_wookc_add_product_cart_automatically.php';

    }

    





