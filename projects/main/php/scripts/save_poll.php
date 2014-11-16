<?php
$vote = $_REQUEST['vote'];
date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
$date = date("Y-m-d");
$ip = $_SERVER['REMOTE_ADDR'];

$list = array($vote, $time, $date, $ip);

$a = strcmp($vote, "Yes");
$b = strcmp($vote, "No");
$final = $a*$b;

$filename = '../../php/misc/poll_latest.csv';
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
	fclose($fp);
}
?>
