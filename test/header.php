<? include("ref.php"); ?>
<!doctype html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?= $title; ?></title>
<meta name="title" content="<?= $title; ?>" />
<meta name="description" content="<?= $desc; ?>" />
<meta name="robots" content="all" />
<meta name="revisit-after" content="7 days" />
<meta name="copyright" content="(C) GICMD" />
<meta http-equiv="Reply-To" content="support@gicmd.com" />
<meta name="Copyright" content="Copyright GICMD 2013. All Rights Reserved.">
<meta name="DC.title" content="<?= $title; ?>">
<meta name="DC.subject" content="Medical Disposal Service Provider">
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/png" href="favicon.png" />
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<meta name="viewport" content="width=device-width">
<link href="css/slides.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/slides.min.jquery.js"></script>
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'fade',
				crossfade: true,
				play: 4500,
				pause: 2500,
				hoverPause: true
			});
		});
	</script>
<script type="text/javascript">
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function() {
	var sfEls = document.getElementById("nav").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]>
</script>
</head>
<body class="index " id="welcome" itemscope itemtype="http://schema.org/MedicalWebPage">
<link itemprop="audience" href="http://schema.org/Clinician" />
<div class="banner"></div>
<div class="contents center">
  <header>
    <div class="logo fl"><a href="/"><img src="img/logo.png" alt="GIC Medical Disposal - Premium Medical Disposal Service" width="205" height="90" border="0"></a></div>
    <div class="nav fr">
      <div class="search">
        <div class="welcome fl">WELCOME TO A BETTER MEDICAL WASTE DISPOSAL ALTERNATIVE</div>
        <div class="phone fr"><?= $to_phone; ?></div>
      </div>
      <div class="clear"></div>
      <ul id="nav">
        <li class="arrow"><a href="About-Us.php">ABOUT US</a>
          <ul class="aboutSub">
          	<li><a href="Who-We-Serve.php">Who We Serve</a></li>
            <li><a href="faq.php">FAQ's</a></li>
            <li><a href="Eco-Friendly.php">ECO Friendly</a></li>
            <li><a href="Safety.php">Safety</a></li>
            <li><a href="Testimonials.php">Testimonials</a></li>
            <li><a href="Compliance-Training-Program.php">Compliance Training Program</a></li>
            <li class="noBorder"><a href="Careers.php">Careers</a></li>
          </ul>
        </li>
        <li class="arrow"><a href="Services.php">OUR SERVICES</a>
          <ul class="servicesSub">
            <li><a href="Sharps-Disposal.php">Sharps Disposal</a></li>
            <li><a href="Sharps-Home-Disposal.php">Sharps Home Disposal</a></li>
            <li><a href="Container-Replacement.php">Container Replacement Packages</a></li>
            <li><a href="Pharmaceuticals-Disposal.php">Pharmaceuticals Disposal Services</a></li>
            <li><a href="Chemical-Waste-Disposal.php">Chemical Disposal Services</a></li>
            <li><a href="Biohazard-Waste-Disposal.php">Biomedical Waste</a></li>
            <li><a href="Chemical-Lab-Packing.php">Chemical Lab Packing</a></li>
            <li class="noBorder"><a href="Liquid-Waste-Environmental.php">Liquid Waste &amp; Environmental</a></li>
          </ul>
        </li>
        <li class="arrow"><a href="Products.php">PRODUCTS</a>
          <ul class="productsSub">
            <li><a href="Sharps-Containers.php">Sharps Containers</a></li>
            <li><a href="Biomedical-Waste-Containers.php">Biomedical Waste Containers</a></li>
            <li><a href="Other-Waste-Containers.php">Other Waste Containers</a></li>
            <li class="noBorder"><a href="Biomedical-Waste-Bags.php">Biomedical Waste Bags</a></li>
          </ul>
        </li>
        <li><a href="Global.php">GLOBAL</a></li>
        <li class="arrow"><a href="Contact-Us.php">CONTACT US</a>
          <ul class="contactSub">
            <li><a href="Start-Service.php">Start a Service</a></li>
            <li><a href="Request-Quote.php">Request a Quote</a></li>
            <li class="noBorder"><a href="Careers.php">Careers</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </header>
<div class="clear"></div>