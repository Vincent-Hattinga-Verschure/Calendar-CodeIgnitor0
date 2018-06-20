<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	<link rel="stylesheet" href="<? echo base_url('/public/css/bootstrap.css');?>">
</head>
<body>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Birth date</th>
				<th colspan="2">Action</th>
			</tr>

		</thead>

<tbody>


<?php
// print_r($birthdays);
foreach ($birthdays as $birthday) {
		echo "<tr>";
		echo "<td>" . "<h3>" . " " . $birthday->id . "</h3>" . "</td>";
		echo "<td>" . "<h4>" . " " . $birthday->person. "</h4>". "</td>";
		echo "<td>" . "<h4>" . " " . $birthday->day. "-" . $birthday->month . "-". $birthday->year . "</h4>". "</td>";
		echo "<td class='center'>" . "<a href=calendar/update/" . $birthday->id . "'>Edit</a></td>";
		echo "<td class='center'>" . "<a href=calendar/delete/" . $birthday->id .  "'>Delete</a></td>";
		echo "<br>" . "</tr>";
		}




?>
</table>
</body>
</html>