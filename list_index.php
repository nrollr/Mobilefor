<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Select with dropdown list</title>
    	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css">
	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
</head>

<body>

<?php
	## Establish database connection
	require("include/db_connect.php");
	$connection = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
	$db_selected = mysql_select_db($dbname, $connection);

	## Query the database and return name and address
	$sql = "SELECT name, address FROM LocationData GROUP BY address ASC";
	$result = mysql_query($sql);
	$options = "";
	
	while ($row = mysql_fetch_array($result)) {
	    $name = $row["name"];
	    $address = $row["address"];
	    $options.="<option value=\"$address\">".$address."";}
?>
<br /> 

<div class="container">

<div class="row">
	<div class="col-md-3">
		<div id="list">
			<form>
				<select name="locations" onchange="showData(this.value)" class="selectpicker show-tick" data-width="250px" >
				<option value=0>Select an address:</option>
					<?=$options.="<option value=\"$address\">".$address.'</option>';?>
				</select>  
			</form>
		</div>
	</div>
	
	<div class="col-md-6">			
			<span id="explain">Select an address from to dropdown list to display data<br />
			When an entry selected, a table with the information will appear...</span>
	</div>
<br /> 
</div>

<div class="row">
	<div class="col-md-8">
		<div id="output"></div>
	</div>
</div>		
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script language="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<script language="javascript">$('.selectpicker').selectpicker('refresh');</script>
<script language="javascript">
function showData(str)
	{ if (str=="")
  		{document.getElementById("output").innerHTML="";
	  	return;}
	if (window.XMLHttpRequest)
  		{xmlhttp=new XMLHttpRequest();}
	else
  		{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
		xmlhttp.onreadystatechange=function()
		  {if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{document.getElementById("output").innerHTML=xmlhttp.responseText;}}
		xmlhttp.open("GET","list_data.php?qry="+str,true);
		xmlhttp.send();
	}
</script>

</body>
</html>