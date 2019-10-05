<?php
   $name = $_REQUEST['name'] ;
   $email = $_REQUEST['email'] ;  
   $phone = $_REQUEST['phone'] ;  
  $message = $_REQUEST['message'] ;
  
  mail( "info@stmarysbfs.co.za", "Feedback Form Results", 
"Name      : $name
Email      : $email
Phone      : $phone
Message    : $message"); 

 header( "Location: http://stmarysbfs.co.za/thankyou.html" );
?>