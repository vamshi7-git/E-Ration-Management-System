<?php include('server2.php') ?>


<?php 
  

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>



<!-- user registration-->
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="form3.css">
</head>
<body>
<div class="header">
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>       
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
</div>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="display.php">Delivery</a></li>
		<li><a href="displayprofile.php">Profile</a></li>
		<li style="float:right ;"><a href="index.php?logout='1'">Sign out</a></li>
		
	</ul>

	<p class="head">E-RATION MANAGEMENT SYSTEM</p>
    </div>
	<div class="sign-up-form">
		<h1>Card holders Registration</h1>
		<form method="post" action="index.php">
		 	<?php include("errors.php"); ?>
			<input type="text" class="inputboxes" name="Ration_Card_Number" placeholder="Ration Card Number" > <br>
			<input type="text" class="inputboxes" name="Card_Type"  placeholder="Card Type" ><br>
			<input type="text" class="inputboxes" name="name"  placeholder="Name"  ><br>
			<input type="text" class="inputboxes" name="age"  placeholder="Age" ><br>
			<input type="tel" class="inputboxes" name="mobile_number" placeholder="mobile_number"  ><br>
			<input type="text" class="inputboxes" name="address" placeholder="address"  ><br>
			<input type="text" class="inputboxes" name="family_members" placeholder="Number of family members" ><br>
			<button type="submit" class="Submitbutton" name="submit">submit</button>
		</form>
	</div>
</body>
</html>