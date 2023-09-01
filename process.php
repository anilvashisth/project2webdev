<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Perform any necessary data processing or validation here.
    
    // For this example, we'll just display the received data.
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
}
?>
