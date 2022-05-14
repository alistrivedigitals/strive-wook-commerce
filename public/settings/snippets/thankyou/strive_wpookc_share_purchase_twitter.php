<?php
	add_action( 'woocommerce_thankyou', 'strive_wpookc_share_purchase_twitter', 5 );
	function strive_wpookc_share_purchase_twitter( $order_id ) {
 	$string = 'I%20just%20became%20an%20official%20Business%20Bloomer%20Supporter!%20Check%20out%20the%20benefits%20at:%20';
 	$order = new WC_Order( $order_id );
	$items = $order->get_items();
	foreach ( $items as $item ) {
   	$product_id = $item['product_id'];
   	$product_name = $item['name'];
   	$product_url = get_permalink( $product_id );
	}
 	$barmada = array( "15", "32", "16" );
	if ( in_array( $product_id, $barmada ) ) {
 	echo '<h2 class="twitter-prod-h2">Share your purchase with the WooCommerce community!</h2>';
   	echo '<div class="twitter-prod-wrapper"><div class="twitter-prod-div col2-set addresses">';
   	echo '<div class="col-1">';
   	if ( has_post_thumbnail( $product_id ) ) {
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' ); 
      echo '<img width="100" height="100" src="' . $image[0] . '" class="alignleft twitter-prod-img">';
   	}
   	echo '<div class="twitter-prod-name">' . $product_name . '</div>';
   	echo '<div class="twitter-prod-url"><small>' . $product_url . '</small></div>';
   	echo '</div><div class="col-2">';
 	// GENERATE THE CLICK TO TWEET A HREF, NOTE "$string"
   	?>
      <a class="button twitter-prod-button" target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo $string ?>&url=https://businessbloomer.com/bloomer-armada/&hashtags=BloomerArmada,WooCommerce"><img width="25" height="25" src="https://businessbloomer.com/wp-content/uploads/2017/03/Twitter_Logo_White_On_Image.png" class="twitter-prod-tw-icon"> Share your purchase on Twitter &rarr; </a>
      </div>
      </div>
      </div>
   	<?php
	}
}