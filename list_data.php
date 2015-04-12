<?php
  $query=$_GET["qry"];

  ## Establish database connection
	require("include/db_connect.php");
  $connection = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
	$db_selected = mysql_select_db($dbname, $connection);

  ## Query the database
  $sql = "SELECT * FROM LocationData WHERE address = '".$query."'";
  $result = mysql_query($sql);
  if($result === FALSE) {
      die(mysql_error()); 
  }

  ## Prepare table structure
  echo "<table id='table'>
  <thead>
  <tr>
  <th class='c1'>SMS Code</th>
  <th class='c2'>Address</th>
  <th class='c3'>Latitude</th>
  <th class='c3'>Longitude</th>
  <th class='c4'>Link to</th>
  </tr>
  </thead>";

  ## Fill table with values returned by the database query
  while($row=mysql_fetch_array($result))
    {
    echo "<tr>";
    echo "<td class='code'>" . $row['name'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['latitude'] . "</td>";
    echo "<td>" . $row['longitude'] . "</td>";
    echo "<td><i class='fa fa-location-arrow'></i><a class='url' href='http://maps.google.com/maps?q=loc:" . $row['latitude'] .",". $row['longitude'] ."'>Google Maps</a></td>";
    
    echo "</tr>";
    }
  echo "</table>";
?>









