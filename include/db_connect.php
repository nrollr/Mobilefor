<?php
	// Replace hostname, username, password to reflect your environment
	$db = @mysqli_connect("hostname", "username", "password", "MapsData");
		if ($db->connect_errno) {
			echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
		}
	echo $mysqli->host_info . "\n";
?>