<?php
include('dbconnecter.php');

// Attempt select query execution
$sql = "SELECT * FROM infodata";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
			    echo "<th>name</th>";
                echo "<th>gender</th>";
                echo "<th>contact</th>";
				echo "<th>dob</th>";
                echo "<th>identity</th>";
			  echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
			    echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['contact'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['identity'] . "</td>";
				
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn)


?>