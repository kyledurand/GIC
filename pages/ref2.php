<?
// first check session/cookies to make sure 
// these variables haven't already been set
// if so, get from cookies/session

$tracking_number = false;
$to_phone = "1-877-244-8828"; // default 
$to_email = "";

if (!empty($_SESSION['source'])) {
  // variable already set, so load them
  	$source = $_SESSION['source'];
	$to_phone = $_SESSION['to_phone'];
	$to_email = $_SESSION['to_email'];
  
} else {
	// no session varaibles, check cookies
	if (!empty($_COOKIE['source'])) {
	  // there's a cookie, so read from it
		$_SESSION['source'] = $_COOKIE['source'];
		$_SESSION['to_phone'] = $_COOKIE['to_phone'];
		$_SESSION['to_email'] = $_COOKIE['to_email'];
		
	} else {
		// no cookies, must be first load, detect source
		
		// first check if from Campaign
		
		if ($_GET['utm_campaign']=="Convurgency") {
			// if they've come from a paid or linked campaign of ours
		
			$tracking_number = true;
			$franchise = $_GET['utm_content'];
		
		} else {
			if (OrganicSearchVisitor()) {
			// if they've come from organic search
			// get landing page URL, exclude branded pages
		
			$os = array("Mac", "NT", "Irix", "Linux");
			
			if ($branded_lp) {
				// if they're branded use their own #
			$tracking_number = false;
			} else {
				$tracking_number = true;
			}
		
			} else {
			// not paid, not organic, so either direct or linked
				$tracking_number = false;
			}
			
			
			$to_phone = ($tracking_number) ? "1-800-707-2211" : "1-877-244-8828";
			$to_email = ($tracking_number) ? "info@gicmd.com" : "ask@gicmd.com"; // need to create
			$source = ($tracking_number) ? "9thCO" : "Direct"; // need to create
			
			// set cookies
			setcookie("source", $source, time() + (60 * 60 * 24 * 30), '/', '.gicmd.com');
			setcookie("to_email", $to_email, time() + (60 * 60 * 24 * 30), '/', '.gicmd.com');
			setcookie("to_phone", $to_phone, time() + (60 * 60 * 24 * 30), '/', '.gicmd.com');
			
			// set session variables
			$_SESSION['source'] = $_COOKIE['source'];
			$_SESSION['to_phone'] = $_COOKIE['to_phone'];
			$_SESSION['to_email'] = $_COOKIE['to_email'];
		}
		
	}

function OrganicSearchVisitor() {
	
	if ($_SERVER['HTTP_REFERER']=="") return false;
	
	// see if they've come from organic search
	$engines = array("google.", "bing.", "msn.", "yahoo.", "ask.");
	
	// get referring domain
	$uri = parse_url($_SERVER['HTTP_REFERER']);
    $domain = str_replace("www.", "", strtolower($uri['host']));
    //Echo $domain;
	
	$isOrganic = (in_array($domain, $engines));
	return $isOrganic;

}

// use the $to_phone variable throughout the site so it's consistent

?>