<?php
	
// 	add_filter( 'woocommerce_gateway_icon', 'strive_wookc_remove_what_is_paypal', 10, 2 );
//  	function strive_wookc_remove_what_is_paypal( $icon_html, $gateway_id ) {	
// 	if( 'paypal' == $gateway_id ) {
//    	$icon_html = '<img src="/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png" alt="PayPal Acceptance Mark">';	
//     }
// 	return $icon_html;
// }
//     public function get_icon() {
//     $icon_html = '';
//     $icon      = (array) $this->get_icon_image( WC()->countries->get_base_country() );
//     foreach ( $icon as $i ) {
//     $icon_html .= '<img src="' . esc_attr( $i ) . '" alt="' . esc_attr__( 'PayPal Acceptance Mark', 'woocommerce' ) . '" />';
//     }
//     $icon_html .= sprintf( '<a href="%1$s" class="about_paypal" onclick="javascript:window.open(\'%1$s\',\'WIPaypal\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700\'); return false;" title="' . esc_attr__( 'What is PayPal?', 'woocommerce' ) . '">' . esc_attr__( 'What is PayPal?', 'woocommerce' ) . '</a>', esc_url( $this->get_icon_url( WC()->countries->get_base_country() ) ) );
//    return apply_filters( 'woocommerce_gateway_icon', $icon_html, $this->id );
// }