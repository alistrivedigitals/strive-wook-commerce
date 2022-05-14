<?php
	add_filter( 'woocommerce_loop_add_to_cart_link', 'strive_wookc_loop_add_cart_open_new_tab', 9999, 3 );
 	function strive_wookc_loop_add_cart_open_new_tab( $html, $product, $args ) {
   	return sprintf( '<a href="%s" data-quantity="%s" class="%s" %s target="_blank">%s</a>',
      esc_url( $product->add_to_cart_url() ),
      esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
      esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
      isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
      esc_html( $product->add_to_cart_text() )
   	);
}