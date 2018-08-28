<?php
	header ("Content-type: text/xml");
	require ("../include/db_connect.php");

	function parseToXML($htmlStr) { 
		$xmlStr=str_replace('<','&lt;',$htmlStr); 
		$xmlStr=str_replace('>','&gt;',$xmlStr); 
		$xmlStr=str_replace('"','&quot;',$xmlStr); 
		$xmlStr=str_replace("'",'&#39;',$xmlStr); 
		$xmlStr=str_replace("&",'&amp;',$xmlStr); 
		return $xmlStr; 
	} 
	// Query the database and fetch all terminals    
	$query = "SELECT * FROM LocationData WHERE type='terminal'";
	$result = mysqli_query($db, $query);
	if (!$result) {
		die('Invalid query: '.mysqli_error());
	}
	echo '<markers>';
	while ($row = @mysqli_fetch_assoc($result)){
		echo '<marker ';
		echo 'name="'.parseToXML($row['name']).'" ';
		echo 'address="'.parseToXML($row['address']).'" ';
		echo 'lat="'.$row['latitude'].'" ';
		echo 'lng="'.$row['longitude'] .'" ';
		echo 'type="'.$row['type'].'" ';
		echo '/>';
	}
	echo '</markers>';
?>
