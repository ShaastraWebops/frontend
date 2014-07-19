<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL); 

$file_name = $_REQUEST['file_name'];

if ( file_exists($file_name . ".html") ) {
    unlink($file_name . ".html");
}

header('Location: ' . $_SERVER['HTTP_REFERER'])

?>

