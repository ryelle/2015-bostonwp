<?php

/**
 * Responsible for saving speaker submissions to the database from the front end of the site
 *
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
		add_action( 'wp_ajax_bwp_speaker_save', array( &$this, 'submission' ) );
		add_action( 'wp_ajax_nopriv_bwp_speaker_save', array( &$this, 'submission' ) );
	}

	/**
	 * Called when a user submits a speaker request
	 */
	function submission() {
		$submission = $this->validate_submission( $_POST );

		if ( is_wp_error( $submission ) ) {
			wp_send_json_error( $submission->get_error_message() );
			die(); // to be sure
		}

		$result = $this->save( $submission );

		// Handle Errors and success
		if ( 0 === $result ) {
			wp_send_json_error( 'Failed to insert submission' );
		} elseif ( is_wp_error( $result ) ) {
			wp_send_json_error( $result->get_error_message() );
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

		if ( ! wp_verify_nonce( $submission['bwp_speaker_guest_submission'], 'bwp_speaker_guest_nonce' ) ) {
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
			$this->configuration = json_decode( $json, true );
		}

		$validators = $this->configuration['fields'];


		// Contains the cleaned submission data.  Only includes fields specified in $validators
		$clean = array();


		foreach ( $validators as $name => $validator ) {

			if ( isset( $submission[$name] ) ) {

				if ( isset( $validator['required'] ) && $validator['required'] && empty( $submission[$name] ) ) { // The field wasn't set, let's see if it is required
					return new WP_Error( 400, __( 'Please complete the ' . $validator['friendly'] . ' field', 'bwp_speaker' ) );
				}

				if ( isset( $validator['max_length'] ) && strlen( $submission[$name] ) >= $validator['max_length'] ) {
					return new WP_Error( 400, __( 'The ' . $validator['friendly'] . ' field must be less than ' . $validator['max_length'] . ' characters.', 'bwp_speaker' ) );
				}

				if ( isset( $validator['min_length'] ) && strlen( $submission[$name] ) <= $validator['min_length'] ) {
					return new WP_Error( 400, __( 'The ' . $validator['friendly'] . ' field must be greater than ' . $validator['min_length'] . ' characters.', 'bwp_speaker' ) );
				}

				if ( isset( $validator['values'] ) && ! in_array( $submission[$name], $validator['values'] ) ) {
					return new WP_Error( 400, __( 'The ' . $validator['friendly'] . ' field is incorrect', 'bwp_speaker' ) );
				}

				$clean[$name] = call_user_func( $validator['sanitize'], $submission[$name] );

			} elseif ( isset( $validator['required'] ) && $validator['required'] ) { // The field wasn't set, let's see if it is required
				return new WP_Error( 400, __( 'Please complete the ' . $validator['friendly'] . ' field', 'bwp_speaker' ) );
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

		$author = $this->get_submission_owner();

		if ( is_wp_error( $author ) ) {
			return $author;
		}

		$post = array(
			'post_title'   => $submission[$this->configuration['mappings']['post_title']], // The title of your post.
			'post_content' => $submission[$this->configuration['mappings']['post_content']], // The full text of the post.
			'post_status'  => 'pending',
			'post_type'    => $this->get_post_type(),
			'post_author'  => $author, // The user ID number of the author. Default is the current user ID.
			'ping_status'  => 'closed', // Pingbacks or trackbacks allowed. Default is the option 'default_ping_status'

		);


		$result = wp_insert_post( $post );

		if ( is_wp_error( $result ) || 0 === $result ) {
			return $result;
		} else {

			$post_id = $result;

			wp_set_post_terms( $post_id, $submission['bwp_speaker_subject'], $this->get_subject_taxonomy() );

			$meta = $submission;
			unset( $meta['bwp_speaker_pitch'] );

			foreach ( $meta as $key => $value ) {
				add_post_meta( $post_id, $key, $value );
			}
		}

		unset( $meta['bwp_speaker_subject'] );

	}

	/**
	 * Returns the Speaker post type slug
	 * @return string
	 */
	function get_post_type() {
		return BWP_SPEAKER_POST_TYPE;
	}

	/**
	 * Returns the Subject Taxonomy's Slug
	 * @return string
	 */
	function get_subject_taxonomy() {
		return 'subject';
	}

	/**
	 * Returns the ID of the Submissions Owner User
	 * @return int|WP_Error
	 */
	function get_submission_owner() {
		$user = get_user_by( 'login', BWP_SPEAKER_SUBMISSION_OWNER );

		if ( false === $user ) {
			return new WP_Error( 500, "The Site Administrator does not have a user configured for Speaker Submissions" );
		} else {
			return $user->ID;
		}
	}
}


$bwp_speaker = new BWP_Speaker_Submit();
