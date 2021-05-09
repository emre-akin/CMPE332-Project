<?php
//echo('Fail');
//header('Refresh: 2; URL=http://localhost/signup0.php');
session_start();
$username=$_POST["name"];
$password=$_POST["pass"];
	
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


        /*$sql = "SELECT * FROM users WHERE username ='".$username."' AND password='".$password."' LIMIT 1";
       // $res = mysqli_query($sql);
        $res = $conn->query($sql);
        if($conn->num_rows($res) == 1 ) {
			
            echo "You have successfully logged in.";
			$_SESSION["username"] = $row['username'];
        } else {
            echo "Invalid login information."; 
        }*/
		
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM users WHERE username='" . $username . "' and password = '". $password."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["user"] = $row['username'];
	$_SESSION["type"] = $row['type'];
	echo "You have successfully logged in.";
	header('Refresh: 2; URL=http://localhost/');
	echo (' <a href="https://localhost/">Redireting to Home in 2 Seconds or Click this </a> ');
	} else {
	echo "Invalid login information.";
	header('Refresh: 1; URL=http://localhost/');
	echo (' <a href="https://localhost/">Redireting to Home in 1 Seconds or Click this </a> ');
	}
     

}
	$conn->close();
	


?>