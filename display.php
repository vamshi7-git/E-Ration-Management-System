<!DOCTYPE html>
<html>
<head>
<title>Delivery</title>
<link rel="stylesheet" type="text/css" href="display.css">
</head>
<body>
<div>    
    <ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="display.php">Delivery</a></li>
		<li><a href="displayprofile.php">Profile</a></li>
		<li style="float:right ;"><a href="index.php?logout='1'">Sign out</a></li>
		
	</ul>
</div>

<table>
<tr>
<th>Date</th>
<th>Ration_Card_Number</th>
<th>Name</th>
<th>Rice</th>
<th>Wheat</th>
<th>Pulses</th>
<th>Sugar</th>
</tr>

<?php
$conn =mysqli_connect('localhost','root','','registration');
// Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT `date`, `Ration_Card_Number`, `name`, `rice`,`wheat`,`pulses`,`sugar` FROM `distribution` ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"]. "</td><td>" . $row["Ration_Card_Number"] . "</td><td>"
        . $row["name"]. "</td><td>".$row["rice"] . "</td><td>".$row["wheat"] . "</td><td>".$row["pulses"] . "</td><td>".$row["sugar"] . "</td></tr>" ;
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();

?>
</table>
</body>
</html>
