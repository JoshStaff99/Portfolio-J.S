<?php
require_once 'connection.php';
require_once 'mailer.php';

header('Content-Type: application/json');

// Initialize variables and error flags
$errors = [];
$hasErrors = false;

// Function to sanitize input
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate first name
    if (empty($_POST["firstname"])) {
        $errors['firstname'] = "First name is required";
        $hasErrors = true;
    } else {
        $firstname = clean_input($_POST["firstname"]);
    }

    // Validate last name
    if (empty($_POST["lastname"])) {
        $errors['lastname'] = "Last name is required";
        $hasErrors = true;
    } else {
        $lastname = clean_input($_POST["lastname"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $errors['email'] = "Email is required";
        $hasErrors = true;
    } else {
        $email = clean_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
            $hasErrors = true;
        }
    }

    // Validate telephone number
    if (empty($_POST["telephone"])) {
        $errors['telephone'] = "Telephone number is required";
        $hasErrors = true;
    } else {
        $telephone = clean_input($_POST["telephone"]);
        // Example validation for telephone (use the same regex you had)
        if (!preg_match('/^\+?[0-9]{0,3}[-\s\.]?\(?[0-9]{3}\)?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/', $telephone)) {
            $errors['telephone'] = "Invalid telephone number format";
            $hasErrors = true;
        }
    }

    // Validate subject
    if (empty($_POST["subject"])) {
        $errors['subject'] = "Subject is required";
        $hasErrors = true;
    } else {
        $subject = clean_input($_POST["subject"]);
    }

    // Validate message
    if (empty($_POST["message"])) {
        $errors['message'] = "Message is required";
        $hasErrors = true;
    } else {
        $message = clean_input($_POST["message"]);
    }

      // If there are no errors, insert the data into the database
      if (!$hasErrors) {
        try {
            // Prepare SQL insert statement
            $stmt = $pdo->prepare("INSERT INTO contact_form_portfolio (firstname, lastname, email, telephone, subject, message) VALUES (:firstname, :lastname, :email, :telephone, :subject, :message)");

            // Bind parameters to the prepared statement
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telephone', $telephone);
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':message', $message);

            // Execute the insert query
            $stmt->execute();

            try {
                sendContactEmail($firstname, $lastname, $email, $telephone, $subject, $message);
            }
            catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            // Return success response in JSON format
            echo json_encode(['success' => true]);
        } catch (PDOException $e) {
            // Handle database error
            echo json_encode(['success' => false, 'error' => 'Database error: ' . $e->getMessage()]);
        }
    } else {
        // If there are validation errors, return the errors in JSON format
        echo json_encode(['success' => false, 'errors' => $errors]);
    }
}