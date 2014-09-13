<?php
session_start();

if ( !isset($_POST['user_id']) || !isset($_POST['email'])
	|| !isset($_POST['first_name']) || !isset($_POST['last_name']) ) {
	header('HTTP/1.1 500 Internal Server Error');
	echo <<<ERRORTEXT
{'error' : 'invalid input'}
ERRORTEXT;

}

$_SESSION['user_id'] = $_POST['user_id'];
//$_SESSION['shaastra_id'] = $_POST['shaastra_id'];
$_SESSION['token'] = $_POST['token'];
$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['email'] = $_POST['email'];

//header('Location: ../pages/dashboard.php')
echo json_encode(array(
	"success" => "Logged in successfully"
));

?>