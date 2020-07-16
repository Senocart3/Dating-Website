/*establish the connection with the database*/
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datingdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>