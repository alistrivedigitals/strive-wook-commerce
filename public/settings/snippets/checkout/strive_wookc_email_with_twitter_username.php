<?php
 add_action( 'woocommerce_checkout_update_user_meta', 'strive_wookc_email_with_twitter_username' );
 function bbloomer_checkout_field_update_user_meta( $user_id ) { 
 if ( $user_id && $_POST['twitter'] ) {
   strive_wookc_email_with_twitter_username( $_POST['twitter'] );
    
}
    
}
 
function strive_wookc_email_with_twitter_username( $username ) {
 
      $to = 'info@businessbloomer.com';
       $subject = 'Reminder: New Business Bloomer Fan to Thank on Twitter';
       $message = 'Hey Rodolfo, please remember to send a Tweet to: ' . $username;
     
      wp_mail( $to, $subject, $message );
    
}
