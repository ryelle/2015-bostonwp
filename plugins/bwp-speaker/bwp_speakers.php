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

	function __construct() {

		add_action( 'init', array( $this, 'bwp_create_speaker' ) );
		add_action( 'init', array( $this, 'bwp_speaker_subject_init' ) );
		add_shortcode( 'bwp_speaker_form', array( $this, 'bwp_speaker_form_shortcode' ) );

	}

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

	function bwp_speaker_form_shortcode() {

		$form = "";

		$form .= "<form method='get' id='bwp_speakerfrm'  action='#'>";
		$form .= "<label>First Name*</label>";
		$form .= "<input name='f_firstname' id='f_firstname' type='text' />";
		$form .= "<label>Last Name*</label>";
		$form .= "<input name='f_lastname' id='f_lastname' type='text' />";
		$form .= "<label  for='f_email'>Email*</label>";
		$form .= "<input name='f_email' id='f_email' type='email'  />";
		$form .= "<label  for='f_url'>Website</label>";
		$form .= "<input name='f_url' id='f_url' type='url'  />";
		$form .= "<label  for='f_twitter'>Twitter</label>";
		$form .= "<input name='f_twitter' id='f_twitter' type='text' />";
		$form .= "<label  for='f_title'>Talk Title<span class='gfield_required'>*</label>";
		$form .= "<input name='f_title' id='f_title' type='text' />";
		$form .= "<label  for='f_description'>Description*</label>";
		$form .= "<p>ncluding format & length.</p>";
		$form .= "<textarea name='f_description' id='f_description' rows='10' cols='50'></textarea>";
		$form .= "<label  for='f_subject'>Subject*</label>";
		$form .= "<select name='f_subject'>";
		$form .= "<option>WordPress Security</option>";
		$form .= "<option>WordPress SEO</option>";
		$form .= "<option>Beginner WordPress</option>";
		$form .= "<option>Advanced WordPress</option>";
		$form .= "<option selected='selected'>Select...</option>";
		$form .= "</select>";
		$form .= "<label  for='f_audience'>Audience: Who is this talk targeted at?</label>";
		$form .= "<input name='f_audience' id='f_audience' type='text'  />";
		$form .= "<label  for='f_desired_date'>Date*</label>";
		$form .= "<p>Our meetups are (usually) the last Monday of the month. What month are you looking to speak at?";
		$form .= "<input name='f_desired_date' id='f_desired_date' type='text'  /></p>";
		$form .= "<label  for='f_comments'>Comments</label>";
		$form .= "<input name='f_comments' id='f_comments' type='text' value='' autocomplete='off' />";
		$form .= "<p>This field is for validation purposes and should be left unchanged. </p>";
		$form .= "<input type='submit' id='f_submit' value='Submit' />";
		$form .= "</form>";

		return $form;

	}

}

$bwp_speaker = new BWP_Speaker();
