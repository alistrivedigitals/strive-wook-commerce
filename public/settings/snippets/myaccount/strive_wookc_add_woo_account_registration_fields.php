<?php
	add_action( 'woocommerce_register_form', 'strive_wookc_add_woo_account_registration_fields' );
  	function strive_wookc_add_woo_account_registration_fields() { 
   	?>
    <p class="form-row validate-required" id="image" data-priority=""><label for="image" class="">Image (JPG, PNG, PDF)<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type='file' name='image' accept='image/*,.pdf' required></span></p>
   <?php
   }
 	add_filter( 'woocommerce_registration_errors', 'strive_wookc_validate_woo_account_registration_fields', 10, 3 );
 	function strive_wookc_validate_woo_account_registration_fields( $errors, $username, $email ) {
    if ( isset( $_POST['image'] ) && empty( $_POST['image'] ) ) {
        $errors->add( 'image_error', __( 'Please provide a valid image', 'woocommerce' ) );
    }
    return $errors;
	}
 	add_action( 'user_register', 'strive_wookc_save_woo_account_registration_fields', 1 );
	function strive_wookc_save_woo_account_registration_fields( $customer_id ) {
   	if ( isset( $_FILES['image'] ) ) {
      require_once( ABSPATH . 'wp-admin/includes/image.php' );
      require_once( ABSPATH . 'wp-admin/includes/file.php' );
      require_once( ABSPATH . 'wp-admin/includes/media.php' );
      $attachment_id = media_handle_upload( 'image', 0 );
      if ( is_wp_error( $attachment_id ) ) {
         update_user_meta( $customer_id, 'image', $_FILES['image'] . ": " . $attachment_id->get_error_message() );
      } else {
         update_user_meta( $customer_id, 'image', $attachment_id );
      }
   	}
	}
 	add_action( 'woocommerce_register_form_tag', 'strive_wookc_enctype_custom_registration_forms' );
	function strive_wookc_enctype_custom_registration_forms() {
   	echo 'enctype="multipart/form-data"';
}