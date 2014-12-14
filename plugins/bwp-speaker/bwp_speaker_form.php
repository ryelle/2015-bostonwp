<?php
function bwp_subjects() {
	$subjects = get_the_terms( $post_id, 'subject' );

	if ( empty ( $subjects ) || is_wp_error( $subjects ) ) {
		return $choices;
	}
	foreach ( $subjects as $subject ) {
		$choices[] = $subject->slug;
	}
}

?>
<form method='get' id='bwp_speakerfrm' action='#'>
	<div><label>First Name*</label></div>
	<div><input name='bwp_firstname' id='bwp_firstname' type='text' /></div>
	<div><label>Last Name*</label></div>
	<div><input name='bwp_lastname' id='bwp_lastname' type='text' /></div>
	<div><label for='bwp_email'>Email*</label></div>
	<div><input name='bwp_email' id='bwp_email' type='email' /></div>
	<div><label for='bwp_url'>Website</label></div>
	<div><input name='bwp_url' id='bwp_url' type='url' /></div>
	<div><label for='bwp_twitter'>Twitter</label></div>
	<div><input name='bwp_twitter' id='bwp_twitter' type='text' /></div>
	<div><label for='bwp_title'>Talk Title<span class='gfield_required'>*</label></div>
	<div><input name='bwp_title' id='bwp_title' type='text' /></div>
	<div>
		<label for='bwp_description'>Description*: </label>
		Some details of your talk, including format &amp; length
	</div>
	<div></div>
	<div><textarea name='bwp_description' id='bwp_description' rows='10' cols='50'></textarea></div>
	<div><label for='bwp_subject'>Subject*</label></div>
	<div><select name="bwp_subject">
			<option selected="selected">Select...</option>
			<?php    $current_subjects = bwp_subjects();
			if ( count( $one_subject ) > 0 ) {
				foreach ( $current_subjects as $one_subject ) {
					echo '<option>' . $one_subject . '</option>';
				} // end of foreach
			} // end of IF
			?>

		</select></div>
	<div><label for='bwp_audience'>Audience: Who is this talk targeted at?</label></div>
	<div><input name='bwp_audience' id='bwp_audience' type='text' /></div>
	<div><label for='bwp_desired_date'>Date*</label>
		: Our meetups are (usually) the last Monday of the month. What month are you looking to speak at?
	</div>
	<div><input name='bwp_desired_date' id='bwp_desired_date' type='text' /></div>
	<div><input type='submit' id='bwp_submit' value='Submit' /></div>
</form>