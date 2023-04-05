<html>

	<head><title>School Management System</title></head>

	<body>
		
		<h2>Welcome to our School Management System</h2>
		
		<p>Choose what you would like to do:</p>
		<a href="index.php">Home</a> | 
		<a href="addstudent.php">Add a student</a> | 
		<a href="addparent.php">Add a parent</a> |
		<a href="addteacher.php">Add a teacher</a> | 
		<a href="seestudent.php">See all students</a> | 
		<a href="seeparent.php">See all parents</a>
		<a href="seeteacher.php">See all Teacher </a> |
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
		
		<h3>Add a new Class</h3>
	
		<form method="post" action="addclass.php">
		
			<label>ClassName</label>
			<input type="text" name="ClassName">
			<br><br>
            <label>Capacity</label>
            <input type="text" name="Capacity">
			<br><br>
			<input type="submit" name="submit">
		
		</form>
		
		
		<?php

		if (isset($_POST['submit'])) {
			$ClassName = $_POST['ClassName'];
			$Capacity = $_POST['Capacity'];

			$sql = "INSERT INTO classes (ClassName, Capacity) VALUES ('$ClassName', '$Capacity')";
			if (mysqli_query($link, $sql)) {
			  echo "New record created successfully";
			} else {
			  echo "Error adding record ";
			}
		
		}
		
		$link->close();
		?>
	
		<hr>
		

	
	</body>

</html>