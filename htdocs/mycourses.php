<?php
session_start();
?>
<html>
<head>
<style>
body{
	height:100%;
    background: orange; /* For browsers that do not support gradients */
    background: linear-gradient(orange, white); 
}
table {
    border-collapse:separate;   
    border-radius:12px;
    -moz-border-radius:12px;
}

bold{
    font-weight: bold;
}.button2 {
    background: #ffcc00 url("img/edit.png") 10% 50% no-repeat;
    //border: 2px solid #555555;
	border-radius: 5px;
    color: black;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    //margin: 2px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	padding: 8px 12px;
	width: 100%;
}
.button2:hover {
	background-color: #ffe680;
	
}.button3 {
    background: #ffcc00 url("img/bin.png") 10% 50% no-repeat;
    //border: 2px solid #555555;
	border-radius: 5px;
    color: black;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    //margin: 2px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	padding: 8px 32px;
	width: 100%;
}
.button3:hover {
	background-color: #ffe680;
	
}
</style>
</head>
<body>
<?php
if(!empty($_SESSION["user"])){
	$username=$_SESSION["user"];
	echo('<table border="5" width="100%" bordercolor="orange">
			<tr><td rowspan="4" width="80%"><a href="index.php"><img src="img/yourcourse.png" width="40%">   
			</td>
				<td align="center">Welcome '.$_SESSION["user"].' </td>
			</tr>
			<tr><td align="center"><a  href="addcourse.php"><i><b>Add Course<b><i></a> 
			</td></tr>
			<tr><td align="center"><a  href="mycourses.php"><i><b>My Courses<b><i></a> 
			</td></tr>
			<tr><td align="right"><a  href="logout.php"><i><b>Logout<b><i></a> 
			</td></tr>
		
		</table>
		');
		$con=mysqli_connect("localhost","root","","members");
		// Check connection
		if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$result = mysqli_query($con,"SELECT * FROM courses WHERE username='$username'");

		echo "<table border='5' align='center' bordercolor='orange'>
			<tr>
			<th>Course Name</th>
			<th>Course Type</th>
			<th>Course Tags</th>
			<th>Course Location</th>
			<th>Course Descripton</th>
			<th>Course Price</th>
			<th>Options</th>
			</tr>";

		while($row = mysqli_fetch_array($result))
		{
		echo "<tr>";
		//echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . $row['coursename'] . "</td>";
		echo "<td>" . $row['coursetype'] . "</td>";
		echo "<td>" . $row['coursetags'] . "</td>";
		echo "<td>" . $row['courselocation'] . "</td>";
		echo "<td>" . $row['description'] . "</td>";
		echo "<td>" . $row['price'] . "</td>";
		echo "<td>" . "<form name='editform'  method='POST'><input type='hidden' name='coursename' value='".htmlspecialchars($row['coursename']) . "' ><input type='hidden' name='coursetags' value='".htmlspecialchars($row['coursetags']) . "' ><input type='hidden' name='description' value='".htmlspecialchars($row['description']) . "' ><input type='hidden' name='price' value='".htmlspecialchars($row['price']) . "' ><input type='submit' value='Edit' formaction='edit.php' class='button2'><input type='submit' value='Delete' formaction='delete.php' class='button3'></form>" .	"</td>";
		echo "</tr>";
		}
		echo "</table>";

		mysqli_close($con);
			
}else{
	session_destroy();
	echo("Please login your Enterprise Account.");
	header('Refresh: 1; URL=http://localhost/');
}
?>
</body>
</html>