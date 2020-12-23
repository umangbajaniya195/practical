<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
	//echo "connected";
}
else
{
	//echo "connection failed";
}

?>