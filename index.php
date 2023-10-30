<!DOCTYPE html>
<html>
<body>



<form>
<style>
h1   {color: green;}
h2   {color: orange;}
</style>
<h1><b>Hospital Management System</b></h1> <p>
<h3>By KenzTech </h3>



<form action="searchprime.php" method="post">
    <div class="input-group">
  <input type="search" id="query" name="valueToSearch" placeholder="Type here to Search...">
 
  <button class="form-control"  name="search"  title="Search"><i class="bi bi-search"></i>Search</button>
    </div>
</form>

   <form action="/newdata.php">
   <form method="POST" action="dbconnect.php">
   <h2><b><u>Outpatient Details</u></b></h2>
   <fieldset>
   <label for="Name">Name:</label><br>
   <input type="text"id="Name"name="Name"><br><br>
   <label for="GENDER">GENDER:</label><br>
   <select gender="text" id="gender"><p>
	<option value="">--- Choose a gender---</option>
	<option value="red">male</option>
	<option value="green">female</option>
	<option value="blue">rather not say</option>
   </select><br><br>
   <label for="Telephone">Telephone:</label><br>
   <input type="text"id="Telephone "name="Telephone"><br><br>
   <label for="Address">Address:</label><br>
   <input type="text"id="Address"name="Address"><br><br>
   <label for="Age">Age:</label><br>
   <input type="text"id="Age"name="Age"><br><br>
   <label for="ID_NO">ID_NO:</label><br>
   <input type="number"id="Identity Number"name="ID_NO"><br><br>
   <button type="button">SUBMIT</button><br><br>
   </fieldset>
   </form>
   <form action="/newdata.php">
<h2><b><u>Diagnosis Details</u></b></h2> 
    <form>
    <fieldset>
	<label for="Disease Name">Disease Name:</label><br>
    <select Disease Name ="text" id="Disease Name"><p>
	<option value="">--- Choose a disease---</option>
	<option value="red">malaria</option>
	<option value="green">common cold</option>
	<option value="brown">common cold</option>
	<option value="blue">other</option>
    </select><br><br>
    <label for="patient number">patient number:</label><br>
    <input type="patient number"id="patient number"name="patient number"><br><br>
	<label for="Medication">Medication:</label><br>
    <input type="text"id="Medication"name="Medication"><br><br>
    <label for="Duration">Duration:</label><br>
    <input type="text"id="duration"name="Duration"><br><br>
    <button  type="button">SUBMIT</button><br><br>
    </fieldset><p>
    </form>
    <form action="/newdata.php">
    <h2><b><u>Ward Details</u></b></h2> 
    <form>
    <fieldset>
	<label for="Ward ID">Ward ID:</label><br>
    <input type="number"id="Ward ID"name="Ward ID"><br><br>
	<label for="Ward Type">Ward Type:</label><br>
    <select Ward Type="text" id="Ward Type"><p>
	<option value="">--- Choose Type---</option>
	<option value="red">male</option>
	<option value="green">female</option>
	<option value="brown">maternal</option>
	<option value="maroon">inpatient</option>
	<option value="blue">rather not say</option>
    </select><br><br>
	<label for="GENDER">GENDER:</label><br>
    <select Ward Gender="text" id="gender"><p>
	<option value="">--- Choose a gender---</option>
	<option value="red">male</option>
	<option value="green">female</option>
	<option value="blue">rather not say</option>
	</select><br><br>
	<label for="Ward Capacity">Ward Capacity:</label><br>
    <input type="number"id="Ward Capacity"name="Ward Capacity"><br><br>
	<button type="button">SUBMIT</button>
	</fieldset>
	</form>
    <p>Note:</p>
    <p>The information captured is keyed into a system and is private and no third party accesss.<br><br></p>
	
	<h3><b><u>Enquire from Hospital System</u></b></h3>
    <h2>Search </h2>
	<form action="search.php." method="post">
   <label for="name">Name:</label>
   <input type="text" id="name" name="name" required><br><br>
   <label for="duration">duration:</label>
   <input type="text" id="duration" name="duration" required>GO<br><br>
    </form>
    <h3><b><u>FEEDBACK</u></b></h3>
	<label for Comments="Comments">Comments:</label>
	<textarea> </textarea>
	
</body>
</html>