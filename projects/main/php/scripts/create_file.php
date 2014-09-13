<?php
$dir = $_REQUEST['dirname'];
$name = $_REQUEST['newname'];
$filename = $dir . '/' . $name;
$filenamenew = $filename;
$i = 1;
while ( file_exist($filenamenew) ) {
$i = $i + 1;
$filenamenew = $filename . '($i)';
}
echo fopen($filenamenew . '/html', "w"); // create
?>

