<?php
include('dbconnect.php');

// Attempt select query execution
$sql = "SELECT * FROM diagnosis";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
			    echo "<th>disease type</th>";
                echo "<th>patient number</th>";
                echo "<th>medication</th>";
                echo "<th>duration</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
			    echo "<td>" . $row['disease type'] . "</td>";
                echo "<td>" . $row['patient number'] . "</td>";
                echo "<td>" . $row['medication'] . "</td>";
                echo "<td>" . $row['duration'] . "</td>";
               
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