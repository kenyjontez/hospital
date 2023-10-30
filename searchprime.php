
<!--Second Section to display blogs-->
            <section id="blogs" class="mt-2 overflow-auto" style="height: 74vh;">
                <div class="row g-1" style="width: 99%">
                    
                    <!--Select all from tb_blogs to display-->
                    <?php
                         #include('dbconnect.php');
                        if(isset($_POST['search']))
                        {
                            $valueToSearch = $_POST['valueToSearch'];
                            // search in all table columns
                            // using concat mysql function
                            $query = "SELECT * FROM `tb_blogs` WHERE CONCAT( `blog_id`,`title`,`category`,`blog`,`datetime`) LIKE '%".$valueToSearch."%'";
                            $search_result = filterTable($query);
                            
                        }
                        else {
                            $query = "SELECT * FROM tb_blogs";
                            $search_result = filterTable($query);
                        }

                        // function to connect and execute the query
                        function filterTable($query)
                        {
                            include 'dbconnect.php';
                            $filter_Result = mysqli_query($conn, $query);
                            return $filter_Result;
                        }
                        
                            if (mysqli_num_rows($search_result) == 0) {
                            echo "<p>No result</p>";
							
                            }
							

                        while ($row = mysqli_fetch_assoc($search_result))
                        {
                            $id=$row['id'];
                            $blog_id=$row['blog_id'];
                            $title=$row['title'];
							$category=$row['category'];
							$blog=$row['blog'];
							$datetime=$row['datetime'];
						
                    
              ?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
  margin-left:-5px;
  margin-right:-5px;
}

.column {
  flex: 50%;
  padding: 5px;
}


table {
	
  float: left;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>  </h2>
<div class="row">
<div class="column">
<table>
  <tr>
    
    <th><?php echo $title; ?></th>
	
	</tr>
	
  <tr>
    <td><?php echo $id; ?><br>  
    <?php echo $blog_id; ?> <br>
    <?php echo $title; ?><br>
	<?php echo $category; ?><br> 
	<?php echo $blog; ?><br> 
	<?php echo $datetime; ?> <br> <a href="userdisplay-blog-view.php?blog_id=<?php echo $blog_id; ?>" class="text-dark">Read More...</td>
  </tr>
  </div> 
  </div>
  
</table>
</body>
</html>
                    

                      <?php
                        }
                    ?>
                </div>
            </section>










 