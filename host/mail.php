<?php
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];       
    $from="From: $name<$email>\r\nReturn-path: $email";
    $subject="Message sent using your contact form";
    mail("youremail@yoursite.com", $subject, $message, $from);
    echo "Email sent!";  
?>% 
