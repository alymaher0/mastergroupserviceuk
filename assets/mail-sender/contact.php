<?php


// Taking all values
$name 		= $_POST['name'];
$email 		= $_POST['email'];
$phone 		= $_POST['phone'];
$category 	= $_POST['category'];
$msg 		= $_POST['msg'];
$output 	= "Name: ".$name."\n\nEmail: ".$email."\n\nPhone: ".$phone."\n\nCategory: ".$category."\n\nMessage: ".$msg;
$to 		= 'info@mastergroupserviceuk.com';
$headers    = "MIME-Version: 1.0" . "\r\n";
$headers   .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers   .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers    = 'FROM: "'.$email.'"';

/* $send = mail($to, $name, $output."\n\n***This message has been sent from Hexa", $headers); */




