<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database access</title>
    	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
<div class="container">

	<!--Header-->
	<div class="row">
		<div class="col-md-9">
			<div class="page-header"><h2>Parking codes based on location data</h2></div>
			<p class="lead">Beneath you will find two different methods to query the database containing the exact location of P&D machines throughout the city of Leuven with their corresponding <a href="https://www.4411.be/en/how-does-it-work/on-street/">4411</a> parking code, which you can use to start and stop a parking session.</p>
		</div>
	</div>

	<!--First query method-->
	<div class="row">
		<div class="col-md-8">
			<h4 id="toggle_dropdown"><i class="fa fa-angle-up small"></i>&nbsp;&nbsp;Query with a dropdown list</h4>
			<div id="up">
				<p>The <mark><strong>first</strong> method</mark> requires you to select a street name from a dropdown list. After selecting an entrie, the information will be displayed in a table similar to the first method.</p>
		 		<div><?php include 'list_index.php'; ?></div>
		 	</div>
			<div class="page-section-bottom"></div>
		</div>
	</div>

	<!--Second query method-->
	<div class="row">
		 <div class="col-md-8">
			<h4 id="toggle_search"><i class="fa fa-angle-down small"></i>&nbsp;&nbsp;Query with dynamic search filtering</h4>
			<div id="down">
				<p>The <mark><strong>second</strong> method</mark> allows you to enter the street name or parking code yourself. Based on your input, the table will be dynamically completed with the information you are looking for.</p>
		 		<div><?php include 'search_index.php'; ?></div><br />
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
	    $("#toggle_search").click(function(){
	        $("#down").toggle();
	        $(this).find('i').toggleClass('fa-angle-down fa-angle-up');
	    });
	});
	</script>
	<script>
	$(document).ready(function(){
	    $("#toggle_dropdown").click(function(){
	        $("#up").toggle();
	        $(this).find('i').toggleClass('fa-angle-up fa-angle-down');
	    });
	});
	</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>