<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insaatdb";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>