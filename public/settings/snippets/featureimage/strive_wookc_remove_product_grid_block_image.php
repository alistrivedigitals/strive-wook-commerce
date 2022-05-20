<?php
	protected function render_product( $product ) {
   	$data = (object) array(
      'permalink' => esc_url( $product->get_permalink() ),
      'image'     => $this->get_image_html( $product ),
      'title'     => $this->get_title_html( $product ),
      'rating'    => $this->get_rating_html( $product ),
      'price'     => $this->get_price_html( $product ),
      'badge'     => $this->get_sale_badge_html( $product ),
      'button'    => $this->get_button_html( $product ),
   	);
 
   	return apply_filters(
      'woocommerce_blocks_product_grid_item_html',
      "<li class=\"wc-block-grid__product\">
         <a href=\"{$data->permalink}\" class=\"wc-block-grid__product-link\">
            {$data->image}
            {$data->title}
         </a>
         {$data->badge}
         {$data->price}
         {$data->rating}
         {$data->button}
      </li>",
      $data,
      $product
   	);
	}

	add_filter( 'woocommerce_blocks_product_grid_item_html', 'strive_wookc_remove_product_grid_block_inmage', 9999, 3 );
 
	function strive_wookc_remove_product_grid_block_image( $html, $data, $product ) {
   	return "<li class=\"wc-block-grid__product\">
            <a href=\"{$data->permalink}\" class=\"wc-block-grid__product-link\">
               {$data->title}
            </a>
            {$data->badge}
            {$data->price}
            {$data->rating}
            {$data->button}
         </li>";
	}
	add_filter( 'woocommerce_blocks_product_grid_item_html', 'strive_wookc_remove_product_grid_block_permalink', 9999, 3 );
 
	function strive_wookc_remove_product_grid_block_permalink( $html, $data, $product ) {
   	return "<li class=\"wc-block-grid__product\">
            {$data->image}
            {$data->title}
            {$data->badge}
            {$data->price}
            {$data->rating}
            {$data->button}
         </li>";
}