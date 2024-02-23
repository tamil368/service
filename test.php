<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
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

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Include PHPMailer autoload file
    require 'PHPMailer\composer.json';
    require 'PHPMailer\src\OAuthTokenProvider.php';
    

    // Create a PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'aspmx.l.google.com';  // Set the SMTP server to send through
        $mail->SMTPAuth = true;   // Enable SMTP authentication
        $mail->Username = 'gttestin659@gmail.com';   // SMTP username
        $mail->Password = 'tamil12345#';   // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
        $mail->Port = 465; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // Recipients
        $mail->setFrom('gttesting659@gmail.com', 'Mailer');
        $mail->addAddress($email); // Add a recipient
       // $mail->addAddress('ellen@example.com'); // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'New message from ' . $name;
        $mail->Body = 'Name: ' . $name . '<br>Email: ' . $email . '<br>Message: ' . $message;
        $mail->AltBody = 'Name: ' . $name . '\nEmail: ' . $email . '\nMessage: ' . $message;

        // Send the email
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

</body>
</html>