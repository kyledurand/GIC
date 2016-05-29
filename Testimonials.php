<?

  $title = "GIC Medical Disposal Testimonials";
  $desc = "";

?>
<?php include 'header.php'; ?>
<div class="shadow mainImage center mgnT14"><img src="img/contact.jpg" width="960" height="107" alt="Contact Us for your Medical Waste Disposal Needs"></div>
<br>
<div class="clear"></div>
<div class="contentBox mgnBI">
  <div class="contentLeft">
    <h1>Testimonials</h1><div class="lineRuleSolid"></div>
    <div id="left">
        <p>Want to experience the GIC advantage? Contact us today for a no-obligation quote. Have Questions? We would like to hear from you.</p>
        <p><strong>Feel free to email us at <a href="mailto:info@gicmd.ca">info@gicmd.ca</a>, call us toll free at 1-877-244-8828, or fill out the form below.</strong></p>
        <p>You may also choose to use our contact form. Simply fill in the fields below and one of GIC Medical Disposal&rsquo;s experts will respond to you in a timely fashion. Please ensure that all necessary fields are completed to help us contact you promptly. Your information is private and is only used as a point of contact.        </p>
<div class="contact">

<form method="post" action="formmail" name="test">
    <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />

    <input type="hidden" name="recipients" value="kyledurand@gmail.com" />
    
    <input type="hidden" name="good_url" value="Thank-You.php" />
    <input type="hidden" name="bad_url" value="Sorry.php" />

    <!-- STEP 3: Specify required fields in the 'required' value - or leave unchanged.
            NOTE: DO NOT put your email address and name here.
            "Your email address" and "Your name" are error messages for your users to see,
            not placeholders for you to replace.
    -->
    <input type="hidden" name="required" value="EmailAddr:Your email address,FullName:Your name" />

    <!-- STEP 4: Put your subject line in the 'subject' value. -->
    <input type="hidden" name="subject" value="Free Quote Request" />

    <!-- ALL DONE! Visit our site for HOW TO guides and more complex features. -->

    <!-- this derives (creates) "email" and "realname" special fields from the input fields -->
    <input type="hidden" name="derive_fields" value="email=EmailAddr,realname=FullName" />

    <!-- this excludes the "email" and "realname" special fields from the body of the email you receive -->
    <input type="hidden" name="mail_options" value="Exclude=email;realname" />
    
    <table border="0">
      <tr>
        <td><input placeholder="email address" type="text" size="31" name="EmailAddr" value=""></td>
      </tr>
      <tr>
        <td><input placeholder="name" type="text" size="31" name="FullName" value=""></td>
      </tr>
      <tr>
        <td><input placeholder="phone number" type="text" size="31" name="PhoneNum" value=""></td>
      </tr>
      <tr>
        <td><textarea placeholder="message" cols="31" rows="5" name="Message"></textarea></td>
      </tr>
      <tr><td>
</td></tr>
      <tr>
        <td align="center"><input class="bigGreenButton ac" type="submit" value="SEND"></td>
      </tr>
    </table>
  </form>

</div></div>
    <br>
    <div class="clear"></div>
  </div>
  <?php include 'components/right.php'; ?>
  <?php include 'components/footer.php'; ?>
