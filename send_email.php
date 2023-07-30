<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email details
    $to = 'sultanibrahimhumood@gmail.com'; // Replace with your email address
    $subject = "New Contact Message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        http_response_code(200); // Set the response code to indicate success
    } else {
        http_response_code(500); // Set the response code to indicate an error
    }
} else {
    http_response_code(405); // Set the response code to indicate method not allowed
}
