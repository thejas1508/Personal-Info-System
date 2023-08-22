<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "suvetha";
$conn = mysqli_connect($servername,$username,$password,$db);

$uname = $_POST["name"];
$udepartment = $_POST["department"];
$uDOB = $_POST["DOB"];
$uphone_number = $_POST["phone_number"];
$ublood_group = $_POST["Blood_group"];
$uaddress = $_POST["Address"];
$sql = "insert into id values('$uname','$udepartment','$uDOB','$uphone_number','$ublood_group','$uaddress' )";
mysqli_query($conn,$sql)
?>

