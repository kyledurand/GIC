<?



  $title = "Start a new Service with GIC Medical Disposal Today";

  $desc = "";



?>

<?php include 'header.php'; ?>

<script type="text/javascript">

 var RecaptchaOptions = {

    theme : 'custom',

    custom_theme_widget: 'recaptcha_widget'

 };

</script>

<style type="text/css">

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



<div class="contentBox">



  <div class="contentLeft">



    <h1>Start a Service</h1>



    <div id="left">



        <p>Want to experience the GIC advantage? Contact us today for a no-obligation quote. Have Questions? We would like to hear from you.</p>



        <p><strong>Feel free to email us at <a href="mailto:info@gicmd.ca">info@gicmd.ca</a>, call us toll free at 

          <?= $to_phone; ?>

        , or fill out the form below.</strong></p>



        <p>You may also choose to use our contact form. Simply fill in the fields below and one of GIC Medical Disposal&rsquo;s experts will respond to you in a timely fashion. Please ensure that all necessary fields are completed to help us contact you promptly. Your information is private and is only used as a point of contact.        </p>



<div class="contact">







  <script type="text/javascript" src="js/parsley.js"></script>

  <form id="form1" name="form1" class="form" data-validate="parsley" method="post" action="formmail">

    <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />

    <input type="hidden" name="csvfile" value="formdata.csv" />

    <input type="hidden" name="csvcolumns" value="Email,Name,Phone,Message" />

	<input type="hidden" name="recipients" value="service@gicmd.ca" /> 
    
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

        <td><input placeholder="Phone Number" type="text" size="31" name="Phone" value="" data-required="true" data-trigger="change" data-type="number"></td>

      </tr>

	<tr>

        <td><input placeholder="Type of waste" type="text" size="31" name="Type of Waste" value="" data-required="true" data-trigger="change"></td>

      </tr>

       <tr>

        <td><input placeholder="Volume of waste" type="text" size="31" name="Volume of waste" value="" data-required="true" data-trigger="change"></td>

      </tr>

   	<tr>

        <td><input placeholder="HWIN Registration Number(Optional)" type="text" size="31" name="HWIN Number" value=""></td>

      </tr>

   	<tr>

        <td><input placeholder="Name of Facility" type="text" size="31" name="Name of Facility" value="" data-required="true" data-trigger="change"></td>

      </tr>

      <tr>

        <td><textarea placeholder="Message" cols="31" rows="2" name="Message" data-trigger="keyup" data-rangelength="[0,200]"></textarea></td>

      </tr>

      <tr>

        <td align="left" valign="middle" class="captcha">
			<span style="font-family:Arial, Helvetica, sans-serif; color:grey; font-size:11px;"> Anti-spam: what's <span id="num1"></span> + <span id="num2"></span>?</span>
					  <input style="margin-left:10px; width:42px; margin-bottom:5px;" type="text" id="sum" maxlength="80" name="sum" size="4" />
					  <script type="text/javascript" language="javascript">
					  var num1=Math.floor(Math.random()*11);
					  var num2=Math.floor(Math.random()*11);
					  
					  document.getElementById("num1").innerHTML = num1;
					  document.getElementById("num2").innerHTML = num2;
					  
					  function checkAdd() {
						f = document.form1;
						var sum = parseInt(f.sum.value);
						if (sum == (num1+num2)) {
							f.action="maily";
							//f.action="formmail";
							f.submit();
						} else {
							alert("Incorrect number, please check the anti-spam field.");
						}
					  }
					  </script>
        </td>      </tr>

      <tr>

        <td align="center"><input onclick="checkAdd();" class="bigGreenButton ac" type="submit" value="GET A FREE QUOTE"></td>

      </tr>

    </table>

  </form>







</div></div>



    <br>



    <div class="clear"></div>



  </div>



  <?php include 'rightAlt.php'; ?>



  <?php include 'footer.php'; ?>