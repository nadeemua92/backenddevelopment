<html>

	<head><title>School Management System</title></head>

	<body>
		
		<h2>Welcome to our School Management System</h2>
		
		<p>Choose what you would like to do:</p>
		<a href="index.php">Home</a> | 
		<a href="addstudent.php">Add a student</a> | 
		<a href="addteacher.php">Add a teacher</a> | 
		<a href="addclass.php">class</a> |
		<a href="seestudent.php">See all students</a> | 
		<a href="seeparent.php">See all parents</a>
		<a href="seeteacher.php">See all teachers </a> |
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
		
		<h3>Add a new parent</h3>
	
		<form method="post" action="addparent.php">
		
			<label>ParentName</label>
			<input type="text" name="Name">
			<br><br>
            <label> Address</label>
            <input type="text" name="Address">
			<br><br>
			<label>Email</label>
            <input type="text" name="Email">
			<br><br>
			<input type="submit" name="submit">
		
		</form>
		
		
		<?php

		if (isset($_POST['submit'])) {
			$Name = $_POST['Name'];
			$Address = $_POST['Address'];
			$Email = $_POST['Email'];

			$sql = "INSERT INTO parent (Name, Address, Email) VALUES ('$Name', '$Address', '$Email')";
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