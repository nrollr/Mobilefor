<div class="ui grid">
	<div class="six wide column">
		<form class="ui form">
			<div class="field">
				<select name="location" class="ui fluid dropdown" onchange="showData(this.value)">
				<option value="0">Select an address:</option>
				<?php
					include ("include/db_connect.php");
					// Query the database
					$sql = "SELECT `address` FROM `LocationData` GROUP BY `address`";
					$query = mysqli_query($db, $sql);
						while ($row = mysqli_fetch_assoc($query)){
						echo "<option value='".$row['address']."'>".$row['address']."</option>";
						};
				?>
				</select>
			</div>
		</form>
	</div>
</div>
<br>
<div id="output"></div>