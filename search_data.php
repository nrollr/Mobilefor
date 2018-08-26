<?php
include ("include/db_connect.php");
// Query the database, using the values from the searchfield and construct table
$param = $_GET["searchData"];
$fetch = mysqli_query($db, "SELECT * FROM LocationData WHERE name REGEXP '^$param' OR address REGEXP '^$param'");
	while ($row = mysqli_fetch_object($fetch)){
		$sResults .= '<tr>';
		$sResults .= '<td>'.$row->name.'</td>';
		$sResults .= '<td>'.$row->address.'</td>';
		$sResults .= '<td>'.$row->latitude.'</td>';
		$sResults .= '<td>'.$row->longitude.'</td>';
		$sResults .= '<td><i class="angle right icon grey"></i><a href=http://maps.google.com/maps?q=loc:'.$row->latitude.','.$row->longitude.' class="url">Google Maps</a></td></tr>';
	}
mysqli_close($db);
echo $sResults;
?>