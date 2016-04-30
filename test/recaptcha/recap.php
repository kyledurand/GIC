<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Recaptcha</title>
</head>

<body>

<form method="post" name="myform" action="recapThanks.php">
<?php   
	require_once('assets/recaptchalib.php');
	$publickey = "6LcwHecSAAAAAKmhbY9eobgGqFggpaBycs17gct6"; 
	// you got this from the signup page
	echo recaptcha_get_html($publickey);
?>
<input class="submit" type="submit" name='submit' value="submit">
</form>

</body>
</html>
