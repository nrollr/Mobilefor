<?php

	$response = array(); // Array for JSON response

	## Establish database connection and select all items in table
	$db = new mysqli("hostname", "username", "password", "MapsData"); // Replace hostname, username and password
	$result = $db->query("SELECT * FROM LocationData");
	$xml = new SimpleXMLElement('<Markers/>');

	while($row = mysqli_fetch_assoc($result)) 
	   {
	 	$Marker = $xml->addChild('Marker');
		$Marker->addChild('ID',$row['id']);
	 	$Marker->addChild('Location',$row['address']);
	 	$Marker->addChild('Code',$row['name']);
	 	$Marker->addChild('Latitude',$row['latitude']);
	 	$Marker->addChild('Longitude',$row['longitude']);
	   }

	$dom = new DOMDocument('1.0');
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($xml->asXML());  

	## Save XML to file 
	## Requires write access to the Data directory !!
	$dom->save('../data/LoctionData.xml');
?>
