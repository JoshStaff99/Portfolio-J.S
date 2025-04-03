<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use Dotenv\Dotenv;

// Include the Composer autoloader (if using Composer)
require __DIR__ . '/../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

function sendContactEmail($firstname, $lastname, $email, $telephone, $subject, $message){
    $mail = new PHPMailer(true); // Create a new PHPMailer instance
    try {
        // Server settings
        $mail->isSMTP();                          // Set mailer to use SMTP
        $mail->Host = $_ENV['MAILTRAP_HOST'];                 // Set the SMTP server to Mailtrap
        $mail->SMTPAuth = true;                   // Enable SMTP authentication
        $mail->Username = $_ENV['MAILTRAP_USERNAME'];          // SMTP username
        $mail->Password = $_ENV['MAILTRAP_PASSWORD'];         // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = $_ENV['MAILTRAP_PORT'];                  // TCP port to connect to

        // Recipients
        $mail->setFrom($_ENV['MAILTRAP_FROM_EMAIL'], $_ENV['MAILTRAP_FROM_NAME']);
        $mail->addAddress($email, $firstname, $lastname); // Send to the form submitter's email
        $mail->addReplyTo($_ENV['MAILTRAP_FROM_EMAIL'], $_ENV['MAILTRAP_FROM_NAME']);

        // Content
        $mail->isHTML(true);                      // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        
        // Send the email
        $mail->send();
        return true;
        echo 'Message has been sent';
    } catch (Exception $e ) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>