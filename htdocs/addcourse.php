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
}.button2 {
    background-color: #ffcc00;
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
}
.button2:hover {
	background-color: #ffe680;
	
}
</style>
</head>
<body>
<?php
if(!empty($_SESSION["user"])){
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
		<form name="addcourse" action="checkadd.php" method="POST">
		<table width="40%" align="center" border="5" bordercolor="orange">
			<tr><td>Course Name: </td>
				<td><input type="text" name="coursename" required class="texta"></td></tr>
			<tr><td>Course Type: </td>
				<td><select name="coursetype" required>
					<option value="driving">Driving License</option>
					<option value="language">Language Course</option>
					<option value="programming">Programming Course</option>
					<option value="dancing">Dancing Course</option>
					<option value="education">Education Course</option>
					<option value="music">Music Course</option>
					<option value="sport">Sport Course</option>
					<option value="fitness">Fitness Course</option>
					<option value="cooking">Cooking Course</option>
					<option value="drawing">Drawing Course</option>
					<option value="photography">Photography Course</option>
					<option value="personal">Personal Development Course</option>
					<option value="finance">Finance Course</option>
					<option value="handicraft">Handicraft Course</option>
					<option value="vocational">Vocational Course</option>
					<option value="gardening">Gardening Course</option>
					</select></td></tr>
			<tr><td>Course Tags: </td>
				<td><input type="text" name="coursetags" required placeholder="i.e. English German" class="texta"></td></tr>
			<tr><td>Course Location: </td>
				<td><select name="courselocation" required>
					<option value="istanbul">İstanbul</option>
					<option value="ankara">Ankara</option>
					<option value="izmir">İzmir</option>
					<option value="bursa">Bursa</option>
					</select></td></tr>
			<tr><td>Course Descripton: </td>
				<td><textarea name="description" cols="40" rows="5" placeholder=
				"Course Descripton:
Address:
Sub Categories:
More information about courses:
Your site:
Contact:" required class="texta"></textarea></td></tr>
			<tr><td>Starting Price: </td>
				<td><input type="text" name="price" required pattern="\d*" title="Please enter only numbers" placeholder=" Use TRY" class="texta"></td></tr>
			<tr><td align="center" colspan="2"><input type="submit" name="test" value="Add" class="button2"></td></tr>
		</table>
		</form>
		');
}else{
	echo("Please create and login your Enterprise account in order to add courses.");
	header('Refresh: 3; URL=http://localhost/signup1.php');
}
?>
</body>
</html>