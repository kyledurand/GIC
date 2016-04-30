<?php

######################################################
#              	Configuration Settings		     #
######################################################

// WHERE THE AUTORESPONDER WILL APPEAR TO BE SENT FROM
$config['from'] = 'GIC Medical Disposal <autorespond@gicmd.ca>';

// WHERE THE FORM SUBMISSIONS ARE SENT
$config['admin_email'] = 'v.mazic@nope.ca';

// THANK YOU PAGE URL
$config['thankyou_page'] = 'index.html';

// CONTACT FORM SUBJECT
$config['admin_subject'] = 'GIC Medical Disposal Contact Form Submission';

// SUBJECT AND MESSAGE OF THE AUTORESPONDER
$config['user_subject'] = 'GIC Medical Disposal';
$config['user_message'] = 'Thank you for submitting the contact form on our website. We will try our best to respond within the next 24 hours.';

#-----------------------------------------------------#
#  You don't have to edit anything beneath this line  #
#-----------------------------------------------------#

// the page where the errors are shown. %error% is the place where
// the error will appear
$config['error_template']       = 
'<html><head><title>Errors</title></head><body>
<h1>Incomplete form</h1>
<strong>%error%</strong>. Please <a href="javascript:history.go(-1)">go back</a>.
</body></html>';

// error message when some required fields are not present. %missing% will be
// replaced by a list of incomplete fields
$config['error_incomplete'] = "Please fill in all the required fields. You're missing: %missing%";

// error message when the email is invalid. %email% will be replaced by the email address
$config['error_email'] = 'The email address "%email%" is invalid';


######################################################
#           End Of Configuration Settings	     #
######################################################

?>
