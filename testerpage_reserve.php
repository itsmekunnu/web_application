<?php
$conn = new mysqli("localhost","root","");
if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
else
	{ 
		//echo "Connected successfully";
	}
$conn = mysqli_connect("localhost","root","","myDB3");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}

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

<br/>
echo "Thanks for registering";

?>
