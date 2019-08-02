<?php
session_start();
include '../dbh.php';

$AnimalID = $_POST['AnimalID'];
$Name = $_POST['Name'];
$PickUpDate = $_POST['PickUpDate'];

$sql = "INSERT INTO Adoptions (AnimalID, Name, PickUpDate) 
VALUES ('$AnimalID', '$Name', '$PickUpDate')";
$result = mysqli_query($conn, $sql);

if(!mysqli_query($conn, $sql)) {
	die("Try again");
}
else {
	echo "Success";
}
header("Location: ../Animals.php");
?>