<?php
	add_action( 'woocommerce_product_bulk_edit_start', 'strive_wookc_custom_field_bulk_edit_input' );          
	function strive_wookc_custom_field_bulk_edit_input() {
    ?>
    <div class="inline-edit-group">
      <label class="alignleft">
         <span class="title"><?php _e( 'Custom Field', 'woocommerce' ); ?></span>
         <span class="input-text-wrap">
            <input type="text" name="custom_field" class="text" value="">
         </span>
        </label>
    </div>
    <?php
}
 	add_action( 'woocommerce_product_bulk_edit_save', 'strive_Wookc_custom_field_bulk_edit_save' );
 	function strive_Wookc_custom_field_bulk_edit_save( $product ) {
    $post_id = $product->get_id();    
   	if ( isset( $_REQUEST['custom_field'] ) ) {
        $custom_field = $_REQUEST['custom_field'];
        update_post_meta( $post_id, 'custom_field', wc_clean( $custom_field ) );
    }
}