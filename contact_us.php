<?php
   $name = $_REQUEST['name'] ;
   $email = $_REQUEST['email'] ;  
   $phone = $_REQUEST['phone'] ;  
  $message = $_REQUEST['message'] ;
  
  mail( "gashirai@gmail.com", "Feedback Form Results", 
"Name      : $name
Email      : $email
Phone      : $phone
Message    : $message"); 

 header( "Location: http://stmarysbfs.co.za/thankyou.html" );
?>