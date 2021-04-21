<?php

$con = mysqli_connect('localhost','root','','registration');

$id = $_GET['id'];

$q = " DELETE FROM `users` WHERE id= $id ";

mysqli_query($con, $q);

header('location:displayprofile.php');
