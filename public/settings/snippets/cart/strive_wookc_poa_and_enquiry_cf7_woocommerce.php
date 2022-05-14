<?php
	add_filter( 'woocommerce_empty_price_html', 'strive_wookc_poa_and_enquiry_cf7_woocommerce' );
       function strive_wookc_poa_and_enquiry_cf7_woocommerce() {
	   $html = '<div class="poa">POA</div>';
	   $html .= '<button type="submit" id="trigger_cf" class="single_add_to_cart_button button alt"> Request Price Now </button>';
	   $html .=  '<div id="product_inq" style="display:none">';
	   $html .= do_shortcode('[paste_your_contact_form_7_shortcode_here]');
	   $html .=  '</div>';
	   return $html;
}