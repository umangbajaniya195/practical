<?php

include "database.php";

$id = $_GET['id'];

$del = mysqli_query($conn,"DELETE FROM booking WHERE id = '$id'");
 

header("location:record.php");

?> 

