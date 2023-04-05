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
		<a href="seestudent.php">See all students</a> | 
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
		
		<h3>See all parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Parent Name<br><hr></th>
				<th width="250px">Address<br><hr></th>
				<th width="250px">Email<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT ParentID,Name, Address,Email FROM parent");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['ParentID']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['Email']}</th>
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