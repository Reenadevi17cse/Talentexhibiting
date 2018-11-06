<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project";

$yourname=$_POST["yourname"];
$rollno=$_POST["rollno"];
$talent=$_POST["talent"];
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connection Failed: ". mysql_connect_error());
}

$sql="INSERT INTO form VALUES ('$yourname','$rollno','$talent')";

if(mysql_query($conn,$sql))
{
	echo "New record create successfully";
}
else
{
echo "error:". $sql ."<br>" . mysql_error($conn);
}

mysqli_close($conn);