<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$yourname=$_POST["yourname"];
$rollno=$_POST["rollno"];
$talent=$_POST["talent"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO table1 VALUES ('$yourname','$rollno','$talent')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>