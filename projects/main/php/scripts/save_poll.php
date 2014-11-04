<?php
$vote = $_REQUEST['vote'];
$filename = '../../php/misc/poll.csv';
$fp = fopen($filename, "a+");
if( !$fp ) {
	echo "<h4> Thank you for your feedback </h4>";			
	echo "<h4> But error occurred while saving-(Type_1) </h4>";
} else {
	if(fputcsv($fp, str_split($vote, strlen($vote)))) {
		echo "<h4> Thank you for your feedback </h4>";		
		echo "<h4> Successfully saved ! </h4>";
		exit;
	} else {
		echo "<h4> Thank you for your feedback </h4>";		
		echo "<h4> But error occurred while saving-(Type_2) </h4>";
		exit;
	}	
}
fclose($fp);
?>
