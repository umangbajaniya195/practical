<?php

	include "database.php"

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<table class="table">
	<thead>
		<th>Id</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Booking Date</th>
		<th>Days</th>
		<th>Edit</th>
		<th>Delete</th>
	</thead>

	<?php

	$sel = "SELECT * FROM booking";

	$res = mysqli_query($conn, $sel);

	while ($data = mysqli_fetch_assoc($res)) {
		?>
			<tbody>
				<tr>
					<td><?php echo $data['id'];?></td>
					<td><?php echo $data['name'];?></td>
					<td><?php echo $data['mobile'];?></td>
					<td><?php echo $data['email'];?></td>
					<td><?php echo $data['booking_date'];?></td>
					<td><?php echo $data['booking_day'];?></td>
					<td><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a></td>
					<td><a href="delete.php?id=<?php echo $data['id'];?>" onclick= 'return checkdelete()'>Delete</a></td>
				</tr>
			</tbody>
		<?php
			}
		?>
</table>
</body>
</html>

<script>
	function checkdelete() 
	{
		return confirm('Are you sure to delete this record?');
	}
</script>

<a href="index.php">Insert New Record</a>