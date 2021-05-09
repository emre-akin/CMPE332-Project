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
	
}
.button2 {
    background-color: #ffcc00;
    //border: 2px solid #555555;
	border-radius: 5px;
    color: black;
    padding: 15px 32px;
	width: 50%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button2:hover {
	background-color: #ffe680;
	
}
.custom-select {
	overflow-y: hidden;
	
}

.select {
	display:inline-block:
	//padding: 15px 30px;
	width: 100%;
	
	color: black;
	background-color: #ffcc00;
	overflow-y: auto;
	cursor: pointer;
	border-radius: 5px;
	
}.select:select {
  background-color: pink;
}.button3 {
	background: #ffcc00 url("img/car.png") 10% 50% no-repeat;
    //border: 2px solid #555555;
	border-radius: 10px;
    color: black;
    padding: 32px 64px;
	width: 100%;
	//padding: 20%;
	
    text-align: top;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
} .button3:hover {
	background-color: #ffe680;
	
}.button4 {
	background: #ffcc00 url("img/language.png") 10% 50% no-repeat;
    //border: 2px solid #555555;
	border-radius: 10px;
    color: black;
    padding: 32px 64px;
	width: 100%;
	//padding: 20%;
	
    text-align: top;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
} .button4:hover {
	background-color: #ffe680;
	
}.button5 {
	background: #ffcc00 url("img/tennis.png") 10% 50% no-repeat;
    //border: 2px solid #555555;
	border-radius: 10px;
    color: black;
    padding: 32px 64px;
	width: 100%;
	//padding: 20%;
	
    text-align: top;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
} .button5:hover {
	background-color: #ffe680;
	
}.button6 {
	background: #ffcc00 url("img/music.png") 10% 50% no-repeat;
    //border: 2px solid #555555;
	border-radius: 10px;
    color: black;
    padding: 32px 64px;
	width: 100%;
	//padding: 20%;
	
    text-align: top;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
} .button6:hover {
	background-color: #ffe680;
	
}.button7 {
	background: #ffcc00 url("img/pc.png") 10% 50% no-repeat;
    //border: 2px solid #555555;
	border-radius: 10px;
    color: black;
    padding: 32px 64px;
	width: 100%;
	//padding: 20%;
	
    text-align: top;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
} .button7:hover {
	background-color: #ffe680;
	
}.button8 {
	background: #ffcc00 url("img/dancer.png") 10% 50% no-repeat;
    //border: 2px solid #555555;
	border-radius: 10px;
    color: black;
    padding: 32px 64px;
	width: 100%;
	//padding: 20%;
	
    text-align: top;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
} .button8:hover {
	background-color: #ffe680;
	
}.texta2 {
    width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    background-color: white;
    background-image: url('img/search0.png');
    background-position: 5px 7px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}


</style>
<script>
function onbtnclick1() {
	document.getElementById("type").selectedIndex="0";
	
}function onbtnclick2() {
	document.getElementById("type").selectedIndex="1";
	
}function onbtnclick3() {
	document.getElementById("type").selectedIndex="6";
	
}function onbtnclick4() {
	document.getElementById("type").selectedIndex="5";
	
}function onbtnclick5() {
	document.getElementById("type").selectedIndex="2";
	
}function onbtnclick6() {
	document.getElementById("type").selectedIndex="3";
	
}
</script>
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
}
?>
<form name="searchtagform" action="searchtag.php" method="POST">
<table border="0"><tr><td>
<input type="text" name="coursetags" size="200" placeholder="Search for Subcategories; i.e. English, Tango" class="texta2"></td><td>
<input type="submit" class="srchbtn" value="" hidden="hidden"></td></tr></table></form>
<form name="searchform" action="search.php" method="POST">
<table width="100%"><tr><td>
<table border="5" width="100%" bordercolor="orange">
<tr>
	<td><b>Cities</b></td>
	<td><b>Courses</b></td>
</tr>
<tr>
	<td><div class="custom-select">
	<select size="16" name="location" class="select">
			<option value="istanbul">İstanbul</option>
			<option value="ankara">Ankara</option>
			<option value="izmir">İzmir</option>
			<option value="bursa">Bursa</option>
		</select>
	</td>
	<td><select size="16" name="type" id="type" class="select">
			<option value="driving">Driving License
			<option value="language">Language Course
			<option value="programming">Programming Course
			<option value="dancing">Dancing Course
			<option value="education">Education Course
			<option value="music">Music Course
			<option value="sport">Sport Course
			<option value="fitness">Fitness Course
			<option value="cooking">Cooking Course
			<option value="drawing">Drawing Course
			<option value="photography">Photography Course
			<option value="personal">Personal Development Course
			<option value="finance">Finance Course
			<option value="handicraft">Handicraft Course
			<option value="vocational">Vocational Course
			<option value="gardening">Gardening Course
			
		</select></div>
	</td>
</tr>
</table>
</td><td align="center">
<input class="button2" type="submit" value="Sort">
</td></tr>
<tr>
<td colspan="2"><table border="0" width="100%"><tr>
<td><input type="submit" value="Driving" class="button3" onclick="onbtnclick1()"></td>
<td width=><input type="submit" value="Language" class="button4"onclick="onbtnclick2()"></td>
<td><input type="submit" value="Sport" class="button5" onclick="onbtnclick3()"></td></tr>
<tr>
<td><input type="submit" value="Music" class="button6" onclick="onbtnclick4()"></td>
<td><input type="submit" value="Programming" class="button7" onclick="onbtnclick5()"></td>
<td><input type="submit" value="Dancing" class="button8" onclick="onbtnclick6()"></td></tr>
</table></td>
</tr></table>
</form>
</body>
</html>