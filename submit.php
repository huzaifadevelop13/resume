<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $email = trim($_POST["email"]);
    $phoneNumber = trim($_POST["phoneNumber"]);
    $message = trim($_POST["message"]);
    
    // Set your email address where you want to receive emails
    $to = "huzaifakhanchannel14@gmail.com"; // Replace with your actual email address
    
    // Subject of the email
    $subject = "New Message from Contact Form";
    
    // Compose the email content
    $email_content = "First Name: $firstName\n";
    $email_content .= "Last Name: $lastName\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone Number: $phoneNumber\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Set headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";
    
    // Attempt to send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Not a POST request, redirect back to the form
    header("Location: index.html");
    exit;
}
?>
