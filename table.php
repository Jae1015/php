<?php
$servername="localhost";
$username="root";
$password="";
$db="mydb";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
	echo"ERROR".mysqli_connect_error;
else
	echo"connected successfully";
$sql="create table Emp (id INT(6) unsigned AUTO_INCREMENT primary key,
			firstname varchar(50) NOT NULL,
			lastname varchar(50) NOT NULL
		         );";
if($conn->query($sql)==TRUE)
{
	echo "TABLE CREATED SUCCESSFULLY";
}
else
{
	echo "TABLE NOT CREATED";
}
$sql="INSERT INTO Emp (firstname,lastname) VALUES ('jASPREET','kAUR');";
if($conn->query($sql)==TRUE)
{
	echo "DATA INSERTED SUCCESSFULLY";
}
else
{
	echo "DATA NOT INSERTED";
}
$sql="SELECT * from Emp;";
$result=$conn->query($sql);

if($result->num_rows >0)
{
	while($row=$result->fetch_assoc())
	{
		echo "id: ".$row["id"]."FName:".$row["firstname"]."Lname: ".$row["lastname"]."<br>";
	}
}
else
{
	echo "0 results";
}

?>