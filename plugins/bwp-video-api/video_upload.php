<?php

/**
 * Plugin Name: Boston WP Video Upload.
 * Plugin URI: http://bostonwp.org
 * Description: Grabs videos from youtube and creates post on bostonwp site.
 * Version: 1.0.0
 * Author: bostonwp
 * Author URI: http://bostonwp.org
 */


$url = "http://gdata.youtube.com/feeds/api/users/lifehackrdiet/uploads?v=2&alt=json";


bwp_get_youtube_json($url) {

	

//send request
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_REFERER, $url);
	$body = curl_exec($ch);
	curl_close($ch);

	//now, process the JSON string
	$json = json_decode($body);

}

bwp_create_data_array() {
	
	$video_data = array();


	foreach($json->feed->entry as $item){
	
		
		$title = $item->title->{'$t'};
		$desc = $item->{'media$group'}->{'media$description'}->{'$t'};
		$vidurl= $item->{'media$group'}->{'media$content'}[0]->url;

		array_push($video_data, array('title' => $title, 'description' => $description), 'url' => $vidurl));


	
	}

	return $video_data;

}





?>