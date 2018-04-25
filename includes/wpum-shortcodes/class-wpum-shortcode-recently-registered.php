<?php
/**
 * Handles the display of the recently registered shortcode generator.
 *
 * @package     wp-user-manager
 * @copyright   Copyright (c) 2018, Alessandro Tesoro
 * @license     https://opensource.org/licenses/GPL-3.0 GNU Public License
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class WPUM_Shortcode_Recently_Registered extends WPUM_Shortcode_Generator {

	/**
	 * Inject the editor for this shortcode.
	 */
	public function __construct() {
		$this->shortcode['title'] = esc_html__( 'Recently registered list' );
		$this->shortcode['label'] = esc_html__( 'Recently registered list' );
		parent::__construct( 'wpum_recently_registered' );
	}

	/**
	 * Setup fields for the login shortcode window.
	 *
	 * @return array
	 */
	public function define_fields() {
		return [
			array(
				'type'    => 'textbox',
				'name'    => 'amount',
				'label'   => esc_html__( 'Amount' ),
				'tooltip' => esc_html__( 'How many users to display' )
			),
			array(
				'type'    => 'listbox',
				'name'    => 'link_to_profile',
				'label'   => esc_html__( 'Link to profile' ),
				'options' => $this->get_yes_no(),
			),
		];
	}

}

new WPUM_Shortcode_Recently_Registered;