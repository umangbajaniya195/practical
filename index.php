<?php

	include "database.php";

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$date = $_POST['booking_date'];
		$day = $_POST['booking_day'];


		if($name!="" && $email!="" && $mobile!="" )
		{
			$insert = "INSERT INTO booking (name, email, mobile, booking_date, booking_day) VALUES ('$name', '$email', '$mobile', '$date', '$day')";

			$query = mysqli_query($conn, $insert);

			if($query)
			{
				header("location:record.php");
			}
			else
			{
				echo "All fields are required";
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking System</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="heading text-center">
			<h2>Booking System</h2>
		</div>
		<div class="row">
			<form class="col-lg-6 offset-lg-3" action="" method="post">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="mobile no">Mobile No:</label>
					<input type="" name="mobile" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="Days">Days
						<input class="form-control" type="checkbox" name="booking_day">All &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="booking_day">Sunday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="booking_day">Monday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="booking_day">Tuesday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="booking_day">Wednesday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="booking_day">Thursday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="booking_day">Friday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="booking_day">Saturday 
					</label>

				</div>
				<div class="form-group">
					<label for="date">Booking Date</label>
					<input type="date" name="booking_date" class="form-control">
				</div>
				<div class="">
					<button type="submit" value="submit" name="submit" class="btn btn-success">Submit</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>