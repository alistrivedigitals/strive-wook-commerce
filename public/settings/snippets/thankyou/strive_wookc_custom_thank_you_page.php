<?php
	add_action( 'woocommerce_thankyou', 'strive_wookc_custom_thank_you_page', 5 );
  function strive_wookc_custom_thank_you_page() {
  $page_id = 540;
  $page_object = get_post( $page_id );
  echo $page_object->post_content;
}