<?php

if(isset($_REQUEST['submit']))
{
    $reciever = 'ogalamuctar2019@gmail.com';
    $name = $_REQUEST['name'];
    $sender = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    $header = "From: $sender";

    if($name && $sender && $subject && $message)
    {
        mail($name,$sender,$subject,$message,$header);
        echo "Your Mail Was Sent";
        header('refresh: ./index.html');
    }else
    {
        echo 'All Fields Required';
    }
}

?>