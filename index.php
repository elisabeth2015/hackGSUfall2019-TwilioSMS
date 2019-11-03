<?php

include './vendor/autoload.php';

if(isset($_POST['mobile'])  && isset($_POST['msg'])){


    //twilio
    $sid = '';
    $token = '';

    $client = new Twilio\Rest\Client($sid, $token);
    $message = $client->message->create(
        $_POST['mobile'], array(
            'from' => '+89524572',
            'body' => $_POST['msg']
        )
    );
    

    if ($message->sid){
        echo "Message sent!";

    }




    
}

?>

<h2>Sending SMS Using Twilio api</h2>

<form action "" method "post">
    Enter Mobile:<br>
    <input type "text" placeholder "Mobile Number" name "Mobile"><br>

    Message<br>
    <textarea placeholder "Message" name "msg"></textarea>
 
    <input type "submit" value "send">
 </form>

