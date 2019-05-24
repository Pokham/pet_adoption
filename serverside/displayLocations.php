<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "AnimalShelters";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn)
		die("Connection failed: " . mysqli_connect_error());

	$sql = "SELECT ID, Name, Address, Website, Phone FROM Locations";
	$result = $conn->query($sql);
	if ($result->num_rows > 0)
		while($row = $result->fetch_assoc())
			echo "<p>" . $row["Name"] . "<br>" . $row["Address"] . "<br>" . $row["Phone"] . "<br>" . $row["Website"] . "</p>";
	else
		echo "No shelters.";

	mysqli_close($conn);
?>