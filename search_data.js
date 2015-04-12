$(document).ready(function() {
	$('#results').html('&nbsp');
	$('#searchData').keyup(function() {
		var searchVal = $(this).val();
            if(searchVal !== '') {
                $.get('search_data.php?searchData='+searchVal, function(returnData) {
                	$('#results').html(returnData);
                }); } 
            else { $('#results').html('&nbsp'); }
		});
	});