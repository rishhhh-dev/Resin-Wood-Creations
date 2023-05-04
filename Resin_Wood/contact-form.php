<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $contact = $_POST["contact"];
  $message = $_POST["message"];
  $from_email = 'rishig226@gmail.com'

  $to = "rishigupta92173@gmail.com"; // Replace with your email address
  $subject = "New message from Contact Us form";
  $body = "Name: $name\nContact: $contact\nMessage:\n$message";

  $headers = "From: $from_email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
?>
