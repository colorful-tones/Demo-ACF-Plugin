<?php
/**
 * Limit capabilities of editing ACF fields,
 * post types, taxonomies and more in WP Admin.
 */

/**
 * @link https://www.advancedcustomfields.com/resources/how-to-hide-acf-menu-from-clients/
 */
add_filter( 'acf/settings/show_admin', 'demo_acf_show_admin' );

/**
 * Allow access to ACF screens by WP user role
 * AND a list of allowed email domains.
 *
 * @link https://developer.wordpress.org/reference/functions/current_user_can/
 *
 * @param boolean $show Whether to show the ACF admin.
 * @return boolean $show Whether to show the ACF admin.
 *
 * @since 0.1.2
 */
function demo_acf_show_admin( $show ) {
	// If our user can manage site options.
	if ( current_user_can( 'manage_options' ) ) {
		$user = wp_get_current_user();
		// Our list of allowed email domains.
		// Be sure to replace with your email domain.
		$allowed_email_domains = array(
			'advancedcustomfields.com',
			'wpengine.com',
		);

		// Make sure we have a WP_User object and email address.
		if ( $user && isset( $user->user_email ) ) {
			// Trim user email to domain only.
			$email_domain = strtolower( array_pop( explode( '@', trim( $user->user_email ) ) ) );

			// Compare current logged in user's email with our allow list.
			if ( in_array( $email_domain, $allowed_email_domains, true ) ) {
				return true;
			}
		}
	}
}
