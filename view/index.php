<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	    
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" type="text/css" href="../assets/css/fonts.css" rel="stylesheet" type="text/css" >
        
    <!-- Make sure to insert your own developer key-->     
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=_your_own_developer_key_&sensor=false"></script>
	<script type="text/javascript" src="query_map.js"></script>
</head>

<body onload="load()">
<div class="container-fluid">
<div class="row">
		<div class="col-lg-8">
			<div><select id="locationSelect" style="width:100%;visibility:hidden"></select></div>
			<div id="map" style="width: 100%; height: 90%"></div>
		</div>

		<div class="col-lg-3">
			<div class="page-header"><h4>Parking </h4></div>
			<p class="lead">The map on the left is a visual representation of P&D machines <small><mark>&nbsp;<i class="fa fa-info"></i>&nbsp;</mark></small> throughout the city of Leuven.</p><p class="lead"> Click a marker to reveal the parking code and address of that specific marker.</p>
		</div>

		<div class="col-lg-3">
		<div class="comments"></div>
		<mark>&nbsp;<i class="fa fa-info"></i>&nbsp;</mark> <span class="notes"> Pay and Display machine, a type of ticket machine used for regulating parking in urban areas or in car parks.</span>
		</div>	
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
</body>
</html>



