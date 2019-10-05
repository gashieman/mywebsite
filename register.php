<?php
   $name = $_REQUEST['name'] ;
   $surname = $_REQUEST['surname'] ;  
   $email = $_REQUEST['email'] ;  
  $cellphone = $_REQUEST['cellphone'] ;
  
   $id = $_REQUEST['id'] ;
   $gender = $_REQUEST['gender'] ;  
   $dateofbirthday = $_REQUEST['dateofbirthday'] ;  
  $dateofbirthmonth = $_REQUEST['dateofbirthmonth'] ;
  $dateofbirthyear = $_REQUEST['dateofbirthyear'] ;
  
   $previous_school = $_REQUEST['previous_school'] ;  
   $center_number = $_REQUEST['center_number'] ;  
  $address = $_REQUEST['address'] ;
  
   $parent_name = $_REQUEST['parent_name'] ;
   $parent_surname = $_REQUEST['parent_surname'] ;  
   $parent_email = $_REQUEST['parent_email'] ;  
  $parent_cellphone = $_REQUEST['parent_cellphone'] ;
   $parent_id = $_REQUEST['parent_id'] ;
   $parent_gender = $_REQUEST['parent_gender'] ;  
  
  $numberofsubjects = $_REQUEST['numberofsubjects'] ;
  $subject1 = $_REQUEST['subject1'] ;
  $subject2 = $_REQUEST['subject2'] ;
  $subject3 = $_REQUEST['subject3'] ;
  $subject4 = $_REQUEST['subject4'] ;
  $subject5 = $_REQUEST['subject5'] ;
  $subject6 = $_REQUEST['subject6'] ;
  $subject7 = $_REQUEST['subject7'] ;
  $subject8 = $_REQUEST['subject8'] ;
  $subject9 = $_REQUEST['subject9'] ;
  $subject10 = $_REQUEST['subject10'] ;
  $subject11 = $_REQUEST['subject11'] ;
  $subject12 = $_REQUEST['subject12'] ;
  $subject13 = $_REQUEST['subject13'] ;
  $subject14 = $_REQUEST['subject14'] ;
  $subject15 = $_REQUEST['subject15'] ;
  $subject16 = $_REQUEST['subject16'] ;
  $subject17 = $_REQUEST['subject17'] ;
  
  mail( "info@stmarysbfs.co.za", "Admission Application Form", 
"Name        	: $name
Surname      	: $surname
Email	     	: $email
Cell Phone    	: $cellphone

ID		     	: $id
Gender  	 	: $gender
D.O.B Day    	: $dateofbirthday
D.O.B Month  	: $dateofbirthmonth
D.O.B Year   	: $dateofbirthyear

Previous School : $previous_school
Center Number  	: $center_number
Address  	 	: $address
No. Subjects  	: $numberofsubjects

Parent Name    	: $parent_name
Surname      	: $parent_surname
Email	     	: $parent_email
Cell Phone    	: $parent_cellphone
ID		     	: $parent_id
Gender  	 	: $parent_gender

Subject 	 	: $subject1
Subject			: $subject2
Subject		  	: $subject3
Subject			: $subject4
Subject 	 	: $subject5
Subject			: $subject6
Subject		  	: $subject7
Subject			: $subject8
Subject 	 	: $subject9
Subject			: $subject10
Subject		  	: $subject11
Subject			: $subject12
Subject 	 	: $subject13
Subject			: $subject14 
Subject			: $subject15
Subject			: $subject16 
Subject			: $subject17  

"); 

 header( "Location: http://stmarysbfs.co.za/thankyou.html" );
  
?>