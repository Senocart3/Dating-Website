<?php
include_once 'conn.php';
?>
<! DOCTYPE html>
<html>	
<head> 
<link  rel="stylesheet" href="css/register.css">

</head>
<body>
<div class="bg"></div>
<div class="scroll">

<a href="project.php">
</a>
<div class="shift">
<div class="box">
<div class="first">
<form  action="register_insert.php" method="POST" >

<table>
<tr><p style="padding-top:50px;color:white;font-size:40px;text-shadow:2px 2px red;margin-top:-80px;margin-left:180px;">Register</p></tr><br>

<tr><td><input type="text" name="first" placeholder="First Name" required style="border-radius:25px; width:200px;height:40px;margin-left:10px;font-size:15px;" ></td><td>
<input type="text" name="last" placeholder="Last Name" required style="border-radius:25px;width:200px; height:40px; margin-left:-210px;clear:left;font-size:15px;"></td></tr>

<tr><td><input type="email" name="email" placeholder="Email" required style="border-radius:25px;width:410px; height:40px; margin:15px;font-size:18px;"></td></tr>

<tr><td><input type="password" id="password1" name="password1" placeholder="Password" required style="border-radius:25px;width:410px; height:40px; margin:15px;font-size:18px;"></td></tr>

<tr><td><input type="password" id="password2" name="password2" placeholder="Confirm_Password" required style="border-radius:25px;width:410px; height:40px; margin:15px;font-size:18px;"></td></tr>
<tr><td><input type="tel" name="phone" placeholder="Phone Number" required style="border-radius:25px;width:410px; height:40px; margin:15px;font-size:18px;"></td></tr>

<tr><td><p style="color:white;font-size:20px;margin-left:15px;">D.O.B</p></td></tr>
<tr><td><select name="month" required style="border-radius:25px; background-color:grey;color:white;width:100px; height:30px; padding:1px;margin-top:10px; margin-left:7px;"class="select">
<option>Month</option>
<option>Jan</option>
<option>Feb</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>Aug</option>
<option>Sep</option>
<option>Oct</option>
<option>Nov</option>
<option>dec</option>
</select></td>
<td><select name="day" required style="border-radius:25px; background-color:grey;color:white;width:100px; height:30px; padding:1px;margin-top:10px;margin-left:-300px"class="select">
<option>Day</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option></select></td>
<td><select name="year" required style="border-radius:25px; background-color:grey;color:white;width:100px; height:30px;padding:2px; margin-top:10px; margin-left:-175px;">
<option>Year</option>
<option>1986</option>
<option>1987</option>
<option>1988</option>
<option>1989</option>
<option>1990</option>
<option>1991</option>
<option>1992</option>
<option>1993</option>
<option>1994</option>
<option>1995</option>
<option>1996</option>
<option>1997</option>
<option>1998</option>
<option>1999</option>
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
</select></td>
</tr>
<tr></tr>
<tr>
<td><input type="text" name="me" placeholder="I am a" required style="border-radius:25px;width:410px; height:40px; margin:15px;font-size:18px;"></td></tr>
</tr>
<td><input type="text" name="seeking" placeholder="Seeking a" required style="border-radius:25px;width:410px; height:40px; margin:15px;font-size:18px;"></td>
  </tr>
  <tr></tr>
  <tr><td><input type="submit" value="Submit" class="button"></td></tr>
  
</table>
</form>


</div>
</div>
</div>
</div>
<script>
var password=document.getElementById("password1"),
 Confirm_Password=document.getElementById("password2");
 function validatePassword()
 {if(password.value!=Confirm_Password.value){
 Confirm_Password.setCustomValidity("password Don't match");}
 else{ 
 Confirm_Password.setCustomValidity('');
 }
 
 }
 password.onchange=validatePassword;
 Confirm_Password.onkeyup=validatePassword;
 </script>
</body> 

</html>