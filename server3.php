<?php
session_start();

// initializing variables

$Card_Type   = "";
$Ration_Card_Number   = "";
$errors = array(); 

// connect to the database


$db=mysqli_connect('localhost','root','','registration');




// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
 
  $Card_Type = $_POST['Card_Type'];
  $Ration_Card_Number =  $_POST['Ration_Card_Number'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


  if (empty($Card_Type)) { array_push($errors, "Card_Type is required"); }
  if (empty($Ration_Card_Number)) { array_push($errors, "Card_Number is required"); }
 
  
    
  // Finally,if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO  identification VALUES('$Card_Type', '$Ration_Card_Number')";
  	mysqli_query($db, $query);
  

  }
}
?>









