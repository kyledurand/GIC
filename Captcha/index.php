<?php

session_start();

$_SESSION = array();

include("Captcha/simple-php-captcha.php");

$_SESSION['captcha'] = simple_php_captcha( array(
	'min_length' => 5,
	'max_length' => 5,
	'characters' => 'ABCDEFGHJKLMNPRSTUVWXYZabcdefghjkmnprstuvwxyz23456789',
	'min_font_size' => 18,
	'max_font_size' => 18,
	'color' => '#666',
	'angle_min' => 0,
	'angle_max' => 0,
	'shadow' => true,
	'shadow_color' => '#fff',
	'shadow_offset_x' => -2,
	'shadow_offset_y' => 2
));

echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';    	

?>

