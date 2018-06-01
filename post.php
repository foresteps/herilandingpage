<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "genuseinbox@gmail.com";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $message = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$name","$subject", $message, 

"From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  } 

?>