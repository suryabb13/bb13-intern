<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guviintern";
$conn = new mysqli($servername, $username, $password, $dbname); 
$email = $_POST['email'];
$name = $_POST['name'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$pwd = $_POST['password'];
$col = $_POST['college'];
$sql="UPDATE guvi1 SET name='$name', password='$pwd', age='$age' , college='$col' , dob='$dob' WHERE email='$email'";
$stmt= $conn->prepare($sql);
$stmt->execute();

?>