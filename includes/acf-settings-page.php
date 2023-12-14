<?php
/**
 * ACF demo Options Page: "Site Settings".
 *
 * @link https://www.advancedcustomfields.com/resources/options-page/
 */

/**
 * Check if ACF PRO is active and function exists.
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	add_action( 'acf/init', 'demo_acf_register_options_page' );
}

function demo_acf_register_options_page() {
	// Add the top-level page.
	acf_add_options_page(
		array(
			'page_title' => 'Site Settings',
			'menu_slug'  => 'site-settings',
			'redirect'   => false,
		)
	);

	// Add the sub-page.
	acf_add_options_sub_page(
		array(
			'page_title'  => 'Contact Information',
			'menu_slug'   => 'contact-information',
			'parent_slug' => 'site-settings',
		)
	);

	// Add 'Contact Information' field group with Phone field.
	acf_add_local_field_group(
		array(
			'key'      => 'group_6511a57f5680c',
			'title'    => 'Contact Information',
			'fields'   => array(
				array(
					'key'           => 'field_6511a57fcbe7e',
					'label'         => 'Phone Number',
					'name'          => 'demo_acf_phone_number',
					'type'          => 'text',
					'default_value' => '555 123-4567',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'contact-information',
					),
				),
			),
		)
	);

	acf_add_local_field_group(
		array(
			'key'      => 'group_6511a5e8c1c15',
			'title'    => 'Notification Bar',
			'fields'   => array(
				array(
					'key'        => 'field_6511a5e897814',
					'label'      => 'Notification Bar',
					'name'       => 'demo_acf_notification_bar_group',
					'aria-label' => '',
					'type'       => 'group',
					'layout'     => 'row',
					'sub_fields' => array(
						array(
							'key'           => 'field_6511a5f597815',
							'label'         => 'Notification On/Off',
							'name'          => 'demo_acf_notification_onoff',
							'type'          => 'true_false',
							'message'       => 'Should the site-wide Notification Bar be showing?',
							'default_value' => 1,
							'ui_on_text'    => 'On',
							'ui_off_text'   => 'Off',
							'ui'            => 1,
						),
						array(
							'key'               => 'field_6511a5f597816',
							'label'             => 'Notification Message',
							'name'              => 'demo_acf_notification_message',
							'type'              => 'textarea',
							'conditional_logic' => array(
								array(
									array(
										'field'    => 'demo_acf_notification_onoff',
										'operator' => '==',
										'value'    => '1',
									),
								),
							),
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'site-settings',
					),
				),
			),
		)
	);
}
