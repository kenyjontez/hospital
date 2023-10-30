<?php
include('dbconnect.php');
 if(isset($_POST["submit"])){	
// Retrieve form data and create variables
 $name = $_POST["name"];
 $gender = $_POST["gender"];
 $telephone = $_POST["telephone"];
 $address= $_POST["address"];
 $age = $_POST["age"];
 $id = $_POST["id"];
echo "Connected successfully";
 //Connection successful now proceed to mysql insert query
$sql = "INSERT INTO `outpatient`(`name`, `gender`, `telephone`, `address`, `age`, `id`) 
           VALUES ('[ken]','[male]','[1234]','[6412]','[12]','[44]')";
 if ($conn->query($sql) === TRUE) {
 echo "<script type= 'text/javascript'>alert('New record created successfully');</script>"
;
 } else {
 echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error.
"');</script>";
 }
 
 }
 
 mysqli_close($conn);
?>