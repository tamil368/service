<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $port=587;

    // Admin email
    $admin_email = "tamilaathi2020@gmail.com";

    // Email subject
    $subject = "New Contact Form Submission";

    // Email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Location:\n$location";

    // Send email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($admin_email, $subject, $message, $headers,$port)) {
        // Email sent successfully, redirect back to the form with success parameter
        header('Location: index.php?success=true');
        exit;
    } else {
        // Email sending failed, redirect back to the form with error parameter
        header('Location: index.php?success=false');
        exit;
    }
} else {
    // If not a POST request, redirect back to the form
    header('Location: contact.php');
    exit;
}
?>
