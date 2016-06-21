<?php
  include("components/ref.php");
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
  <link rel="stylesheet" href="css/main.css?v=3">

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
  <?php include 'components/icons.php' ?>
  <link itemprop="audience" href="http://schema.org/Clinician" />
  <div class="banner"></div>
  <div class="contents center">
    <header>
      <div class="header--expanded">
        <div class="logo" itemscope itemtype="http://schema.org/Organization">
          <a itemprop="url" href="http://gicmd.com">
            <span class="is-hidden-and-accessible">Home></span>
            <img itemprop="logo" src="img/logo.png" alt="GIC Medical Disposal - Premium Medical Disposal Service" border="0"/>
          </a>
        </div>

        <div class="nav">
          <div class="search">
            <div class="welcome fl">A BETTER MEDICAL WASTE DISPOSAL ALTERNATIVE</div>
            <div class="phone fr"><?= $to_phone; ?></div>
          </div>

          <div class="clear"></div>
          <?php include 'components/menu.php'; ?>
        </div>
      </div>

      <div class="header--condensed">
        <div class="ui-stack blue-gradient">
          <a class="ui-stack__element--spaced" href="tel:18773083745">
            <span class="is-hidden-and-accessible">Call us</span>
            <svg class="icon icon--medium icon--white">
              <use xlink:href="#icon--phone" />
            </svg>
          </a>

          <div class="ui-stack__element--fill-space logo" itemscope itemtype="http://schema.org/Organization">
            <a itemprop="url" href="http://gicmd.com">
              <span class="is-hidden-and-accessible">Home</span>
              <img itemprop="logo" src="img/logo-inverted.png" alt="GIC Medical Disposal - Premium Medical Disposal Service" border="0"/>
            </a>
          </div>

          <button class="ui-stack__element--spaced button" data="menu-trigger">
            <span class="is-hidden-and-accessible">Open menu</span>
            <svg class="icon icon--medium icon--white">
              <use xlink:href="#icon--menu" />
            </svg>
          </button>
        </div>

        <div class="menu--condensed">
          <button class="button menu-dismiss" data="menu-dismiss">
            <span class="is-hidden-and-accessible">Close menu</span>
            <svg class="icon icon--small icon--slate">
              <use xlink:href="#icon--dismiss" />
            </svg>
          </button>

          <?php $menuVersion = 'condensed' ?>
          <?php include 'components/menu.php'; ?>
        </div>
      </div>
    </header>
    <div class="clear"></div>
