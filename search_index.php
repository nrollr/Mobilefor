<div class="ui grid">
	<div class="six wide column">
		<form class="ui form">
			<div class="field">
				<input type="text" id="searchData" placeholder="Enter address or code" autocomplete="off">
			</div>
	</div>
	<div class="ten wide column">
		<p>Start typing either an <strong>address or parking code</strong> in the search field.<br>Based on your input, the table will be filled with the corresponding results..</p>
	</div>
</div>
<br>
<br>
<table class="ui striped table">
	<thead>
		<tr>
			<th>SMS Code</th>
			<th>Address</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Link to</th>
		</tr>
	</thead>
	<tbody id="results"></tbody>
</table>