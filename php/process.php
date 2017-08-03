<?php
$name = $_POST["name"];
$email = $_POST["email"];
$comments = $_POST["comments"];
 
$EmailTo = "info@scottpignatelli.com";
$Subject = "New Message Received from ScottPignatelli.com";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Comments: ";
$Body .= $comments;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>