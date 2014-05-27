<?php


add_action('woocommerce_created_customer', 'icc_aquarius_child_admin_email_on_registration');
/**
 * Woocommerce New Customer Admin Notification Email
 * 
 * @link http://wordpress.org/support/topic/woocommerce-new-registration-not-sending-email-to-admin?replies=3#post-4374790
 */
function icc_aquarius_child_admin_email_on_registration() {
    $user_id = get_current_user_id();
    wp_new_user_notification( $user_id );
}