<?php
	require("../include/db_connect.php");

	function parseToXML($htmlStr) { 
	$xmlStr=str_replace('<','&lt;',$htmlStr); 
	$xmlStr=str_replace('>','&gt;',$xmlStr); 
	$xmlStr=str_replace('"','&quot;',$xmlStr); 
	$xmlStr=str_replace("'",'&#39;',$xmlStr); 
	$xmlStr=str_replace("&",'&amp;',$xmlStr); 
	return $xmlStr; 
	} 

	## Establish database connection
	$connection = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
	$db_selected = mysql_select_db($dbname, $connection);
	if (!$db_selected) {
	  die ('Can\'t use db : ' . mysql_error());
	}
	
	## Query the database and fetch all terminals    
	$query = "SELECT * FROM LocationData WHERE type='terminal'";
	$result = mysql_query($query);
	if (!$result) {
	  die('Invalid query: ' . mysql_error());
	}

	header("Content-type: text/xml");
	echo '<markers>';
	while ($row = @mysql_fetch_assoc($result)){
	  echo '<marker ';
	  echo 'name="' . parseToXML($row['name']) . '" ';
	  echo 'address="' . parseToXML($row['address']) . '" ';
	  echo 'lat="' . $row['latitude'] . '" ';
	  echo 'lng="' . $row['longitude'] . '" ';
	  echo 'type="' . $row['type'] . '" ';
	  echo '/>';
	}

	echo '</markers>';
?>
