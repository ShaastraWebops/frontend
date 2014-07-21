<?php
$sValue = stripslashes( $_POST['data'] ) ;
$myFileName = $_POST['filename'];
 
$fp = fopen ("$myFileName", "w+");
if(fwrite($fp, $sValue)) {
    echo "{'script':'save_to_file', 'msg':'success'}";
} else {
    echo "{'script':'save_to_file', 'msg':'error'}";
}
fclose($fp);
 
?>