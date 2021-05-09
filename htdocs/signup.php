<?php
session_start();
session_destroy();
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
h1 {
    text-shadow: 4px 2px grey;
}
img {
    border-radius: 10px;
}
</style>
</head>
<body>
<form name="loginform" action="login.php" method="POST">
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
<table width="100%">
	<tr>
		<td align="center"><a href="signup0.php"><img src="img/standard.jpg" width="500"></a>
		</td>
		<td align="center"><b><h1>OR</h1><b>
		</td>
		<td align="center"><a href="signup1.php"><img src="img/enterprise.jpg" width="500"></a>
		</td>
	</tr>
</table>
</body>
</html>