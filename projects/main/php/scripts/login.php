<?php
session_start();

if ( !isset($_POST['user_id']) || !isset($_POST['email'])
	|| !isset($_POST['first_name']) || !isset($_POST['last_name']) )
	header('Location: ../pages/500.php')

$_SESSION['user_id'] = $_POST['user_id'];
//$_SESSION['shaastra_id'] = $_POST['shaastra_id'];
$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['email'] = $_POST['email'];

header('Location: ../pages/dashboard.php')
?>