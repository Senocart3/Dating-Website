<?php
include 'conn.php';
session_start();

//var_dump($_SESSION);
// var_dump($_POST);
if(isset($_POST['log']))
{
	$email=mysql_real_escape_string($_POST['email']);
	$password=mysql_real_escape_string($_POST['password']);
	
	$sql="SELECT * FROM register WHERE email='$email' AND password1='$password'";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)==1){
		$_SESSION['email']=$email;
		var_dump($result);
		// var_dump($_SESSION);
		//header("location:profile.php");
	}
	else{
		echo("Please fill Again!!!
		User Name And Password Incorrect..");
	}
}
 ?> 
<!DOCTYPE HTML>
<html>
<head>
<link  rel="stylesheet" href="css/log.css">
<link href="css/bootstrap/css.min" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">

</head>
<body>
<div class="bg">
<!-- <a href=home.php> -->
</a>

<div class="border">
 
 <form method="POST" action="profile.php" >
 <table>
 <tr><td><input type="email" name="email" placeholder="username" required class="third" style=" margin-top:85px;"></td></tr>
 <tr><td><input type="password" name="password" placeholder="password" required class="four" style=" margin-top:30px;"></td></tr>
 <tr><td><input type="submit" value="Login" name="login" class="button" style=" margin-top:30px;"></td>
</tr> </table>
</form>
 </div>
 </div>
 </body>
 </html>
 

