<?php
// Get form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$message = $_POST['message'];

// Set email recipient
$to = "tatsvdev@email.com"; // Change this to your email address

// Email subject
$subject = "New Contact Form Submission";

// Email message
$body = "Full Name: $fullName\nEmail: $email\nPhone Number: $phoneNumber\nMessage: $message";

// Send email
if (mail($to, $subject, $body)) {
  echo "Email sent successfully!";
} else {
  echo "Failed to send email.";
}
?>
