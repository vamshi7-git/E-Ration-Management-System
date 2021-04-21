<?php
session_start();

// initializing variables
$date = "";
$Ration_Card_Number   = "";
$name="";
$rice="";
$wheat="";
$pulses="";
$sugar="";
$errors = array(); 

// connect to the database


$db=mysqli_connect('localhost','root','','registration');




// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $date =  $_POST['date'];
  $Ration_Card_Number = $_POST['Ration_Card_Number'];
  $name= $_POST['name'];
  $rice = $_POST['rice'];
  $wheat = $_POST['wheat'];
  $pulses= $_POST['pulses'];
  $sugar = $_POST['sugar'];



  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


  if (empty($date)) { array_push($errors, "date is required"); }
  if (empty($Ration_Card_Number)) { array_push($errors, "Ration card number is required"); }
  if(empty($name)){array_push($errors,"name is required");}
  if(empty($rice)){array_push($errors,"rice number is required");}
  if(empty($wheat)){array_push($errors,"wheat is required");}
  if(empty($pulses)){array_push($errors,"pulses is required");}
  if(empty($sugar)){array_push($errors,"sugar is required");}
 
  
    
  // Finally,if there are no errors in the form
  if (count($errors) == 0) 
  {
		$query = "INSERT INTO  distribution  VALUES('$date','$Ration_Card_Number','$name', '$rice','$wheat','$pulses','$sugar')";
		mysqli_query($db, $query);
		header('location:display.php');
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Distribution</title>
	<link rel="stylesheet" type="text/css" href="form5.css">
</head>
<body>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="display.php">Delivery</a></li>
		<li><a href="displayprofile.php">Profile</a></li>
		<li style="float:right ;"><a href="index.php?logout='1'">Sign out</a></li>
	</ul>
	  
        <p class="head">E-RATION MANAGEMENT SYSTEM</p>
    </div>
	<div class="sign-up-form">
		<h1>Distribution Details</h1>

		<form method="post" action="form5.php">
			<?php include('errors.php')?>
			<input type="text" class="inputboxes" name="date" placeholder="yyyy-mm-dd" > <br>
			<input type="text" class="inputboxes" name="Ration_Card_Number"  placeholder="Ration Card Number " ><br>
			<input type="text" class="inputboxes" name="name"  placeholder="Name"  ><br>
			<input type="text" class="inputboxes" name="rice"  placeholder="Rice" ><br>
			<input type="text" class="inputboxes" name="wheat"  placeholder="Wheat" ><br>
			<input type="text" class="inputboxes" name="pulses"  placeholder="Pulses" ><br>
			<input type="text" class="inputboxes" name="sugar"  placeholder="Sugar" ><br>
			<button type="submit" class="Submitbutton" name="submit">Distribute</button>
			
		</form>

	</div>
</body>
</html>