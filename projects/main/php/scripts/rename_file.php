<?php
    ini_set('display_errors', 1); 
    error_reporting(E_ALL); 

$dir = $_REQUEST['dirname'];

if ( isset($_REQUEST['oldname']) ) {
    $oldname = $_REQUEST['oldname'];
} else {
    
}
$newname = $_REQUEST['newname'];

$oldfilename = $dir . '/' . $oldname;
$filename = $dir . '/' . $newname;

$filenamenew = $filename;
$i = 1;

while ( file_exists($filenamenew . '.html') ) {
    $i = $i + 1;
    $filenamenew = $filename . '(' . $i . ')';
}

if ( $oldname == '' ) {
    $fp = fopen($filenamenew . '.html', "w"); // create
    fclose($fp);
} else {
    rename($oldfilename . '.html', $filenamenew . '.html'); // rename
}

header('Location: ' . $_SERVER['HTTP_REFERER'])
?>

