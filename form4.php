
<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['Ration_Card_Number'];
    
    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "","registration");
    
    // mysql search query
    $query = "SELECT `Ration_Card_Number`, `Card_Type`, `name`,`age`,`mobile_number`,`address`,`family_members`FROM `card` WHERE `Ration_Card_Number` = $id LIMIT 1";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $Ration_Card_Number = $row['Ration_Card_Number'];
        $Card_Type = $row['Card_Type'];
		$name = $row['name'];
		$age= $row['age'];
		$mobile_number= $row['mobile_number'];
		$address = $row['address'];
		$family_members= $row['family_members'];
		
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
            $Ration_Card_Number = "";
            $Card_Type = "";
			$name = "";
			$age = "";
			$mobile_number = "";
			$address = "";
			$family_members = "";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
    $Ration_Card_Number = "";
    $Card_Type = "";
	$name = "";
	$age = "";
	$mobile_number = "";
	$address = "";
	$family_members = "";
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer Details</title>
	<link rel="stylesheet" type="text/css" href="form4.css">
	
</head>
<body>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="display.php">Delivery</a></li>
		<li><a href="displayprofile.php">Profile</a></li>
		<li style="float:right ;"><a href="index.php?logout='1'">Sign out</a></li>
	</ul>
	  
    <p class="head">E-RATION MANAGEMENT SYSTEM</p>
    
	<div class="sign-up-form">
		<h1>Ration Distribution</h1>
		<button type="submit" class="Submitbutton" name="submit"><a href="form5.php">Distribute</a></button>
		
	</div>
	<div class="sign-up-form2">						
		<h1>Card holders details</h1>
		
		<form action="form4.php" method="post">

        

			<input type="text" class="inputboxes" name="Ration_Card_Number" placeholder="Ration Card Number" value="<?php echo $Ration_Card_Number;?>"><br>
			<input type="text"class="inputboxes"  name="Card_Type" placeholder="Card_Type" value="<?php echo $Card_Type;?>"><br>
			<input type="text" class="inputboxes" name="name" placeholder="name" value="<?php echo $name;?>"><br>
			<input type="text" class="inputboxes" name="age"  placeholder="Age" value="<?php echo $age;?>"><br>
			<input type="tel" class="inputboxes" name="mobile_number" placeholder="mobile_number" value="<?php echo $mobile_number;?>"  ><br>
			<input type="text" class="inputboxes" name="address" placeholder="address" value="<?php echo $address;?>"><br>
			<input type="text" class="inputboxes" name="family members" placeholder="Number of family members" value="<?php echo $family_members;?>"><br>
			<input type="submit" class="inputboxes"  name="search" value="Find">		

   		</form>


	</div>
</body>
</html>

