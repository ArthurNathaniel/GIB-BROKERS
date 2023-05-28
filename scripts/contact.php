<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Retrieve form data

    $full_name= $_POST["full_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

   
    $to = "info@example.com";
    $subject = "Contact Information";
    $message = "Full Name: $full_name,  Email: $email, Message: $message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been received and forwarded accordingly. Thank you for contacting us.";
    } else {
        echo "There was an error while sending the message. Please try again";
    }
}
