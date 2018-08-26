<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<br>
<br>
<!--Header-->
<div class="ui grid">
	<div class="five wide column"></div>
	<div class="six wide column">
		<h2 class="ui dividing header">Parking codes based on location data</h2>
		<p>Beneath you will find two different methods to query the database containing the exact location of P&D machines throughout the city of Leuven with their corresponding <a href="https://www.4411.be/en/private-individual/#hoe-werkt-het">4411</a> parking code, which you can use to start and stop a parking session.</p>
	<br>
	<!--First method-->
		<div class="ui message">
			<h3 class="ui header">Query with a dropdown list</h3>
			<p>The <strong>first</strong> method requires you to select a street name from a dropdown list.<br> After selecting an entry, the information will be loaded and displayed in a table.</p>
		</div>
		<div class="ui container">
			<?php include ("list_index.php");?>
		</div>
	<br>
	<br>
	<br>
	<div class="ui horizontal divider"> OR </div>
	<br>
	<br>
	<br>
	<!--Second method-->
		<div class="ui message">
		<h3 class="ui header">Query with dynamic search filtering</h3>
		<p>The <strong>second</strong> method allows you to enter the street name or parking code yourself. Based on your input, the table will be dynamically completed with the information you are looking for.</p>
		</div>
		<div class="ui container">
			<?php include ("search_index.php");?>
		</div>
	</div>
	<div class="five wide column"></div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.js"></script>
<script src="search_data.js"></script>
<script type="text/javascript">
	function showData(str){
		if (str==""){
			document.getElementById("output").innerHTML="";
			return;
		}
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}
		else {
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById("output").innerHTML=xmlhttp.responseText;
				}
			}
		xmlhttp.open("GET","list_data.php?qry="+str,true);
		xmlhttp.send();
	}
</script>
<script type="text/javascript">
$('.ui.dropdown').dropdown();
</script>
</body>
</html>