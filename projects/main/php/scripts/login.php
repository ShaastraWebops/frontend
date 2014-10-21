<?php
session_start();

if ( !isset($_REQUEST['user_id']) || !isset($_REQUEST['email'])
	|| !isset($_REQUEST['token']) ) {
	header('HTTP/1.1 500 Internal Server Error');
	echo <<<ERRORTEXT
{'error' : 'invalid input'}
ERRORTEXT;

}

$cooktime = time()+60*60*24*30;

$_SESSION['user_id'] = $_REQUEST['user_id'];
$_SESSION['valid_profile'] = $_REQUEST['valid_profile'];
$_SESSION['token'] = $_REQUEST['token'];
$_SESSION['first_name'] = $_REQUEST['first_name'];
$_SESSION['last_name'] = $_REQUEST['last_name'];
$_SESSION['email'] = $_REQUEST['email'];

// Set cookies also - for long login
setcookie('user_id', $_REQUEST['user_id'], $cooktime, "/");
setcookie('valid_profile', $_REQUEST['valid_profile'], $cooktime, "/");
setcookie('token', $_REQUEST['token'], $cooktime, "/");
setcookie('first_name', $_REQUEST['first_name'], $cooktime, "/");
setcookie('last_name', $_REQUEST['last_name'], $cooktime, "/");
setcookie('email', $_REQUEST['email'], $cooktime, "/");

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
