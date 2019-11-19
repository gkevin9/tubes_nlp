<!DOCTYPE html>
<html>
<body>
	<table border="1" >
	<tr>
		<th>Person</th>
		<th>Organization</th>
		<th>Location </th>
	</tr>
	<?php
		foreach ($text as $value) {
			echo "<tr>";
			foreach ($value as $isi) {
				echo "<td>". $isi ."</td>";
			}
			echo "</tr>"
		}
	?>
	<tr>
		<td>{{text[0][2]}}</td>
		<td>{{text[1][2]}}</td>
		<td>{{text[2][2]}}</td>
	</tr>
</table>

</body>
</html>
