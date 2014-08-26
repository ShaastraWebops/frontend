<?php 

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$msg = $_REQUEST['msg'];

$str = $name . ',' . $email . ',' . $mobile . ',' . $msg . '\n';
file_put_contents ('../responses.csv', $str, FILE_APPEND);

header('Location: contact.php?contact=done');

?>
