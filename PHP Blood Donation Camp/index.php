<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
</head>
<h1>Blood Donation Camp Rohtak</h1>
<body bgcolor="red">
    <div> <h2>Registration Form</h2></div>
    <form action='connect.php' method = "post">
        <label for="user">Name</label><br>
        <input type="text" name="name" id="name" required ><br>
        
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" required ><br>
        
        <label for="phone">Phone</label><br>
        <input type="text" name="phone" id="phone" required ><br>
        
        <label for="bgroup">Blood Group</label><br>
        <input type="text" name="bgroup" id="bgroup" required ><br><br>
        
        <input type="submit" name="submit" id="submit" />




    </form>
    

    
</body>
</html>