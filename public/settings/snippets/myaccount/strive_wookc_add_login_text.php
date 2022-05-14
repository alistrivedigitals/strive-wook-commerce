<?php
	add_action( 'woocommerce_login_form_start','strive_wookc_add_login_text' );
  	function strive_wookc_add_login_text() {
   	if ( is_checkout() ) return;
   	echo '<h3 class="bb-login-subtitle">Registered Customers</h3><p class="bb-login-description">If you have an account with us, log in using your email address.</p>';
}
  add_action( 'woocommerce_register_form_start','strive_wookc_add_reg_text' );
  function strive_wookc_add_reg_text() {
   echo '<h3 class="bb-register-subtitle">New Customers</h3><p class="bb-register-description">By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>';
}