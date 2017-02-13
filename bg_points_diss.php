<?php 
		require_once("includes/functions.php");
		require_once("includes/header.php");
		


		$servername = "localhost";
		$username = "mnvbcou1_mike";
		$password = "KaiSkye14";
		$dbname = "mnvbcou1_musiccafe";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

			
			//output the saved data 
				$sql = "SELECT * FROM `bg_points` ORDER BY points desc ";
				$result = $conn->query($sql);
				

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo  "<font size=3px><B>" . $row["player_name"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["points"] . "<br />";
					}
				} else {
					echo "No Records In bg_points<br /><br />";
				}

			
?>