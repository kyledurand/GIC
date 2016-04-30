<?

  $title = "GIC Medical Disposal - Premium Medical Disposal Service";
  $desc = "We are Canada's Medical Disposal company dedicated to providing compliant, efficient and personalized unparalleled solutions tailored to any client's needs.";

?>

<?php include 'header.php'; ?>
<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'custom',
    custom_theme_widget: 'recaptcha_widget'
 };
</script>
<style type="text/css">
#recaptcha_image {
	width: 273px !important;
}
#recaptcha_image img {
	width: 275px !important;
	border: 1px solid;
	border-color: #B1B1B1;
}
.recaptcha_only_if_image {
	font-family: Arial, Helvetica, sans-serif !important;
	font-size: 8px !important;
	text-transform: uppercase;
}
#recaptcha_audio_play_again {
	font-family: Arial, Helvetica, sans-serif !important;
	font-size: 8px !important;
	text-transform: uppercase;
}
#recaptcha_audio_download {
	font-family: Arial, Helvetica, sans-serif !important;
	font-size: 8px !important;
	text-transform: uppercase;
	float: right;
}
input.parsley-success, textarea.parsley-success {
	color: #468847 !important;
	background-color: #DFF0D8 !important;
	border: 1px solid #D6E9C6 !important;
}
input.parsley-error, textarea.parsley-error {
	color: #B94A48 !important;
	background-color: #F2DEDE !important;
	border: 1px solid #EED3D7 !important;
}
</style>
<div class="shadow mainImage center mgnT14"><img src="img/contact.jpg" width="960" height="107" alt="Contact Us for your Medical Waste Disposal Needs"></div>

<br>

<div class="clear"></div>

<div class="contentBox mgnBI">

  <div class="contentLeft">

    <h1>Request a Free Quote</h1><div class="lineRuleSolid"></div>

    <div id="left">

        <p>Want to experience the GIC advantage? Contact us today for a no-obligation quote. Have Questions? We would like to hear from you.</p>

        <p><strong>Feel free to email us at <a href="mailto:<?= $to_email; ?>"><?= $to_email; ?></a>, call us toll free at 1-877-244-8828, or fill out the form below.</strong></p>

        <p>You may also choose to use our contact form. Simply fill in the fields below and one of GIC Medical Disposal&rsquo;s experts will respond to you in a timely fashion. Please ensure that all necessary fields are completed to help us contact you promptly. Your information is private and is only used as a point of contact.        </p>

<div class="contact">



  <script type="text/javascript" src="js/parsley.js"></script>
  <form data-validate="parsley" method="post" action="formmail" name="Free Quote Request">
    <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
    <input type="hidden" name="csvfile" value="formdata.csv" />
    <input type="hidden" name="csvcolumns" value="Email,Name,Phone,Message" />
    <input type="hidden" name="recipients" value="<?= $to_email; ?>" /> 
    <input type="hidden" name="lead_source" value="<?= $source; ?>" />

    <input type="hidden" name="good_url" value="Thank-You.php" />
    <input type="hidden" name="bad_url" value="Sorry.php" />
    
    <!-- STEP 3: Specify required fields in the 'required' value - or leave unchanged.
            NOTE: DO NOT put your email address and name here.
            "Your email address" and "Your name" are error messages for your users to see,
            not placeholders for you to replace.
    --> 
    <!-- STEP 4: Put your subject line in the 'subject' value. -->
    <input type="hidden" name="subject" value="Free Quote Request" />
    
    <!-- ALL DONE! Visit our site for HOW TO guides and more complex features. --> 
    
    <!-- this derives (creates) "email" and "realname" special fields from the input fields -->
    <input type="hidden" name="derive_fields" value="imgverify=recaptcha_response_field,email=Email,realname=Name" />
    
    <!-- this excludes the "email" and "realname" special fields from the body of the email you receive -->
    <input type="hidden" name="mail_options" value="Exclude=Email;Name" />
    <table border="0">
      <tr>
        <td><input placeholder="email address" type="text" size="31" id="Email" name="Email" value="" data-trigger="change" data-required="true" data-type="email"></td>
      </tr>
      <tr>
        <td><input placeholder="Name" type="text" size="31" name="Name" value="" data-required="true"></td>
      </tr>
      <tr>
        <td><input placeholder="Phone Number" type="text" size="31" name="Phone" value="" data-required="true" data-trigger="change" data-type="phone"></td>
      </tr>
      <tr>
        <td><textarea placeholder="What would you like a quote for?" cols="31" rows="2" name="Message" data-trigger="keyup" data-rangelength="[0,200]"></textarea></td>
      </tr>
      <tr>
        <td align="left"><div id="recaptcha_widget" style="display:none; width:275px !important;">
            <div id="recaptcha_image"></div>
            <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>
            <input placeholder="Enter the words above:" type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
            <div><a style="font-family:Arial, Helvetica, sans-serif; font-size:8px; text-transform:uppercase; float:left;" href="javascript:Recaptcha.reload()">Get another CAPTCHA</a></div>
            <div class="recaptcha_only_if_image"><a style="float:right;" href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
            <div class="recaptcha_only_if_audio"><a style="font-family:Arial, Helvetica, sans-serif; font-size:8px; text-transform:uppercase; float:right;" href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
          <div class="clear"></div>
          <script type="text/javascript"
    src="http://www.google.com/recaptcha/api/challenge?k=6LcwHecSAAAAAKmhbY9eobgGqFggpaBycs17gct6">
 </script>
          <noscript>
          <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LcwHecSAAAAAKmhbY9eobgGqFggpaBycs17gct6"
        height="300" width="275" frameborder="0"></iframe>
          <br>
          <textarea name="recaptcha_challenge_field" rows="3" cols="40">
   </textarea>
          <input type="hidden" name="recaptcha_response_field" value="manual_challenge">
          </noscript></td>
      </tr>
      <tr>
        <td align="center"><input class="bigGreenButton ac" type="submit" value="GET A FREE QUOTE"></td>
      </tr>
    </table>
  </form>



</div></div>

    <br>

    <div class="clear"></div>

  </div>

  <?php include 'rightAlt.php'; ?>

  <?php include 'footer.php'; ?>