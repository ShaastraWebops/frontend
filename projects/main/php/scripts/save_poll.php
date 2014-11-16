<?php
$vote = $_REQUEST['vote'];
date_default_timezone_set("Asia/Kolkata");
// $present_time_date = " | " . date("h:i:sa") . " | " . date("Y-m-d") . " | " . date("l");
// $vote_time = $vote . "," . $present_time_date;
$time = date("h:i:sa");
$date = date("Y-m-d");
$ip = $_SERVER['REMOTE_ADDR'];

$list = array($vote, $time, $date, $ip);

$a = strcmp($vote, "b_events");
$b = strcmp($vote, "coding");
$c = strcmp($vote, "design_n_build");
$d = strcmp($vote, "quizzing");
$e = strcmp($vote, "other");
$final = $a*$b*$c*$d*$e;

$filename = '../../php/misc/poll.csv';
$fp = fopen($filename, "a+");
if( !$fp ) {
	echo "<h4> Thank you for your feedback </h4>";			
	echo "<h4> But error occurred while saving-(Type_1) </h4>";
} else {
	if($final == 0) {
		if(fputcsv($fp, $list)) {
			echo "<h4> Thank you for your feedback </h4>";		
			echo "<h4> Successfully saved ! </h4>";
			exit;
		} else {
			echo "<h4> Thank you for your feedback </h4>";		
			echo "<h4> But error occurred while saving-(Type_2) </h4>";
			exit;
		}
	} else {
		echo "<h4> Good attempt to corrupt our poll data </h4>";
		echo "<h4> Sadly not saving ;) ! </h4>";
		exit;
	}	
}
fclose($fp);
?>
