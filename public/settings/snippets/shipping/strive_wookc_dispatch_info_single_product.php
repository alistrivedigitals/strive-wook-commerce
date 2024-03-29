<?php
	add_action( 'woocommerce_after_add_to_cart_form', 'strive_wookc_dispatch_info_single_product' );
    function strive_wookc_dispatch_info_single_product() {
   	date_default_timezone_set( 'Europe/London' );  
   // if FRI/SAT/SUN delivery will be MON
   if ( date( 'N' ) >= 5 ) {
      $del_day = date( "l jS F", strtotime( "next monday" ) );
      $order_by = "Monday";
   }   
   // if MON/THU after 4PM delivery will be TOMORROW
   elseif ( date( 'H' ) >= 16 ) {
      $del_day = date( "l jS F", strtotime( "tomorrow" ) );
      $order_by = "tomorrow";
   } 
   // if MON/THU before 4PM delivery will be TODAY
   else {
      $del_day = date( "l jS F", strtotime( "today" ) );
      $order_by = "today";
   }
 
   $html = "<br><div class='woocommerce-message' style='clear:both'>Order by 4PM {$order_by} for delivery on {$del_day}</div>";
   echo $html;
}