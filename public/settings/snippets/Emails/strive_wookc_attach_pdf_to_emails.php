<?php
	add_filter( 'woocommerce_email_attachments', 'strive_wookc_attach_pdf_emails', 10, 4 );
 	function strive_wookc_attach_pdf_emails( $attachments, $email_id, $order, $email ) {
    $email_ids = array( 'new_order', 'customer_processing_order' );
    if ( in_array ( $email_id, $email_ids ) ) {
        $upload_dir = wp_upload_dir();
        $attachments[] = $upload_dir['basedir'] . "/2020/09/example.pdf";
    }
    return $attachments;
}