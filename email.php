<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $address = $_POST["address"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $claims = $_POST["claims"];
    // Email details
    $to = "info@example.com";
    $subject = "Claims Report";
    $message = "First Name: $first_name, Middle Name: $middle_name, Last Name: $last_name, Address: $address, Number: $number, Email: $email, Claims: $claims";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your claim report has been successfully sent.";
    } else {
        echo "There was an error while sending the claim email.";
    }
}
