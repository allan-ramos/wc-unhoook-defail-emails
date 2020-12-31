<?php
   /**
 * Unhook and remove WooCommerce default emails.
 */
add_action( 'woocommerce_email', 'unhook_those_pesky_emails' );

function unhook_those_pesky_emails( $email_class ) {

    remove_action( 'woocommerce_order_status_pending_to_on-hold_notification', array( $email_class->emails['WC_Email_New_Order'], 'trigger' ) );
		remove_action( 'woocommerce_order_status_failed_to_processing_notification', array( $email_class->emails['WC_Email_New_Order'], 'trigger' ) );

		remove_action( 'woocommerce_order_status_failed_to_on-hold_notification', array( $email_class->emails['WC_Email_New_Order'], 'trigger' ) );
	
		
}

?>
