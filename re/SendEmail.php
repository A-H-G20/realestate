<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $email = $_POST["email"];

   
    $subject = "Account Created Successfully";
    $message = "Congratulations! Your account has been created successfully.";
    $headers = "From: abobakralhallak123@gmail.com"; 

    if (mail($email, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again later.";
    }
}
?>
