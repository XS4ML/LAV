<?php
session_start();
include '../dbh.php';

$uid= $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);


if (!$row = mysqli_fetch_assoc($result)) {
	echo "Your username or password is incorrect! Please try again.";
} else {
	$_SESSION['id'] = " ";
}

if($userType == 1)
  header("Location: ../adminpage.php");

else
  header("Location: ../animals.php");
?>

