<html>

	<head><title>School Management System</title></head>

	<body>
		
		<h2>Welcome to our School Management System</h2>
		
		<p>Choose what you would like to do:</p>
		<a href="index.php">Home</a> | 
		<a href="addparent.php">Add a parent</a> |
		<a href="addteacher.php">Add a teacher</a> | 
		<a href="addclass.php">class</a> |
		<a href="seestudent.php">See all students</a> | 
		<a href="seeparent.php">See all parents</a>
		<a href="seeteacher.php">See all teachers</a> |
		<a href="seeclass.php">See class </a> |
		<a href="contact.html">contact</a> | 
		<?php
		
		$link = mysqli_connect("localhost", "root", "", "school");
		// Check connection
		if ($link === false) {
			die("Connection failed: ");
		}
		?>
	
		<hr>
		
		<h3>Add a new student</h3>
	
		<form method="post" action="addstudent.php">
		
			<label>Student Name:</label>
			<input type="text" name="Name">
			<br><br>
			<label>Class Name</label>
			<select name="classID">
				<option value="1"> Reception</option>
				<option value="1"> Year One</option>
				<option value="1"> Year Two</option>
				<option value="1"> Year Three</option>
				<option value="1"> Year Four</option>
				<option value="1"> Year Five</option>
				<option value="1"> Year Six</option>
	        </select><br>  
            <label> Address</label>
            <input type="text" name="Address">
			<br><br>
			<label>Medical information</label>
            <input type="text" name="MedicalInformation">
			<br><br>
			<input type="submit" name="submit">
		
		</form>
		
		
		
<?php
	if (isset($_POST['submit'])){
	$Name=$_POST['Name'];
	$Address=$_POST['Address'];
	$MedicalInformation =$_POST['MedicalInformation'];

	$sql ="Insert into students(Name, Address, MedicalInformation) VALUES ('$Name','$Address','$MedicalInformation')";
			
	if (mysqli_query($link,$sql)){
		echo "New record created successfully";
	}else {
		echo "Error adding record";
	}
	}
    $link->close();

?>
  <hr>
		

	
</body>

</html>