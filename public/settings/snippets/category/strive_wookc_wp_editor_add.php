<?php
	add_action( 'product_cat_add_form_fields', 'strive_wookc_wp_editor_add', 10, 2 );
 
	function strive_wookc_wp_editor_add() {
	?>
	<div class="form-field">
	<label for="seconddesc"><?php echo __( 'Second Description', 'woocommerce' ); ?></label>
	      <?php
	      $settings = array(
	         'textarea_name' => 'seconddesc',
	         'quicktags' => array( 'buttons' => 'em,strong,link' ),
	         'tinymce' => array(
	            'theme_advanced_buttons1' => 'bold,italic,strikethrough,separator,bullist,numlist,separator,blockquote,separator,justifyleft,justifycenter,justifyright,separator,link,unlink,separator,undo,redo,separator',
	            'theme_advanced_buttons2' => '',
	        ),
	         'editor_css' => '<style>#wp-excerpt-editor-container .wp-editor-area{height:175px; width:100%;}</style>',
	      );
	   	      wp_editor( '', 'seconddesc', $settings );
	      ?>
     <p class="description"><?php echo __( 'This is the description that goes BELOW products on the category page', 'woocommerce' ); ?></p>
	    </div>
	    <?php
		}
	add_action( 'product_cat_edit_form_fields', 'strive_wookc_wp_editor_edit', 10, 2 );
 	function strive_wookc_wp_editor_edit( $term ) {
    $second_desc = htmlspecialchars_decode( get_woocommerce_term_meta( $term->term_id, 'seconddesc', true ) );
    ?>
    <tr class="form-field">
    <th scope="row" valign="top"><label for="second-desc"><?php echo __( 'Second Description', 'woocommerce' ); ?></label></th>
    <td>
    <?php
      $settings = array(
            'textarea_name' => 'seconddesc',
            'quicktags' => array( 'buttons' => 'em,strong,link' ),
            'tinymce' => array(
               'theme_advanced_buttons1' => 'bold,italic,strikethrough,separator,bullist,numlist,separator,blockquote,separator,justifyleft,justifycenter,justifyright,separator,link,unlink,separator,undo,redo,separator',
               'theme_advanced_buttons2' => '',
            ),
            'editor_css' => '<style>#wp-excerpt-editor-container .wp-editor-area{height:175px; width:100%;}</style>',
         );
          wp_editor( $second_desc, 'seconddesc', $settings );
         ?>
             <p class="description"><?php echo __( 'This is the description that goes BELOW products on the category page', 'woocommerce' ); ?></p>
        </td>
   	 </tr>
    <?php
	}
	 add_action( 'edit_term', 'strive_wookc_save_wp_editor', 10, 3 );
	add_action( 'created_term', 'strive_wookc_save_wp_editor', 10, 3 );
	 
	function strive_wookc_save_wp_editor( $term_id, $tt_id = '', $taxonomy = '' ) {
	   if ( isset( $_POST['seconddesc'] ) && 'product_cat' === $taxonomy ) {
	      update_woocommerce_term_meta( $term_id, 'seconddesc', esc_attr( $_POST['seconddesc'] ) );
	   }
	}
	add_action( 'woocommerce_after_shop_loop', 'strive_wookc_display_wp_editor_content', 5 );
	 
	function strive_wookc_display_wp_editor_content() {
	   if ( is_product_taxonomy() ) {
	      $term = get_queried_object();
	      if ( $term && ! empty( get_woocommerce_term_meta( $term->term_id, 'seconddesc', true ) ) ) {
	         echo '<p class="term-description">' . wc_format_content( htmlspecialchars_decode( get_woocommerce_term_meta( $term->term_id, 'seconddesc', true ) ) ) . '</p>';
	      }
	   }
	}