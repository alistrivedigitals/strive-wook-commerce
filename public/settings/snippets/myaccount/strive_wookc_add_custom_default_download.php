<?php
	add_filter( 'woocommerce_customer_get_downloadable_products', 'strive_wookc_add_custom_default_download', 9999, 1 );
	function strive_wookc_add_custom_default_download( $downloads ) {
   	$downloads[] = array(
      'product_name' => 'Description',
      'download_name' => 'Button Label',
      'download_url' => '/wp-content/uploads/filename.txt',
   	);
   	return $downloads;
}