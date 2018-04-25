<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
	echo"ERROR".mysqli_connect_error;
else
	echo"connected successfully";

$sql="CREATE DATABASE mydb";
if(mysqli_query($conn,$sql))
{
	echo"Database created successfully";
}
else
	echo "mysqli_error";
mysqli_close($conn);
?>