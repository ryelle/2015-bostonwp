<?php
/**
 * Plugin Name: BWP Speakers
 * Plugin URI: www.bostonwp.org
 * Description: Creates an admin panel for speaker submissions
 * Version: 1.0
 * Author: Boston Wordpress
 * Author URI: Boston Wordpress
 */


if ( ! defined( 'BWP_SPEAKER_POST_TYPE' ) ) {
	define( 'BWP_SPEAKER_POST_TYPE', 'bwp-speaker' );
}


if ( ! defined( 'BWP_SPEAKER_SUBMISSION_OWNER' ) ) {
	define( 'BWP_SPEAKER_SUBMISSION_OWNER', 'speakersubmissions' );
}


include_once( 'class-bwp_speaker_submit.php' );

class BWP_speaker {

	/**
	 * Constructor
	 */
	function __construct() {

		add_action( 'init', array( $this, 'bwp_create_speaker' ) );
		add_action( 'init', array( $this, 'bwp_speaker_subject_init' ) );
		add_shortcode( 'bwp_speaker_form', array( $this, 'bwp_speaker_form_shortcode' ) );

		add_action( 'wp_enqueue_scripts', array( &$this, 'enqueue_scripts' ) );

	}

	/**
	 * Enqueue jQuery if the current Post has our shortcode
	 */
	function enqueue_scripts() {
		if ( has_shortcode( get_post()->post_content, 'bwp_speaker_form' ) ) {
			wp_enqueue_script( 'jquery' );
			wp_register_script( 'bwp_script', plugins_url( 'js/script.js', __FILE__ ), array( 'jquery' ) );
			wp_enqueue_script( "bwp_script" );

		}
	}

	/**
	 * registers the Custom Post Type for Speakers
	 */
	function bwp_create_speaker() {
		register_post_type( BWP_SPEAKER_POST_TYPE,
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

		<form method='get' id='bwp_speakerfrm' action='#'>
			<input type="hidden" id="bwp_speaker_admin_url" value="<?php echo admin_url( 'admin-ajax.php?action=bwp_speaker_save' ); ?>">
			<?php wp_nonce_field( 'bwp_speaker_guest_nonce', 'bwp_speaker_guest_submission' ); ?>
			<input type="hidden" name="action" value="bwp_speaker_save">

			<div><label> First Name *</label></div>
			<div><input name="bwp_speaker_firstname" id="bwp_speaker_firstname" type="text" /></div>
			<div><label> Last Name *</label></div>
			<div><input name="bwp_speaker_lastname" id="bwp_speaker_lastname" type="text" /></div>
			<div><label for="bwp_speaker_email"> Email *</label></div>
			<div><input name="bwp_speaker_email" id="bwp_speaker_email" type="email" /></div>
			<div><label for="bwp_speaker_url"> Website</label></div>
			<div><input name="bwp_speaker_url" id="bwp_speaker_url" type="url" value="http://" /></div>
			<div><label for="bwp_speaker_twitter"> Twitter</label></div>
			<div><input name="bwp_speaker_twitter" id="bwp_speaker_twitter" type="text" /></div>
			<div><label for="bwp_speaker_title"> Talk Title *</label></div>
			<div><input name="bwp_speaker_title" id="bwp_speaker_title" type="text" /></div>
			<div>
				<label for="bwp_speaker_description"> Description *: </label><br>
				<small>Some details of your talk, including format &amp; length</small>
			</div>
			<div></div>
			<div><textarea name="bwp_speaker_description" id="bwp_speaker_description" rows="10" cols="50"></textarea>
			</div>
			<div><label for="bwp_speaker_subject"> Subject *</label></div>
			<div><select name="bwp_speaker_subject">
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
			<div><label for="bwp_speaker_audience">Audience:</label>
				<small>Who is this talk targeted at?</small>
			</div>
			<div><input name="bwp_speaker_audience" id="bwp_speaker_audience" type="text" /></div>
			<div><label for="bwp_speaker_desired_date">Date *</label><br>
				<small>Our meetups are (usually) the last Monday of the month. What month are you looking to speak at?</small>
			</div>
			<div><input name="bwp_speaker_desired_date" id="bwp_speaker_desired_date" type="text" /></div>

			<div><label for="bwp_speaker_honeypot">What is two plus four *</label>

			</div>
			<div><input name="bwp_speaker_honeypot" value=""></div>

			<div><input type="submit" id="bwp_speaker_submit" value="Submit" /></div>

			<div id="bwp_speaker_notices" class="alert" style="display: none;">

			</div>
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


