<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "library";
      
$conn = new mysqli($servername, $username, $password, $database);
      
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$get_mail = $_POST["uname"];
$get_password = $_POST["password"];

print_r($get_mail);