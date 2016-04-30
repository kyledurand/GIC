<?php

session_start();

$_SESSION = array();

include("Captcha/simple-php-captcha.php");

$_SESSION['captcha'] = simple_php_captcha();

echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';    	

?>

