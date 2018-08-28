<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.css">
	<link rel="stylesheet" href="../assets/css/view.css">
</head>

<body onload="load()">
<div class="ui equal height grid">
	<div class="ui twelve wide column">
		<div><select id="locationSelect" style="visibility:hidden"></select></div>
		<div id="map" style="height: 100%"></div>
	</div>
	<div class="ui four wide column">
		<br>
		<h3 class="ui header">Parking</h3>
		<p>The map on the left is a visual representation of P&D machines <i class="info circle icon"></i> throughout the city of Leuven.<br>
		Click a marker to reveal the parking code and address of that specific marker.</p>
		<br>
		<p><i class="info circle icon"></i><i>Pay and Display machine, a type of ticket machine used for regulating parking in urban areas or in car parks.</i></p>
	</div>
</div>

<script src="query_map.js"></script>
<!-- Make sure to insert your own developer key-->
<script src="http://maps.googleapis.com/maps/api/js?key=YOUR_KEY"></script>
</body>
</html>