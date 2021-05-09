<?php
session_start();
if(!empty($_SESSION["user"])){
	$username=$_SESSION["user"];
$coursename=$_POST["coursename"];
$coursetags=$_POST["coursetags"];
$description=$_POST["description"];
$price=$_POST["price"];
	$dbhost= 'localhost';		//port numarası
	$dbuser ='root';
	$dbpass ='';
	$dbname="members";


	// Create connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "DELETE FROM courses WHERE coursename='$coursename'";

	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header('Refresh: 3; URL=http://localhost/mycourses.php');
	$conn->close();
}else{
	session_destroy();
	echo("Please login your Enterprise Account.");
	header('Refresh: 1; URL=http://localhost/');
}
?>