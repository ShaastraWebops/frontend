<?php
$sValue = stripslashes( $_POST['data'] ) ;
$myFileName = $_POST['filename'];
 
$fp = fopen ("$myFileName", "w+");
if(fwrite($fp, $sValue)) {
    echo 'GOT';
    echo $sValue;
} else
    echo "$sValue=ERROR - NOT SAVED!";
fclose($fp);
 
?>