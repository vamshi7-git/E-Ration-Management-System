<?php
session_start();

// initializing variables
$Ration_Card_Number = "";
$Card_Type   = "";
$name="";
$age="";
$mobile_number="";
$address="";
$family_members="";
$errors = array(); 

// connect to the database


$db=mysqli_connect('localhost','root','','registration');




// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $Ration_Card_Number =  $_POST['Ration_Card_Number'];
  $Card_Type = $_POST['Card_Type'];
  $name= $_POST['name'];
  $age = $_POST['age'];
  $mobile_number = $_POST['mobile_number'];
  $address= $_POST['address'];
  $family_members = $_POST['family_members'];



  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


  if (empty($Ration_Card_Number)) { array_push($errors, "Ration_Card_Number is required"); }
  if (empty($Card_Type)) { array_push($errors, "Card_Type is required"); }
  if(empty($name)){array_push($errors,"Name is required");}
  if(empty($mobile_number)){array_push($errors,"Mobile number is required");}
  if(empty($address)){array_push($errors,"address is required");}
  if(empty($family_members)){array_push($errors,"Family members is required");}
  
 
  $user_check_query = "SELECT * FROM card WHERE Ration_Card_Number='$Ration_Card_Number' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Ration_Card_Number'] === $Ration_Card_Number) {
      array_push($errors, "Card number  already exists");
    }
  }
    
  // Finally,if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO  card  VALUES($Ration_Card_Number, '$Card_Type','$name', $age,$mobile_number,'$address',$family_members)";
  	mysqli_query($db, $query);
 
  	header('location:form4.php');

  }
}
?>









