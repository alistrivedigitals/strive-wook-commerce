<?php
	add_action( 'woocommerce_before_shop_loop', 'strive_wookc_filter_by_tag', 31 ); 
	function strive_wookc_filter_by_tag() {      
   	if ( is_product_category() ) {      
    wc_product_dropdown_categories();   
   	} 
   	wc_enqueue_js( "
    $('#product_cat').change(function () {
       location.href = '/product-category/' + $(this).val();
    });
   " );
}