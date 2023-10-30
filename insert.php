<?php
$host="localhost";
$username = "root";
$password = "";
$db="test";
// Create connection
$conn = mysqli_connect($host,$username,$password,$db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = INSERT INTO `outpatient`(`name`, `gender`, `telephone`, `address`, `age`, `id`) 
        VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>