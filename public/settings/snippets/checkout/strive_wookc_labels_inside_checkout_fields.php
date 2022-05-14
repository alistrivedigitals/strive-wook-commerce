<?php
	add_filter( 'woocommerce_checkout_fields', 'strive_wookc_labels_inside_checkout_fields', 9999 );
   	function strive_wookc_labels_inside_checkout_fields( $fields ) {
   	foreach ( $fields as $section => $section_fields ) {
     foreach ( $section_fields as $section_field => $section_field_settings ) {
         $fields[$section][$section_field]['placeholder'] = $fields[$section][$section_field]['label'];
         $fields[$section][$section_field]['label'] = '';
      }
   	}
   	return $fields;
}