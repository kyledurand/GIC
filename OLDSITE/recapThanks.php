<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php  
  require_once('assets/recaptchalib.php');
  $privatekey = "6LcwHecSAAAAAMiZsjHot5l0gP2THty3SGzZXoZ";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    //die (header('Location: error.php'));
	echo "error";
  } else {
	  
	  /*content*/
	  echo "Success";
	  
  }
	  ?>
</body>
</html>
