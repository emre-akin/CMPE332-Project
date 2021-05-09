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

	$sql = "INSERT INTO courses (username, coursename, coursetype, coursetags, courselocation, description, price) VALUES ('$username', '$coursename', '$coursetype', '$coursetags', '$courselocation', '$description', '$price')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		echo (' <a href="https://localhost/mycourses.php">Redireting to MyCourses in 2 Seconds or Click this </a> ');
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