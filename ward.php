<?php
include('dbconnect.php');

// Attempt select query execution
$sql = "SELECT * FROM ward";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
			    echo "<th>ward id</th>";
                echo "<th>ward type</th>";
                echo "<th>ward gender</th>";
                echo "<th>ward capacity</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
			    echo "<td>" . $row['ward id'] . "</td>";
                echo "<td>" . $row['ward type'] . "</td>";
                echo "<td>" . $row['ward gender'] . "</td>";
                echo "<td>" . $row['ward capacity'] . "</td>";
               
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