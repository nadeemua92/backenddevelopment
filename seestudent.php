<html>

	<head><title>School Management System</title></head>

	<body>
		
		<h2>Welcome to our School Management System</h2>
		
		<p>Choose what you would like to do:</p>
		<a href="index.php">Home</a> | 
		<a href="addstudent.php">Add a student</a> | 
		<a href="addparent.php">Add a parent</a> |
		<a href="addteacher.php">Add a teacher</a> | 
		<a href="addclass.php">class</a> |
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
		
		<h3>See all students</h3>
	
		<table>
		
			<tr>
				<th width="150px">StudentID<br><hr></th>
				<th width="250px">Name<br><hr></th>
				<th width="150px">Address<br><hr></th>
				<th width="150px">MedicalInformation<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT StudentID, Name, Address, MedicalInformation FROM students");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['StudentID']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['MedicalInformation']}</th>
			</tr>";
			}
			?>
			
		</table>
		
		<?php
		$link->close();
		?>
	
		<hr>
		

	
	</body>

</html>