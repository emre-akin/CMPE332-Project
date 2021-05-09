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
}.texta {
    width: 100%;
	display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}.button1 {
    background-color: #ffcc00;
    //border: 2px solid #555555;
	border-radius: 5px;
    color: black;
    padding: 5% 5%;
	width: 100%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    //margin: 2px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1:hover {
	background-color: #ffe680;
	
}.button2 {
    background-color: #ffe600;
    //border: 2px solid #555555;
	border-radius: 5px;
    color: black;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    //margin: 2px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    opacity: 0.5;
    cursor: not-allowed
}
</style>
</head>
<body>
<?php
if(!empty($_SESSION["user"])){
	if($_SESSION["type"]==1){
		echo('<form name="loginform" action="login.php" method="POST">
		<table border="5" width="100%" bordercolor="orange">
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
		</form>
		');
	}else{
		echo('<form name="loginform" action="login.php" method="POST">
		<table border="5" width="100%" bordercolor="orange">
			<tr><td rowspan="2" width="80%"><a href="index.php"><img src="img/yourcourse.png" width="40%">   
			</td>
				<td align="center">Welcome '.$_SESSION["user"].' </td>
			</tr>
			<tr><td align="center"><a  href="logout.php"><i><b>Logout<b><i></a> 
			</td></tr>
		
		</table>
		</form>
		');
	}
		if(!empty($_POST['location'])){
		$courselocation=$_POST['location'].'%';
		}else{
		$courselocation='%';
		}
		if(!empty($_POST['type'])){
		$coursetype=$_POST['type'].'%';
		}else{
		$coursetype='%';
		}
		$con=mysqli_connect("localhost","root","","members");
		// Check connection
		if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$result = mysqli_query($con,"SELECT * FROM courses WHERE courselocation LIKE '$courselocation' and coursetype LIKE '$coursetype'");

		echo "<table border='5' align='center' bordercolor='orange'>
			<tr>
			<th>Course Name</th>
			<th>Course Type</th>
			<th>Course Tags</th>
			<th>Course Location</th>
			<th>Course Descripton</th>
			<th>Starting Price</th>
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
		echo "</tr>";
		}
		echo "</table>";

		mysqli_close($con);
		
}else{
	echo('<form name="loginform" action="login.php" method="POST">
		<table border="5" width="100%" bordercolor="orange">
			<tr><td rowspan="4" width="80%"><a href="index.php"><img src="img/yourcourse.png" width="40%">   
			</td>
			<td align="center" colspan="2"><b>Sign in</b></td>
			</tr>
			<tr><td colspan="2"><input type="text" name="name" pattern=".{4,30}" required title="4 to 30 characters" placeholder="Username" class="texta">
			</td></tr>
			<tr><td colspan="2"><input type="password" name="pass" pattern=".{8,30}" required title="8 to 30 characters" placeholder="Password" class="texta">
			</td></tr>
			<tr><td align="center"><a  href="signup.php"><i><b>Sign Up<b><i></a></td><td><input type="submit" name="login" value="Login" class="button1"> 
			</td></tr>
		
</table>
</form>
');
	if(!empty($_POST['location'])){
		$courselocation=$_POST['location'].'%';
		}else{
		$courselocation='%';
		}
		if(!empty($_POST['type'])){
		$coursetype=$_POST['type'].'%';
		}else{
		$coursetype='%';
		}
		$con=mysqli_connect("localhost","root","","members");
		// Check connection
		if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$result = mysqli_query($con,"SELECT * FROM courses WHERE courselocation LIKE '$courselocation' and coursetype LIKE '$coursetype'");

		echo "<table border='5' align='center' bordercolor='orange'>
			<tr>
			<th>Course Name</th>
			<th>Course Type</th>
			<th>Course Tags</th>
			<th>Course Location</th>
			<th>Course Descripton</th>
			<th>Starting Price</th>
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
		echo "<td>" . "<input type='Button' value='Login to see Prices' class='button2' disabled>" .	"</td>";
		echo "</tr>";
		}
		echo "</table>";

		mysqli_close($con);
		

}	
	
?>
</body>
</html>