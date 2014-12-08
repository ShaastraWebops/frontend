<?php
$vote = $_REQUEST['vote'];
date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
$date = date("Y-m-d");
$ip = $_SERVER['REMOTE_ADDR'];

$list = array($vote, $time, $date, $ip);
$a = array();
$a[0] = strcmp("tech_n_research", $vote);
$a[1] = strcmp("business_n_entrepreneurship", $vote);
$a[2] = strcmp("sports", $vote);
$a[3] = strcmp("entertainment", $vote);
$a[4] = strcmp("politics", $vote);
$a[5] = strcmp("other", $vote);


$final = $a[0]*$a[1]*$a[2]*$a[3]*$a[4]*$a[5];

$filename = '../../php/misc/poll_latest_now.csv';
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
