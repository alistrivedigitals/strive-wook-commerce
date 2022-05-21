<?php
	add_action( 'add_meta_boxes_product', 'strive_wookc_remove_metaboxes_edit_product', 9999 );
 	function strive_wookc_remove_metaboxes_edit_product() {
 	remove_meta_box( 'postexcerpt', 'product', 'normal' );
 	remove_meta_box( 'tagsdiv-product_tag', 'product', 'side' );
 
}