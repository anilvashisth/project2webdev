<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube Video </title>
</head>
<body>
<a href="http://localhost/Section10%20HTML%20Forms/videoform.html">Home</a><br>
    
<?php
//Create a Conection with Database
$servername = "localhost"; // Database server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "dell1545data"; // Your database name

// Create a connection to the database
//$conn = new mysqli($servername, $username, $password, $dbname);

$conn = new mysqli("localhost", "root", "","dell1545data" );

// Check connection status
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connection successful";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $video_date = $_POST["video_date"];
    $video_name = $_POST["video_name"];
    $video_time = $_POST["video_time"];
    $video_type = $_POST["video_type"];
    $channel_name = $_POST["channel_name"];
    $channel_info = $_POST["channel_info"];
    $download_date = $_POST["download_date"];
    $video_size = $_POST["video_size"];
    $saving_path= $_POST["saving_path"];
    
    // Perform any necessary data processing or validation here.
    
    // For this example, we'll just display the received data.
    echo "video_date: " . $video_date . "<br>";
    echo "video_name: " . $video_name . "<br>";
    echo "video_time: " . $video_time . "<br>";
    echo "video_type: " . $video_type . "<br>";
    echo "channel_name: " . $channel_name . "<br>";
    echo "channel_info: " . $channel_info . "<br>";
    echo "download_date: " . $download_date . "<br>";
    echo "video_size: " . $video_size . "<br>";
    echo "saving_path: " . $saving_path . "<br>";

}

// Insert data in to the database
    
    $video_date = $_POST["video_date"];
    $video_name = $_POST["video_name"];
    $video_time = $_POST["video_time"];
    $video_type = $_POST["video_type"];
    $channel_name = $_POST["channel_name"];
    $channel_info = $_POST["channel_info"];
    $download_date = $_POST["download_date"];
    $video_size = $_POST["video_size"];
    $saving_path= $_POST["saving_path"];
// SQL query to insert data into the "contactus" table
$sql = "INSERT INTO detailofyoutubevideo (video_date,video_name,video_time,video_type,channel_name, channel_info,download_date,video_size,saving_path) VALUES ('$video_date','$video_name','$video_time','$video_type', '$channel_name', '$channel_info','$download_date','$video_size','$saving_path')";

if ($conn->query($sql) === TRUE) {
    echo "<br> Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>
