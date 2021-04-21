<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <p class="head">E-RATION MANAGEMENT SYSTEM</p>
	<p style="font-family: Trebuchet MS ; color: white ; ">
				This E-Ration Management System is an application developed to monitor the distribution of Food ration in the socitey.
                The application allows the admin to  register cardholder details so that the admin can easily distribute the ration and store the details regarding it.
                It facilitates the admin to view distributed details which inturn allows the inspector to verify the  admin's distribution work.
                The application aslo has CRUD operations where the admin can view his account details and make the neccessary changes in the future.
            
	</p>
    </div>
	<div class="sign-up-form">
		<h1>Login</h1>

		<form method="post" action="login.php">
			<?php include("errors.php");?>

			<input type="text" class="inputboxes" name="username" placeholder="username" ><br>
			<input type="password" class="inputboxes" name="password" placeholder="password" ><br>
			<button type="submit" class="Submitbutton" name="login">Login</button>
			<p style="font-family: Trebuchet MS">
				Need a new account? <a class="link" href="register.php">Sign-up</a><br><br>
				Login as inspector-<a class="link" href="inspectorregister.php">  login</a>
			<p>
		</form>
	</div>
</body>
</html>
