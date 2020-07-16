<?php 
include_once('conn.php');

$query = "SELECT * FROM register";
$res = $conn->query($query);
// var_dump($res);
if($res->num_rows>0)
{

  while($eg = $res->fetch_assoc())
  {
    // var_dump($eg);
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <link href="css/details.css" rel="stylesheet">
</head>

<body>

<?php include'header.php'?>
 <div class="jpg1">
    <h1 style="margin-left:870px;"> DETAILS </h1>
    <img src="images/b1.jpg" style="width:600px;height:700px;margin-left:-60px;">
  </div>
  <table>

    <tr>
      <td>First Name</td>
      <td>Maria Anders</td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td>Francisco Chang</td>
    </tr>
    <tr>
      <td>Age</td>
      <td>25</td>
    </tr>
    <tr>
      <td>Weight</td>
      <td>75kg</td>
    </tr>
    <tr>
      <td>Height</td>
      <td>5 feet</td>
    </tr>
    <tr>
      <td>Body Type</td>
      <td>Toned</td>
    </tr>
    <tr>
      <td>Country</td>
      <td>New york</td>
    </tr>
    <td>Religion</td>
    <td>Christian</td>
    </tr>
    <tr>
      <td>Drink</td>
      <td>Occassinaly</td>
    </tr>
    <td>Smoke</td>
    <td>Occassinaly</td>
    </tr>
    <tr>
      <td>Mobile number</td>
      <td>5142220000</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>Mydate123@gmail.com</td>
    </tr>
  </table>
  <button></button>


 <?php include'footer.php'?>
</body>

</html>