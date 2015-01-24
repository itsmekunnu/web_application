<?php
$conn = new mysqli("localhost","root","");
if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
else
	{ 
		echo "Connected successfully";
	}
/*$sql = "CREATE DATABASE myDB3";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/
// Create connection
$conn = mysqli_connect("localhost","root","","myDB3");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
*/
$v1=(string)$_POST["name1"];
$v2=(string)$_POST["name2"];
$v3=$_POST["mailid"];
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('". mysql_real_escape_string($v1)  ."','". mysql_real_escape_string($v2)  ."', '". mysql_real_escape_string($v3)  ."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//mysqli_close($conn);

?>