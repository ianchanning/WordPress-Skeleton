<?php

// Woocommerce New Customer Admin Notification Email
add_action('woocommerce_created_customer', 'icc_aquarius_child_admin_email_on_registration');
function icc_aquarius_child_admin_email_on_registration() {
    $user_id = get_current_user_id();
    wp_new_user_notification( $user_id );
}