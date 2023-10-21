<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "adityahirwar21@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission: $subject";
    $headers = "From: $email";

    $message_body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $message_body, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // Email not sent
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // Handle non-POST requests (optional)
    echo "Invalid request.";
}
?>
