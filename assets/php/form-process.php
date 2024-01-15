<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $EmailTo = "codewithkiash@gmail.com";
    $bodySubject = "New Message Received";

    $Body = "";
    $Body .= "Name: ";
    $Body .= $name;
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";
    $Body .= "Phone Number: ";
    $Body .= $phone_number;
    $Body .= "\n";
    $Body .= "subject: ";
    $Body .= $subject;
    $Body .= "\n";
    $Body .= "Message: ";
    $Body .= $message;
    $Body .= "\n";

    $success = mail($EmailTo, $bodySubject, $Body);

    if ($success){
       echo "success";
    }else{
        echo "Something went wrong :(";
    }
}
?>