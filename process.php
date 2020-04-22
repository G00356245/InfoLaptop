<?php

   $UserName = $_POST['name'];
   $Email = $_POST['email'];
   $Subject = $_POST['subject'];
   $Msg = $_POST['message'];

   $email_from = 'G00356245@gmit.ie';

   $email_subject = "New Form Submission";

   $email_body = "User Name: $UserName.\n".
                                "User Email: $Email.\n".
                                    "User Subject: $Subject.\n".
                                        "User Msg: $Msg.\n";

   $to = "G00356245@gmit.ie";

   $headers = "From: $email_from \r\n";

   $headers .= "Reply-To: $Email \r\n";

   mail($to,$email_subject,$email_body,$headers);

   header("location: contact.html");

?>