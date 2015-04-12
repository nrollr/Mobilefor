<?php
	## Establish database connection
    require("include/db_connect.php");
	$connection = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
	mysql_select_db($dbname);

    ## Query the database, using the values from the searchfield and construct table
    $param = $_GET["searchData"];
    if ($connection) {
        $fetch = mysql_query("SELECT * FROM LocationData WHERE name REGEXP '^$param' OR address REGEXP '^$param'");
        while ( $row = mysql_fetch_object( $fetch ) ) {
            $sResults .= '<tr id="'. $row->id . '">';
            $sResults .= '<td class="code">' . $row->name . '</td>';
            $sResults .= '<td>' . $row->address . '</td>';
            $sResults .= '<td>' . $row->latitude . '</td>';
            $sResults .= '<td>' . $row->longitude . '</td>';
			$sResults .= '<td><i class="fa fa-location-arrow"></i><a href=http://maps.google.com/maps?q=loc:'. $row->latitude . ','. $row->longitude . ' class="url">Google Maps</a></td></tr>';
        }
    }
    mysql_close($connection);
    echo $sResults;
?>