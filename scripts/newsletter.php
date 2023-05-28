<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Retrieve form data
    $email = $_POST["email"];

    $to = "info@example.com";
    $subject = "Newsletter Subscription";
    $message = "Email: $email,";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for subscribing. Stay tuned for updates!";
    } else {
        echo "There was an error while subscribing. Please try again";
    }
}
