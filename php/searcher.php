<?php
include("con.php");

$html = '';
$html .= '<li class="result">';
$html .= '<a target="_blank" href="urlString">';
$html .= '<span>nameString</span>';

$html .= '</a>';
$html .= '</li>';

// Get Search
$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
$search_string = mysql_real_escape_string($search_string);

// Check Length More Than One Character
if (strlen($search_string) >= 1 && $search_string !== ' ') {
	// Build Query
	$query = 'SELECT * FROM catalogue WHERE text LIKE "%'.$search_string.'%"';

	// Do Search
	$result = mysql_query($query);
	//exit;
	while($results = mysql_fetch_array($result)) {
		$result_array[] = $results;
	}
//exit;
	// Check If We Have Results
	if (isset($result_array)) {
		foreach ($result_array as $result) {

			// Format Output Strings And Hightlight Matches
			//
			$display_name = preg_replace("/".$search_string."/i", $search_string, $result['title']);
			$display_url = 'http://ours.secs.oakland.edu/res/docs/1.pdf';

			// Insert Name
			$output = str_replace('nameString', $display_name, $html);

			// Insert URL
			$output = str_replace('urlString', $display_url, $output);
            
            //$output = mb_strimwidth($output, 0, 600, "...");

			// Output
			echo($output);
		}
	}else{

		// Format No Results Output
		$output = str_replace('urlString', 'javascript:void(0);', $html);
		$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
		$output = str_replace('funcStr', 'Sorry :(', $output);

		// Output
		echo($output);
	}
}

?>