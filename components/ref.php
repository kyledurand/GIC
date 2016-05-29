<?php ob_start();

//session_start();

// first check session/cookies to make sure 
// these variables haven't already been set
// if so, get from cookies/session

$tracking_number = false;
$to_phone = "1-877-244-8828"; // default 
$to_email = "info@gicmd.ca";

/*
if (!empty($_SESSION['source'])) {
  // variable already set, so load them
    //echo "blah";	
  	$source = $_SESSION['source'];
	$to_phone = $_SESSION['to_phone'];
	$to_email = $_SESSION['to_email'];
  
} else { 

*/
// session not working, use cookies

	//echo $_COOKIE['source'];
	// no session varaibles, check cookies
	if (!empty($_COOKIE['source'])) {
		//echo "blah";
	  // there's a cookie, so read from it
		$_SESSION['source'] = $_COOKIE['source'];
		$_SESSION['to_phone'] = $_COOKIE['to_phone'];
		$_SESSION['to_email'] = $_COOKIE['to_email'];
			
		$source = $_COOKIE['source'];
		$to_phone = $_COOKIE['to_phone'];
		$to_email = $_COOKIE['to_email'];
		//echo $_SESSION['to_email'];
		
	} else {
		// no cookies, must be first load, detect source
		
		// first check if from Campaign
		
		if (($_GET['utm_campaign']=="Convurgency") || ($_GET['gclid']!="")) {
			// if they've come from a paid or linked campaign of ours
			$tracking_number = true;
		
		} else {
			if (OrganicSearchVisitor()) {
			  // if they've come from organic search
			  // get landing page URL, exclude branded pages
				//echo "blah";
				$tracking_number = (!BrandedPage());			
			}
		}
		
		// new set cookies etc
			
		$to_phone = ($tracking_number) ? "1-800-707-2211" : "1-877-244-8828";
		$to_email = ($tracking_number) ? "john.gouda@gicmd.ca" : "info@gicmd.ca"; // need to create
		$source = ($tracking_number) ? "9thCO" : "Direct"; // need to create
		
		//echo "blah";
		
		// set cookies
		//below three lines are commented, because it was throwing header warning in home page
		//setcookie("source", $source, time() + (60 * 60 * 24 * 30), '/', '.gicmd.com');
		//setcookie("to_email", $to_email, time() + (60 * 60 * 24 * 30), '/', '.gicmd.com');
		//setcookie("to_phone", $to_phone, time() + (60 * 60 * 24 * 30), '/', '.gicmd.com');
		
		// set session variables
		$_SESSION['source'] = $_COOKIE['source'];
		$_SESSION['to_phone'] = $_COOKIE['to_phone'];
		$_SESSION['to_email'] = $_COOKIE['to_email'];
		
	}
// } // uncomment if using session

function OrganicSearchVisitor() {
	
	if ($_SERVER['HTTP_REFERER']=="") return false;
	
	// see if they've come from organic search
	$engines = array("google", "bing", "msn", "yahoo", "ask");
	
	// get referring domain
	$uri = parse_url($_SERVER['HTTP_REFERER']);
    $domain = str_replace("www.", "", strtolower($uri['host']));

	$parts = explode(".", $domain); 
	
	$notld = $parts[0]; 
	
    //echo $notld;
	
	$isOrganic = (in_array($notld, $engines));
	
	//echo (in_array($notld, $engines));
	
	return $isOrganic;

}

function BrandedPage() {
	
	// see if they've come to a branded page
	$pages = array("index.php", "About-Us.php", "Contact-Us.php");
	
	// get referring domain
	$page = basename($_SERVER['SCRIPT_FILENAME']);
    //echo $page;
	
	$isBranded = (in_array($page, $pages));
	return $isBranded;

}

// use the $to_phone variable throughout the site so it's consistent
ob_end_flush();
?>