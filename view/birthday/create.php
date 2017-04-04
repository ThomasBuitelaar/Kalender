<div class="container">
	<form action="<?= URL ?>birthday/createSave" method="post">

		<input type="text" name="person" placeholder="John Doe">
		<select name="day">
		<?php for ($i = 1; $i <= 31; $i++) {
			echo "<option value=\"$i\">$i</option>";
		} ?>
		</select>

		<select name="month">
		<option value="2">Nee</option>
		</select>

		<select name="year">
		<?php for ($a = 1900; $a <= 2017; $a++) {
			echo"<option value=\"$a\">$a</option>";
		}
		 ?>
		</select>


</div>