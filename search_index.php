<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Select with search and autocomplete</title>
    	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
</head>

<body>
<br />
<div class="container">

<div class="row">
	<div class="col-md-3">
		<div class="form-group" id="search">
				<input type="text" class="form-control" id="searchData" placeholder="Enter address or code" autocomplete="off"> 
		</div>
	</div>
  	<div class="col-md-6">
		<span id="explain">Start typing either an address or parking code in the search field.<br /> 
		Based on your input, the table will be filled with the corresponding results..</span>
	</div>
</div>

<div class="row">
	 <div class="col-md-9">
      <table id="table">
		<thead>
			<tr>
				<th class="c1">SMS Code</th>
				<th class="c2">Address</th>
                <th class="c3">Latitude</th>
                <th class="c3">Longitude</th>
				<th class="c4">Link to</th>	
			</tr>
		</thead>
		<tbody id="results"></tbody>
	  </table>
	 </div>
</div>	
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="search_data.js"></script>

</body>
</html>