<?php
//echo('Fail');
//header('Refresh: 2; URL=http://localhost/signup0.php');

$username=$_POST["name0"];
$email=$_POST["email0"];
$password=$_POST["pass0"];
$type="0";

//$email = test_input($_POST["email0"]);
if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
  $nameErr = "Only letters and white space allowed";
  echo($nameErr);
  header('Refresh: 2; URL=http://localhost/signup0.php');
}else{
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format";
		echo($emailErr);
		header('Refresh: 2; URL=http://localhost/signup0.php');
	}else{
	
	$dbhost= 'localhost';		
	$dbuser ='root';
	$dbpass ='';
	$dbname="members";


	// Create connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO users (id, username, email, password, type) VALUES (NULL, '$username', '$email', '$password', '$type')";

	if ($conn->query($sql) === TRUE) {
		echo "Successful, You can Login from home.";
		echo (' <a href="https://localhost/">Redireting to Home in 2 Seconds or Click this </a> ');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	header('Refresh: 2; URL=http://localhost/');
	}
}

?>