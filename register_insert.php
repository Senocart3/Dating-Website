<?php
include_once 'conn.php';
var_dump($_POST);
$first='';
$last='';
$email='';
$password1='';
$password2='';
$phone='';
$month='';
$day='';
$year='';
$me ='';
$seeking='';

$first= $_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$phone=$_POST['phone'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
$me =$_POST['me'];
$seeking=$_POST['seeking'];

if($_POST['password1']!=$_POST['password2'])
{
	echo
	("try again");
}
$query ="INSERT INTO register(first,last,email,password1,password2,phone,month,day,year,me,seeking)
VALUES('$first','$last','$email','$password1','$password2','$phone','$month','$day','$year','$me','$seeking')";
$result = mysqli_query($conn,$query);
var_dump($result);

if($result)
{
	header('location:log.php?msg=Successfully Registered ');
}
else
{
	header('location:register.php?msg=not inserted');
}
?>