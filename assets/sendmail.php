<?php
//if "email" variable is filled out, send email
  
  
  //Email information
  $to = "indulekhaharidas2000@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $subject="Enquiry From Vectrexx Website";
  $message = "\nHi Admin,";
         $message .= "\nPlease find the details below.";         
         $message .= "\n\nName:".$name;
         $message .= "\nEmail:".$email;
         $message .= "\nSubject:".$subject;
         $message .= "\nMessage:".$message;
         $header = "From:indulekhaharidassizcom@gmail.com\r\n";
       	 // $header = "Cc: \r\n";
         // $header = "BCc:\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
  //send email
 $retval = mail ($to,$subject,$message);
 if($retval==1)
 {
	header("Location:contact.html");
 } 
 else
 {
	 echo "Something went wrong! Mail senting failed........";
 }
  //Email response
 //echo json_encode($_POST);
 ?>