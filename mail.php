<?php

$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$message = "Le message de  ".$email." est: ".$message;

$to_email = "salahelfi@gmail.com";
$headers = "From: sender\'s email";

if (!empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['subject'])){
    if (mail($to_email, $subject, $message, $headers)) {
        echo json_encode(array('success' => 1));
    }  
}
else{
    echo json_encode(array('success' => 0));
}
