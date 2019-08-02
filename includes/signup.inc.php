<?php
session_start();
include '../dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid= $_POST['uid'];
$pwd = $_POST['pwd'];
$userType = $_POST[userType];

$sql = "INSERT INTO users (first, last, uid, pwd, userType)
VALUES ('$first', '$last', '$uid', '$pwd', 0)";
$result = mysqli_query($conn, $sql);

header("Location: ../index.php");
?>