<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mutheejamesmwaura@gmail.com"; 
    $subject = "New message from website";
    
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Basic validation, you can add more checks here if needed
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {
        $headers = "From: $email" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();
        
        if (mail($to, $subject, $message, $headers)) {
            echo "Your message has been sent successfully!";
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    } else {
        echo "Please fill in a valid email address and message.";
    }
}
?>

