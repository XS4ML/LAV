<?php
session_start();
include '../dbh.php';

$Name = $_POST['Name'];
$Type  = $_POST['FoundTime'];
$Description= $_POST['Description'];
$DateAdded = $_POST['DateAdded'];
//$Photo = $_POST['Photo'];


$sql = "INSERT INTO animals (Name, FoundTime, Description, DateAdded) 
VALUES ('$Name', '$Type', '$Description', '$DateAdded')";
$result = mysqli_query($conn, $sql);

if(!mysqli_query($conn, $sql)) {
	die("Try again");
}
else {
	echo "Success";
}
header("Location: ../animals.php");
?>