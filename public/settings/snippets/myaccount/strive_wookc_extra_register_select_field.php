<?php
	add_action( 'woocommerce_register_form', 'strive_wookc_extra_register_select_field' );
	function strive_wookc_extra_register_select_field() {
     ?>
	 <p class="form-row form-row-wide">
	<label for="find_where"><?php _e( 'Where did you find us?', 'woocommerce' ); ?>  
	<span class="required">*</span></label>
	<select name="find_where" id="find_where" />
	    <option value="goo">Google</option>
	    <option value="fcb">Facebook</option>
	    <option value="twt">Twitter</option>
	</select>
	</p>
	<?php    
	}
	add_action( 'woocommerce_created_customer', 'strive_wookc_save_extra_register_select_field' );
 	function strive_wookc_save_extra_register_select_field( $customer_id ) {
	if ( isset( $_POST['find_where'] ) ) {
        update_user_meta( $customer_id, 'find_where', $_POST['find_where'] );
	}
	}
 	add_action( 'show_user_profile', 'strive_wookc_show_extra_register_select_field', 30 );
	add_action( 'edit_user_profile', 'strive_wookc_show_extra_register_select_field', 30 ); 
	add_action( 'woocommerce_edit_account_form', 'strive_wookc_show_extra_register_select_field', 30 );
   function strive_wookc_show_extra_register_select_field($user){ 
   	if (empty ($user) ) {
  	$user_id = get_current_user_id();
  	$user = get_userdata( $user_id );
  	}
   ?>    
	<p class="form-row form-row-wide">
	<label for=""><?php _e( 'Where did you find us?', 'woocommerce' ); ?>  <span class="required">*</span></label>
	<select name="find_where" id="find_where" />
    <option disabled value> -- select an option -- </option>
    <option value="goo" <?php if (get_the_author_meta( 'find_where', $user->ID ) == "goo") echo 'selected="selected" '; ?>>Google</option>
    <option value="fcb" <?php if (get_the_author_meta( 'find_where', $user->ID ) == "fcb") echo 'selected="selected" '; ?>>Facebook</option>
    <option value="twt" <?php if (get_the_author_meta( 'find_where', $user->ID ) == "twt") echo 'selected="selected" '; ?>>Twitter</option>
	</select>
	</p>
	<?php
	}
	add_action( 'personal_options_update', 'strive_wookc_save_extra_register_select_field_admin' );    
	add_action( 'edit_user_profile_update', 'strive_wookc_save_extra_register_select_field_admin' );   
	add_action( 'woocommerce_save_account_details', 'bbloomer_save_extra_register_select_field_admin' );
	   
	function bbloomer_save_extra_register_select_field_admin( $customer_id ){
	if ( isset( $_POST['find_where'] ) ) {
	   update_user_meta( $customer_id, 'find_where', $_POST['find_where'] );
	}
	}