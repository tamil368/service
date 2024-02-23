<?php
// Import the PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


// Create a new PHPMailer object
$mail = new PHPMailer(true);

// Set the SMTP debug level
$mail->SMTPDebug = 4;

// Set the SMTP server to use
$mail->isSMTP();

// Enable SMTP authentication
$mail->SMTPAuth = true;

// Set the SMTP username and password
$mail->Username = 'mkramprasath12@gmail.com';
$mail->Password = 'Ram@053.';

// Set the SMTP host and port
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587; //  587 or `8080 from tomcat`

// Enable TLS encryption
$mail->SMTPSecure = 'tls';

// Set the email sender
$mail->setFrom('mkramprasath12@gmail.com', 'Ram');

// Add a recipient
$mail->addAddress('tamilaathi2020@gmail.com');

// Set the email subject
$mail->Subject = 'Test email from PHPMailer';

// Set the email body
$mail->Body = 'Hi Tamil How are you! ';

// Send the email
$mail->send();

// Check if the email was sent successfully
if ($mail->send()) {
    echo 'Email sent successfully';
} else {
    echo 'Email sending failed';
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>
