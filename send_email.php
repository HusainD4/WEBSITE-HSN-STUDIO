<!-- JANGAN DI OTAK ATIK TULUNG !! -->
<!-- BY : HUSAIN -->


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "husainmulyansyah28@gmail.com";
    $subject = "Contact Form Submission from " . $name;
    $body = "Name: " . $name . "\nEmail: " . $email . "\n\nMessage:\n" . $message;

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>
