<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $faname = $_POST["faname"];
    $maname = $_POST["maname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Perform any necessary data processing or validation here.
    
    // For this example, we'll just display the received data.
    echo "First Name: " . $fname . "<br>";
    echo "Last Name: " . $lname . "<br>";
    echo "Father Name: " . $faname . "<br>";
    echo "Mother Name: " . $maname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
}
?>
