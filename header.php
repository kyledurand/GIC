<?php
  include("ref.php");
  ini_set('session.bug_compat_warn', 0);
  ini_set('session.bug_compat_42', 0);
?>

<head>
  <link rel="author" href="https://plus.google.com/114356891358642308105">
  <meta name="author" content="John Gouda">
  <link rel="publisher" href="https://plus.google.com/109851231069854770863">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?= $title; ?></title>
  <meta name="title" content="<?= $title; ?>" />
  <meta name="description" content="<?= $desc; ?>" />
  <meta name="keywords" content="<?= $keywords; ?>" />
  <?
  if ($disallowBots == true) {
    $content = 'noindex';
  } else {
  	$content = 'all';
  }
  ?>
  <meta name="robots" content="<?= $content ?>" />
  <meta name="revisit-after" content="7 days" />
  <meta name="copyright" content="(C) GICMD" />
  <meta http-equiv="Reply-To" content="support@gicmd.com" />
  <meta name="Copyright" content="Copyright GICMD 2013. All Rights Reserved.">
  <meta name="DC.title" content="<?= $title; ?>">
  <meta name="DC.subject" content="Medical Disposal Service Provider">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" type="image/png" href="favicon.png" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>
<link rel="stylesheet" href="css/main.css?v=3">
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-7904252-14', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body class="index " id="welcome" itemscope itemtype="http://schema.org/MedicalWebPage">
  <link itemprop="audience" href="http://schema.org/Clinician" />
  <div class="banner"></div>
  <div class="contents center">
    <header>
      <div class="logo">
        <a href="/">
          <img src="img/logo.png" alt="GIC Medical Disposal - Premium Medical Disposal Service" width="205" height="90" border="0">
        </a>
      </div>

      <div class="nav">
        <div class="search">
         <div class="welcome fl">A BETTER MEDICAL WASTE DISPOSAL ALTERNATIVE</div>
         <div class="phone fr"><?= $to_phone; ?></div>
       </div>

       <div class="clear"></div>

       <ul id="nav">
         <li class="arrow"><a href="About-Us">ABOUT US</a>
           <ul class="aboutSub">
            <li><a href="Who-We-Serve">Who We Serve</a></li>
            <li><a href="faq">FAQ's</a></li>
            <li><a href="Eco-Friendly-Waste-Disposal">ECO Friendly</a></li>
            <li><a href="safe-disposal-of-medical-waste">Safety</a></li>
            <li><a href="Testimonials">Testimonials</a></li>
            <li><a href="Compliance-Training-Program">Compliance Training Program</a></li>
            <li class="noBorder"><a href="Careers">Careers</a></li>
          </ul>
        </li>
        <li class="arrow"><a href="Services">OUR SERVICES</a>
         <ul class="servicesSub">
          <li><a href="Sharps-Disposal">Sharps Disposal</a></li>
          <li><a href="Container-Replacement">Container Replacement Packages</a></li>
          <li><a href="Pharmaceuticals-Disposal">Pharmaceuticals Disposal Services</a></li>
          <li><a href="Pharmaceutical-Recall">Pharmaceutical Returns or Disposal</a></li>
          <li><a href="Chemical-Waste-Disposal">Chemical Disposal Services</a></li>
          <li><a href="Biohazard-Waste-Disposal">Biohazard Waste Disposal</a></li>
          <li><a href="Chemical-Lab-Packing">Chemical Lab Packing</a></li>
          <li class="noBorder"><a href="Sustainability-Services">Sustainability Services</a></li>
        </ul>
      </li>
      <li class="arrow"><a href="Products">PRODUCTS</a>
       <ul class="productsSub">
        <li><a href="Sharps-Containers">Sharps Containers</a></li>
        <li><a href="Biomedical-Waste-Containers">Biomedical Waste Containers</a></li>
        <li><a href="Other-Waste-Containers">Other Waste Containers</a></li>
        <li class="noBorder"><a href="Biomedical-Waste-Bags">Biomedical Waste Bags</a></li>
      </ul>
    </li>
    <li><a href="Global">GLOBAL</a></li>
    <li class="arrow"><a href="Contact-Us">CONTACT US</a>
     <ul class="contactSub">
      <li><a href="Start-Service">Start a Service</a></li>
      <li><a href="Request-Quote">Request a Quote</a></li>
      <li class="noBorder"><a href="Careers">Careers</a></li>
    </ul>
  </li>
</ul>
</div>
</header>
<div class="clear"></div>
