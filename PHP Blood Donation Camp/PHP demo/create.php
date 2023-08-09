
<?php
    include "config.php";
    if(isset($_POST['submit'])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
    }

    $sql = "INSERT INTO users (firstname,lastname,email,password,gender) VALUES('$firstname','lastname', '$email', '$password','$gender')"; 

    $result = $conn->query($sql);

    if($result == TRUE) {
        echo " New Record Create Successfully";
    }

    else{
        echo "Error : " .$sql ."<br>" .$conn->error;
    }
    
    $conn-> close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <h2> Registration Form</h2>
    <form action="" method="post">
    <fieldset>
        <legend>Personal Info</legend>
        First Name:<br>
        <input type="text" name = 'firstname'><br>

        Last Name:<br>
        <input type="text" name = 'lastname'><br>

        Email:<br>
        <input type="email" name = 'email'><br>

        Password:<br>
        <input type="Password" name = 'password'><br>

        Gender:<br>
        <input type="radio" name = 'gender' value="Male"> Male <br>
        <input type="radio" name = 'gender' value="Female"> Female <br>
        <input type="submit" name = "Submit" value = "submit">

    </fieldset>
    </form>
    
</body>
</html>