<?php
session_start();
if(!empty($_SESSION["user"])){
	$username=$_SESSION["user"];
$coursename=$_POST["coursename"];
$coursetype=$_POST["coursetype"];
$coursetags=$_POST["coursetags"];
$courselocation=$_POST["courselocation"];
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

	$sql = "UPDATE courses SET coursename='$coursename', coursetype='$coursetype',coursetags='$coursetags',courselocation='$courselocation',description='$description',price='$price' WHERE coursename='$coursename'";

	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
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