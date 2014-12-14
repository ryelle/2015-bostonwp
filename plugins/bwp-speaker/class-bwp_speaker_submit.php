<?php

/**
 * Responsible for saving speaker submissions to the database from the front end of the site
 *
 * @author  Eddie Hurtig <hurtige@sudbury.ma.us>
 * @since   2013-08-14
 */
class BWP_Speaker_Submit {
	private $configuration;

	/**
	 * The Constructor.  Hooks init
	 */
	function __construct() {
		add_action( 'init', array( &$this, 'init' ) );
	}

	/**
	 * Registers action hooks and performs other initialization steps
	 */
	function init() {
		add_action( 'admin_ajax_bwp_speaker_save', array( &$this, 'submission' ) );
		add_action( 'admin_ajax_noprive_bwp_speaker_save', array( &$this, 'submission' ) );
	}

	/**
	 * Called when a user submits a speaker request
	 */
	function submission() {

		$submission = $this->validate_submission( $_POST );

		if ( is_wp_error( $submission ) ) {
			wp_send_json_error( $submission );
			die(); // to be sure
		}

		$result = $this->save( $submission );

		// Handle Errors and success
		if ( 0 === $result ) {
			wp_send_json_error( 'Failed to insert submission' );
		} elseif ( is_wp_error( $result ) ) {
			wp_send_json_error( $result );
		} else {
			wp_send_json_success( 'Your Submission has been received' );
		}
	}

	/**
	 * ensures that the submission is valid
	 *
	 * @param array $submission The parsed submission
	 *
	 * @return WP_Error|array A cleansed submission form on success, WP_Error on error
	 */
	function validate_submission( $submission ) {

		//wp_nonce_field('bwp_speaker_guest_nonce', 'bwp_speaker_guest_submission');

		if ( ! wp_verify_nonce( $submission['bwp_speaker_guest_nonce'], 'bwp_speaker_guest_submission' ) ) {
			return new WP_Error( 400, 'Nonce Verification Failed' );
		}


		// A hash of validators
		//		$validators = array(
		//			'bwp_speaker_first_name' => array(
		//				'required'      => true,
		//				'sanitize'      => 'sanitize_text_field',
		//				'Friendly' => 'First Name'
		//			)
		//		);


		if ( empty( $this->configuration ) ) {
			$json                = file_get_contents( plugin_dir_path( __FILE__ ) . 'fields.json' );
			$this->configuration = json_decode( $json );
		}

		$validators = $this->configuration->fields;


		// Contains the cleaned submission data.  Only includes fields specified in $validators
		$clean = array();

		foreach ( $validators as $name => $validator ) {
			if ( isset( $submission[$name] ) ) {

				if ( isset( $validator['max_length'] ) && strlen( $submission[$name] ) >= $validator['max_length'] ) {
					return new WP_Error( 400, __( 'The ' . $validator['friendly_name'] . ' field must be less than ' . $validator['max_length'] . ' characters.', 'bwp_speaker' )
				}

				if ( isset( $validator['min_length'] ) && strlen( $submission[$name] ) <= $validator['min_length'] ) {
					return new WP_Error( 400, __( 'The ' . $validator['friendly_name'] . ' field must be greater than ' . $validator['max_length'] . ' characters.', 'bwp_speaker' )
				}

				$clean[$name] = call_user_func( $validator['sanitize'], $submission[$name] );

			} elseif ( isset( $validator['required'] ) && $validator['required'] ) { // The field wasn't set, let's see if it is required
				return new WP_Error( 400, __( 'Please complete the ' . $validator['friendly_name'] . ' field', 'bwp_speaker' ) );
			}
		}

		return $clean;

		// no default values. using these as examples


	}

	/**
	 * Saves the clean submission to the database
	 *
	 * @param array $submission The Submission
	 *
	 * @return int|WP_Error The post ID on success. The value 0 or WP_Error on failure.
	 */
	function save( $submission ) {
		$full_name = $submission['bwp_speaker_first_name'] . ' ' . $submission['bwp_speaker_last_name'];

		$post = array(
			'post_title'   => $submission['bwp_speaker_pitch_title'], // The title of your post.
			'post_content' => $full_name . ' - ' . $submission['bwp_speaker_pitch'], // The full text of the post.
			'post_status'  => 'pending',
			'post_type'    => $this->get_post_type(),
			'post_author'  => $this->get_submission_owner(), // The user ID number of the author. Default is the current user ID.
			'ping_status'  => 'closed', // Pingbacks or trackbacks allowed. Default is the option 'default_ping_status'
			'tax_input'    => [ array( $this->get_subject_taxonomy() => $submission['bwp_speaker_subject'] ) ] // For custom taxonomies. Default empty.
		);

		$result = wp_insert_post( $post );

		if ( is_wp_error( $result ) || 0 === $result ) {
			return $result;
		} else {

			$post_id = $result;

			$meta = $submission;
			unset( $meta['bwp_speaker_pitch'] );

			foreach ( $meta as $key => $value ) {
				add_post_meta( $post_id, $key, $value );
			}
		}

		unset( $meta['bwp_speaker_subject'] );

	}

}


$bwp_speaker = new BWP_Speaker_Submit();
