<?php
session_start();
if ( isset($_SESSION['user_id']) ) {
    // Info already in session
} else if ( isset($_COOKIE['user_id']) ) {
    // Pull from cookies to session
    $_SESSION['user_id'] = $_COOKIE['user_id'];
    $_SESSION['valid_profile'] = $_COOKIE['valid_profile'];
    $_SESSION['token'] = $_COOKIE['token'];
    $_SESSION['first_name'] = $_COOKIE['first_name'];
    $_SESSION['last_name'] = $_COOKIE['last_name'];
    $_SESSION['email'] = $_COOKIE['email'];
}
//echo $_COOKIE['user_id'];
if ( isset($_SESSION['valid_profile']) && $_SESSION['valid_profile'] == "0" ) {
    //header('Location: ../../php/pages/dashboard.php');
    die();
}
?>
