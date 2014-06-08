<?php


// add_action('woocommerce_created_customer', 'icc_aquarius_child_admin_email_on_registration');
/**
 * Woocommerce New Customer Admin Notification Email
 * 
 * @link http://wordpress.org/support/topic/woocommerce-new-registration-not-sending-email-to-admin?replies=3#post-4374790
 */
function icc_aquarius_child_admin_email_on_registration() {
    $user_id = get_current_user_id();
    wp_new_user_notification( $user_id );
}

/**
 * Send email to admin when a customer registers
 * 
 * http://stackoverflow.com/questions/14343928/woocommerce-new-customer-admin-notification-email
 * 
 * @param string $user_login
 */
function icc_aquarius_child_new_customer_registered_send_email_admin($user_login) {
	ob_start();
	do_action('woocommerce_email_header', 'New customer registered');
	$email_header = ob_get_clean();
	ob_start();
	do_action('woocommerce_email_footer');
	$email_footer = ob_get_clean();

	woocommerce_mail(
		get_bloginfo('admin_email'),
		get_bloginfo('name').' - New customer registered',
		$email_header.'<p>The user '.esc_html( $user_login ).' is registered to the website</p>'.$email_footer
	);
}
// add_action('new_customer_registered', 'icc_aquarius_child_new_customer_registered_send_email_admin');

/**
 * Send email to admin when a customer registers
 * 
 * http://stackoverflow.com/questions/14343928/woocommerce-new-customer-admin-notification-email
 * 
 * @param string $user_id
 */
function icc_aquarius_child_customer_save_address_send_email_admin($user_id, $load_address) {
	ob_start();
	do_action('woocommerce_email_header', 'Customer address saved');
	$email_header = ob_get_clean();
	ob_start();
	do_action('woocommerce_email_footer');
	$email_footer = ob_get_clean();

	woocommerce_mail(
		get_bloginfo('admin_email'),
		get_bloginfo('name').' - Customer address saved',
		$email_header.'<p>The user '.esc_html( $user_id ).' is registered to the website</p>'.$email_footer
	);
}
// add_action('woocommerce_customer_save_address', 'icc_aquarius_child_customer_save_address_send_email_admin');

/**
 * @link http://docs.woothemes.com/document/third-party-custom-theme-compatibility/ 
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'icc_aquarius_child_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'icc_aquarius_child_wrapper_end', 10);

function icc_aquarius_child_wrapper_start() {
	echo '<section id="content-main"><div class="inside full-padding">';
}

function icc_aquarius_child_wrapper_end() {
	echo '</div></section>';
}

function icc_aquarius_child_before_main_content() {
	echo '<div class="inside full-padding">';
}

function icc_aquarius_child_after_main_content() {
	echo '</div>';
}

// has the same affect as putting everything child_wrapper
// add_action( 'woocommerce_before_main_content', 'icc_aquarius_child_before_main_content', 10 );
// add_action( 'woocommerce_after_main_content', 'icc_aquarius_child_after_main_content', 10 );