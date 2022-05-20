<?php
	add_filter( 'woocommerce_email_styles', 'strive_wookc_add_css_to_emails', 9999, 2 );
 	function strive_wookc_add_css_to_emails( $css, $email ) { 
   	$css .= '
      h2 { color: red }
      h3 { font-size: 30px }
   	';
   	return $css;
	}	
	add_filter( 'woocommerce_email_styles', 'strive_wookc_add_css_to_new_order_email', 9999, 2 );
 	function strive_wookc_add_css_to_new_order_email( $css, $email ) { 
   	if ( $email->id == 'new_order' ) {
      $css .= '
         h2 { color: red }
         h3 { font-size: 30px }
      ';
   	}
   	return $css;
}