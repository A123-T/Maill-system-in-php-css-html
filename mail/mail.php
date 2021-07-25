<?php

$to_email = "Enter Your mail which you send ";

$subject = "simple Email Test via php";

$body = "Hi, $to_email  . Click here too active your account . http://localhost/verify/activate.php?token=000000";

$headers = "From: Enter your mail from which you send";

if(mail($to_email, $subject, $body, $headers))
{
    echo "Email sucessfully send to  $to_email ....";
}
else
{
         echo "Email not send.........";
}

?>