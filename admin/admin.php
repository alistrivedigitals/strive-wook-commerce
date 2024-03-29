<?php
	if ( file_exists( STRIVE_WOOKC_PLUGIN_INCLUDES_DIR . '/CMB2/init.php' ) ) {
		require_once STRIVE_WOOKC_PLUGIN_INCLUDES_DIR . '/CMB2/init.php';

		/**
		 * Hook in and register a metabox to handle a theme options page and adds a menu item.
		 */
		function strive_wookc_register_main_options_metabox() {
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/option_functions.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/cart.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/checkout.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/addtocart.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/myaccount.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/category.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/price.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/emails.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/shoppage.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/thankyou.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/order.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/shipping.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/featureimage.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/coupon.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/looppages.php';
			include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/settings/tabs/adminpage.php';
		}	

		add_action( 'cmb2_admin_init', 'strive_wookc_register_main_options_metabox' );
	}
?> 