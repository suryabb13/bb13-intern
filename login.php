<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guviintern";
$conn = new mysqli($servername, $username, $password, $dbname); 

$email = $_POST['email'];
$pwd = $_POST['password'];
$data = [];
$stmt = $conn->prepare("SELECT name, age,dob, college, password ,email FROM guvi1 WHERE email = ?");
 //$stmt = $conn->prepare('INSERT INTO guvi (`name`, `age`, `college`, `dob`, `password`, `email`) VALUES (?, ?, ?, ?, ?, ?)');
$stmt->bind_param("s",$_POST['email']);
$stmt->execute();
// $arr = $stmt->get_result()->fetch_all(MYSQLI_NUM);
$result = $stmt->get_result();
//echo $result;

// $retvar = [];
// while ($data = $result->fetch_assoc())
//     {   
//          // $retvar = $data['name'];
//         //$retvar[] = $data;
//         echo $data['name'];
//     }
    // $data = $result->fetch_all(MYSQLI_ASSOC);
    // $data = [];


    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    // if(!$data)exit('No rows');

    echo json_encode($data);
$stmt->close();
// $stmt->bind_result('sssss', $name, $password, $age, $college, $password);


?>