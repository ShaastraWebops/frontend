<?php
session_start();

if ( !isset($_REQUEST['user_id']) || !isset($_REQUEST['email'])
	|| !isset($_REQUEST['first_name']) || !isset($_REQUEST['last_name']) ) {
	header('HTTP/1.1 500 Internal Server Error');
	echo <<<ERRORTEXT
{'error' : 'invalid input'}
ERRORTEXT;

}

$_SESSION['user_id'] = $_REQUEST['user_id'];
//$_SESSION['shaastra_id'] = $_POST['shaastra_id'];
$_SESSION['token'] = $_REQUEST['token'];
$_SESSION['first_name'] = $_REQUEST['first_name'];
$_SESSION['last_name'] = $_REQUEST['last_name'];
$_SESSION['email'] = $_REQUEST['email'];

if( isset($_REQUEST['redirect']) )
    header('Location: ../pages/dashboard.php');

echo json_encode(array(
	"success" => "Logged in successfully"
));

?>
