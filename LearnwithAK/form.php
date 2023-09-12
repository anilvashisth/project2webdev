<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<?php
    $fullname = $fathername = $mothername =$aadharno =$familyid =$mobileno = $address =$email =$gender =$dateofbirth ="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fullname = test_input($_POST["name"]);
        $fathername = test_input($_POST["fname"]);
        $mothername = test_input($_POST["mname"]);
        $aadharno = test_input($_POST["ano"]);
        $familyid = test_input($_POST["fid"]);
        $mobileno = test_input($_POST["mno"]);
        $address = test_input($_POST["address"]);
        $email = test_input($_POST["email"]);
        $gender = test_input($_POST["gender"]);
        $dateofbirth = test_input($_POST["dob"]);
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data); 
        return $data;
    }
?>

<h2>Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Full Name : <input type="text" name="name">
<br>
Father Name : <input type="text" name ="fname">
<br>
Mother Name : <input type="text" name="mname">
<br>
Aadhar No: <input type="number" name ="ano">
<br>
Family ID: <input type="number" name="fid">
<br>
Mobile No : <input type="number" name ="mno">
<br>
Address:<input type="text" name="address">
<br>
Email ID:<input type="email" name="email">
<br>
Gender:
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Male">Male
<br> 
Date of Birth:<input type="date" name ="dob">
<br>
<input type="submit" name="click here" value="Click me">
</form>
<?php

    echo "<h2> Your inputs </h2>";
    echo "Full Name : $fullname"; 
    echo "<br>";
    echo "Father Name : $fathername"; 
    echo "<br>";
    echo "Mother Name : $mothername" ;
    echo "<br>";
    echo "Aadhar No: $aadharno" ;
    echo "<br>";
    echo "Family ID: $familyid" ;
    echo "<br>";
    echo "Mobile No: $mobileno" ;
    echo "<br>";
    echo "Address : $address" ;
    echo "<br>";
    echo "Email ID: $email" ;
    echo "<br>";
    echo "Gender: $gender" ;
    echo "<br>";
    echo "Date of Birth: $dateofbirth" ;
    echo "<br>";
?>
</body>
</html>