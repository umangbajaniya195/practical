<?php

include "database.php";

$id = $_GET['id'];

$m = mysqli_query($conn,"SELECT * FROM booking WHERE id = '$id'");

$check = mysqli_fetch_assoc($m);

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$day = $_POST['boking_day'];

	//if($id != "")
	
		//update
		//move_uploaded_file($tmp_name,'upload/'.$pic);
		 $sql = "UPDATE `booking` SET `name`='$name',`mobile`='$mobile',`email`='$email',`booking_date`='$date', `booking_day`='$day' WHERE `id`='$id'";
		$query = mysqli_query($conn,$sql);
		
          //echo "Remove Pic";
          header('location:record.php');       
     
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
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
					<input type="text" name="name" class="form-control" value="<?php echo $check['name'];?>">
				</div>
				<div class="form-group">
					<label for="mobile no">Mobile No:</label>
					<input type="text" name="mobile" class="form-control" value="<?php echo $check['mobile'];?>">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" class="form-control" value="<?php echo $check['email'];?>">
				</div>
				<div class="form-group">
					<label for="date">Booking Date</label>
					<input type="date" name="booking_date" class="form-control" value="<?php echo $check['booking_date'];?>">
				</div>
				<div class="form-group">
					<label for="Days">Days
						<input class="form-control" type="checkbox" name="days" value="all" <?php if($check['booking_day']=="all"){echo "checked";}?>>All &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="days" value="sunday" <?php if($check['booking_day']=="sunday"){echo "checked";}?>>Sunday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="days" value="monday" <?php if($check['booking_day']=="monday"){echo "checked";}?>>Monday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="days" value="tuesday" <?php if($check['booking_day']=="tuesday"){echo "checked";}?>>Tuesday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="days" value="wednesday" <?php if($check['booking_day']=="wednesday"){echo "checked";}?>>Wednesday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="days" value="thursday" <?php if($check['booking_day']=="thursday"){echo "checked";}?>>Thursday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="days" value="friday" <?php if($check['booking_day']=="friday"){echo "checked";}?>>Friday &nbsp
					</label>
					<label for="Days">
						<input class="form-control" type="checkbox" name="days" value="saturday" <?php if($check['booking_day']=="saturday"){echo "checked";}?>>Saturday 
					</label>

				</div>
				<div class="">
					<button type="submit" value="submit" name="submit" class="btn btn-success">Submit</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
