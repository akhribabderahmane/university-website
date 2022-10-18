<?php
$name= $_POS['name'];
$visitor_email= $_POS['email'];
$subject= $_POS['subject'];
$message= $_POS['message'];


$email_from='la_akhrib@esi.dz';
$subject='new form submission';

$email_body ="User Name :$name.\n";
               "User Name :$visitor_email.\n";
              "User Name :$subject.\n";
"User Name :$message.\n";

$headers="From: $email_from \r\n";
$headers="Reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location:Contact.html" );

?>