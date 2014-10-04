<?php
session_start();

if ( !isset($_REQUEST['user_id']) || !isset($_REQUEST['email'])
	|| !isset($_REQUEST['token']) ) {
	header('HTTP/1.1 500 Internal Server Error');
	echo <<<ERRORTEXT
{'error' : 'invalid input'}
ERRORTEXT;

}

$_SESSION['user_id'] = $_REQUEST['user_id'];
$_SESSION['valid_profile'] = $_REQUEST['valid_profile'];
$_SESSION['token'] = $_REQUEST['token'];
$_SESSION['first_name'] = $_REQUEST['first_name'];
$_SESSION['last_name'] = $_REQUEST['last_name'];
$_SESSION['email'] = $_REQUEST['email'];

if ( isset($_REQUEST['redirect']) && $_SESSION['valid_profile'] == "0" ) {
    header('Location: ../../php/pages/dashboard.php#edit-profile');
} else if ( isset($_REQUEST['redirect']) ) {
	header('Location: ../../php/pages/dashboard.php');
} else {
	echo json_encode(array(
		"success" => "Logged in successfully"
	));
}
?>
