<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-themes.min.css');?>">
</head>
<body>

		<div class="navbar navbar-default">
		<div class="container">
		<h2><span class="glyphicon glyphicon-calendar"></span>&nbsp;Welcome to the Calendar database!</h2>
	</div>
</div>
<div class="container">
	
	<a href="<?php echo base_url('/calendar/create_birthday/'); ?>" class="btn btn-primary">Add New</a>
	<h3>Birthdate list:</h3>

		 <table  class="table table-bordered table-responsive">
		  	<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Day</th>
				<th>Month</th>
				<th>Year</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>

<?php
// print_r($birthdays);
		foreach ($birthdays as $birthday) {
				echo "<tr>";
				echo "<td>" . " " . $birthday->id     . "</td>";
				echo "<td>" . " " . $birthday->person . "</td>";
				echo "<td>" . " " . $birthday->day    . "</td>";
				echo "<td>" . " " . $birthday->month  . "</td>";
				echo "<td>" . " " . $birthday->year   . "</td>";
				echo "<td class='glyphicon glyphicon-trash'>" . " " . "<a href=/Calendar-CodeIgnitor0/calendar/delete_birthday/" .       	$birthday->id . ">Delete</a></td>";
				echo "<td class='glyphicon glyphicon-pencil'>" . " " . "<a href=/Calendar-CodeIgnitor0/calendar/edit_birthdays/" . 				    $birthday->id . ">Edit</a></td>";
				

				echo "</tr>";
				}


				//Can I use this code? To change a month number into a word like '1' => januari    ??						  date('F', mktime(0, 0, 0, $bday['month'], 10))

?>
</table>

</body>
</html>