<?php
	add_action( 'woocommerce_proceed_to_checkout', 'strive_wookc_display_coupon_form_proceed_checkout', 25 );
 	function strive_wookc_display_coupon_form_proceed_checkout() {
   	?> 
      <form class="woocommerce-coupon-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
         <?php if ( wc_coupons_enabled() ) { ?>
            <div class="coupon under-proceed">
               <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" style="width: 100%" /> 
               <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>" style="width: 100%"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
            </div>
         <?php } ?>
      </form>
   	<?php
}	