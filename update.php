<?php

$con = mysqli_connect('localhost','root','','registration');

 if(isset($_POST['done'])){

 
 $id = $_GET['id'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $mobile_number=$_POST['mobile_number'];
 $q = " update users set id=$id, username='$username', email='$email',mobile_number='$mobile_number' where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:displayprofile.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label>E-mail: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label>Mobile Number: </label>
 <input type="text" name="mobile_number" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>