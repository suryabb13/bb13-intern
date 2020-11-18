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


  	$sql_e = "SELECT * FROM guvi1 WHERE email='$email'";
  	$res_e = mysqli_query($conn, $sql_e);

   if(mysqli_num_rows($res_e) > 0){
       $result = array();
       $result["msg"] = "exist";
       echo json_encode($result);
      }
      else
      {
        $stmt = $conn->prepare('INSERT INTO guvi1 (`name`, `age`, `college`, `dob`, `password`, `email`) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->bind_param("ssssss", $name, $age, $col, $dob, $pwd, $email);
        $stmt->execute();
      }



?>