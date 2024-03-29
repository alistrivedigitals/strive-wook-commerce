<?php
	add_action( 'wp_footer', 'strive_wookc_split_cart_by_az', 9999 );
   
	function strive_wookc_split_cart_by_az(){
    if ( ! is_cart() ) return; 
   	if ( WC()->cart->is_empty() ) return;
   	$i = 0;
   	$split = array();
   	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
      $cart_item_title = $cart_item['data']->get_title();
      $first_letter = substr( $cart_item_title, 0, 1 );
      if ( 0 == $i || ( 0 < $i && ! in_array( $first_letter, $split ) ) ) {
         $split[$i] = $first_letter;
      }
      $i++;
   	}
   	?>
   	<script type="text/javascript">
      jQuery(document).ready(function($){
         var indx = $('.woocommerce-cart-form__contents tbody tr').length;
         var rows = <?php echo json_encode($split); ?>;
         $.each(rows,function(key,value){   
            var newRow = $('<tr><td colspan="6">'+value+'</td></tr>');
               newRow.insertBefore($('.woocommerce-cart-form__contents tbody tr.woocommerce-cart-form__cart-item:nth('+key+')'));
     	});
    });
   </script>
   <?php  
 }