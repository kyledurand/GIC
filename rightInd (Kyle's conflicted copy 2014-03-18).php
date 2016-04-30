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
<div class="contentRight">

  <h3>Contact Us!</h3>
  <div class="lineRuleSolid"></div>
  <script type="text/javascript" src="js/parsley.js"></script>
  <form id="form1" data-validate="parsley" method="post" name="form1">
    <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
    <input type="hidden" name="csvfile" value="formdata.csv" />
    <input type="hidden" name="csvcolumns" value="Email,Name,Phone,Message" />
    <input type="hidden" name="recipients" value="john.gouda@gicmd.ca" /> 
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
        <td><textarea placeholder="What would you like a quote for?" cols="31" rows="2" name="Message" data-trigger="keyup" data-rangelength="[0,800]"></textarea></td>
      </tr>
      <tr>
        <td align="left" valign="middle">
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
							f.action="formmail";
							f.submit();
						} else {
							alert("Incorrect number, please check the anti-spam field.");
						}
					  }
					  </script>
        </td>
      </tr>
      <tr>
        <td align="center"><input onclick="checkAdd();" class="bigGreenButton ac" type="submit" value="GET A FREE QUOTE"></td>
      </tr>
    </table>
  </form>
  <h3 class="social mgnT14">Social</h3>
  <div class="lineRuleSolid"></div>
  <!--social plugins--> 
  <a href="https://twitter.com/GICMD_info" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @GIC</a> 
  <script type="text/javascript"><!--
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
// --></script> 
  <script type="text/javascript"><!--
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
// --></script>
  <div style="margin-left:5px;" class="fb-like" data-href="http://www.facebook.com/pages/GIC-Medical-Disposal/174627482625368" data-send="false" data-layout="button_count" data-width="80px" data-show-faces="true"></div>
  
  <!-- Google Plus - Place this tag where you want the +1 button to render -->
  <g:plusone size="small" href="http://www.gicmd.com"></g:plusone>
  
  <!-- Place this render call where appropriate --> 
  <script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script> 
  <!--end social plugins-->
  <h3 class="mgnT14">Who We Serve</h3>
  <div class="lineRuleSolid"></div>
  <div id="banner-fade"> 
    <!-- start Basic Jquery Slider -->
    <ul class="bjqs">
      <li>Hospitals</li>
      <li>Medical Practices</li>
      <li>Dental Offices</li>
      <li>Veterinary Clinics</li>
      <li>Nursing Homes</li>
      <li>Outpatient Clinics</li>
      <li>Pharmacies and Pharmaceutical Laboratories</li>
      <li>Dialysis Centres</li>
      <li>Medical Laboratories</li>
      <li>Long-term Care Facilities</li>
      <li>Emergency Services (paramedics and ambulance  companies)</li>
      <li>Funeral Homes</li>
      <li>Blood Banks</li>
      <li>Surgical Centres</li>
      <li>Day Clinics</li>
      <li>Cosmetic Facilities (including spa, tattoo  parlours)</li>
    </ul>
  </div>
  <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 80,
            width       : 280,
            responsive  : true,
			automatic : true,
			showmarkers : false,
			showcontrols : false,
			centermarkers : false,
			randomstart : true, // show next and prev controls
			animspeed : 1800
          });
        });
      </script>
  <div class="clear"></div>
</div>
<div class="clear"></div>
</div>
