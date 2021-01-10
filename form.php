<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $message = $_Post['message'];


    $email_form = 'aksharasarfare28@gmail.com';

    $email_subject = "New form submission";

    $email_body = "User_name: $name.\n".
                  "User_email: $visitor_email.\n".
                  "User_message: $message.\n";

    $to = 'aksharasarfare@gmail.com''

    $headers = "From: $email_from \r\n";

    $headers = "$Reply_to : $visitor_email \r\n"

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");

?>
