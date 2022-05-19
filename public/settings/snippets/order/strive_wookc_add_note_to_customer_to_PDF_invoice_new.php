<?php
	add_action( 'wpo_wcpdf_after_order_details', 'strive_wookc_add_note_to_customer_to_PDF_invoice_new', 10, 2 );
 	function strive_wookc_add_note_to_customer_to_PDF_invoice_new( $template_type, $order ) {
    $document = wcpdf_get_document( $template_type, $order );
    $document->order_notes();
}