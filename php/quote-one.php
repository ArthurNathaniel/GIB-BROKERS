<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $full_name = $_POST["full_name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $claims = $_POST["claims"];
    // Email details
    $to = "info@example.com";
    $subject = "Claims Report";
    $message = "Full Name: $full_name,  Phone Number: $phone_number, Email: $email, Claims: $claims";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your request has been successfully sent.";
    } else {
        echo "There was an error while sending your request.";
    }
}
