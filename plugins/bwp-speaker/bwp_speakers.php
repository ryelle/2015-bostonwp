<?php
/**
 * Plugin Name: BWP Speakers
 * Plugin URI: www.bostonwp.org
 * Description: Creates an admin panel for speaker submissions
 * Version: 1.0
 * Author: Boston Wordpress
 * Author URI: Boston Wordpress
 */


include_once( 'class-bwp_speaker_submit.php' );

class BWP_speaker {

	/**
	 * Constructor
	 */
	function __construct() {

		add_action( 'init', array( $this, 'bwp_create_speaker' ) );
		add_action( 'init', array( $this, 'bwp_speaker_subject_init' ) );
		add_shortcode( 'bwp_speaker_form', array( $this, 'bwp_speaker_form_shortcode' ) );

	}

	/**
	 * registers the Custom Post Type for Speakers
	 */
	function bwp_create_speaker() {
		register_post_type( 'bwp-speaker',
			array(
				'labels'      => array(
					'name'               => __( 'Speakers' ),
					'singular_name'      => __( 'Speaker' ),
					'add_new'            => __( 'Add New', 'speaker' ),
					'add_new_item'       => __( 'Add New Speaker' ),
					'edit_item'          => __( 'Edit Speaker' ),
					'new_item'           => __( 'New Speaker' ),
					'all_items'          => __( 'All Speakers' ),
					'view_item'          => __( 'View Speaker' ),
					'search_items'       => __( 'Search Speakers' ),
					'not_found'          => __( 'No speakers found' ),
					'not_found_in_trash' => __( 'No speakers found in the Trash' ),
					'menu_name'          => 'Speakers'
				),
				'public'      => true,
				'has_archive' => true,
			)
		);
	}

	/**
	 * Initializes
	 */
	function bwp_speaker_subject_init() {
		// create a new taxonomy
		register_taxonomy(
			'subject',
			'bwp-speaker',
			array(
				'label'        => __( 'Subjects' ),
				'rewrite'      => array( 'slug' => 'subject' ),
				'hierarchical' => true,
			)
		);
	}

	/**
	 * Renders the Form for Speaker submissions
	 */
	function bwp_speaker_form_shortcode() {
		ob_start();
		?>

		<form method='get' id='bwp_speakerfrm' action=' #'>
			<div><label> First Name *</label></div>
			<div><input name='bwp_firstname' id='bwp_firstname' type='text' /></div>
			<div><label> Last Name *</label></div>
			<div><input name='bwp_lastname' id='bwp_lastname' type='text' /></div>
			<div><label for='bwp_email'> Email *</label></div>
			<div><input name='bwp_email' id='bwp_email' type='email' /></div>
			<div><label for='bwp_url'> Website</label></div>
			<div><input name='bwp_url' id='bwp_url' type='url' /></div>
			<div><label for='bwp_twitter'> Twitter</label></div>
			<div><input name='bwp_twitter' id='bwp_twitter' type='text' /></div>
			<div><label for='bwp_title'> Talk Title < span class='gfield_required' >*</label></div>
			<div><input name='bwp_title' id='bwp_title' type='text' /></div>
			<div>
				<label for='bwp_description'> Description *: </label>
				Some details of your talk, including format & amp; length
			</div>
			<div></div>
			<div><textarea name='bwp_description' id='bwp_description' rows='10' cols='50'></textarea></div>
			<div><label for='bwp_subject'> Subject *</label></div>
			<div><select name="bwp_subject">
					<option selected="selected"> Select ...</option>
					<?php    $current_subjects = $this->bwp_get_subjects();
					if ( count( $current_subjects ) > 0 ) {
						foreach ( $current_subjects as $one_subject ) {
							echo '<option value="' . esc_attr( $one_subject->term_id ) . '">' . esc_html( $one_subject->name ) . '</option>';
						} // end of foreach
					} // end of IF
					?>

				</select>
			</div>
			<div><label for='bwp_audience'>Audience: Who is this talk targeted at?</label></div>
			<div><input name='bwp_audience' id='bwp_audience' type='text' /></div>
			<div><label for='bwp_desired_date'>Date*</label>
				: Our meetups are (usually) the last Monday of the month. What month are you looking to speak at?
			</div>
			<div><input name='bwp_desired_date' id='bwp_desired_date' type='text' /></div>
			<div><input type='submit' id='bwp_submit' value='Submit' /></div>
		</form>

		<style type="text/css">
			/* KMC */
			#bwp_speakerfrm div {
				clear: both;
				display: block;
				float: left;
			}

			#bwp_speakerfrm input, #bwp_speakerfrm select {
				float: right;
				margin-bottom: 20px;
			}

		</style>


		<?php

		return ob_get_clean();
	}

	/**
	 * Gets a list of Subject Terms for use in the guest submission form
	 * @return array
	 */
	function bwp_get_subjects() {

		$taxonomies = array(
			'subject',
		);

		$args = array(
			'orderby'    => 'name',
			'order'      => 'ASC',
			'hide_empty' => false,
		);


		$subjects = get_terms( $taxonomies, $args );


		if ( empty ( $subjects ) || is_wp_error( $subjects ) ) {
			return array();
		}

		return $subjects;
	}

}

$bwp_speaker = new BWP_Speaker();
