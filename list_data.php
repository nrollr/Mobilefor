<?php
	$query=$_GET["qry"];
	include ("include/db_connect.php");
	// Query the database
	$sql = "SELECT * FROM LocationData WHERE `address` = '".$query."'";
	$result = mysqli_query($db, $sql);
		if($result === FALSE) {
			die(mysql_error());
	}
// Prepare table structure
echo "<table class='ui striped table'>";
	echo "<thead>";
		echo "<tr>";
			echo "<th>SMS Code</th>";
			echo "<th>Address</th>";
			echo "<th>Latitude</th>";
			echo "<th>Longitude</th>";
			echo "<th>Link to</th>";
		echo "</tr>";
	echo "</thead>";
// Fill table with values returned by the database query
	while($row = mysqli_fetch_assoc($result)){
	echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['latitude']."</td>";
		echo "<td>".$row['longitude']."</td>";
		echo "<td><i class='angle right icon grey'></i><a href='http://maps.google.com/maps?q=loc:".$row['latitude'].",".$row['longitude']."'>Google Maps</a></td>";
	echo "</tr>";
	}
echo "</table>";
?>