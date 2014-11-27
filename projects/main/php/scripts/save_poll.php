<?php
$vote = $_REQUEST['vote'];
date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
$date = date("Y-m-d");
$ip = $_SERVER['REMOTE_ADDR'];

$list = array($vote[0], $vote[2], $vote[4], $time, $date, $ip);
$a = array();

for ($i=0; $i<5; $i+=2) { 
	if(ctype_digit((string)$vote[$i]) && $vote[$i]<=5 && $vote[$i]>=1) 
		$a[$i] = 1;
	else
		$a[$i] = 0;
}
$final = $a[0]*$a[2]*$a[4];

$filename = '../../php/misc/poll_latest.csv';
$fp = fopen($filename, "a+");
if( !$fp ) {
	echo "<h4> Thank you for your feedback </h4>";			
	echo "<h4> But error occurred while saving-(Type_1) </h4>";
} else {
	if($final == 1) {
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
