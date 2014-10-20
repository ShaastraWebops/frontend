<?php
session_start();
session_unset();

$cooktime = time()-60*60*24*30;
setcookie('user_id', null, $cooktime, "/");
setcookie('valid_profile', null, $cooktime, "/");
setcookie('token', null, $cooktime, "/");
setcookie('first_name', null, $cooktime, "/");
setcookie('last_name', null, $cooktime, "/");
setcookie('email', null, $cooktime, "/");

header('Location: ../../php/pages/home.php')
?>
