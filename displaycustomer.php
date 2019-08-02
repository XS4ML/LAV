<?php
session_start();
include 'dbh.php';

	if (isset($_POST['Name'])){
		$Name = $_POST['Name'];
	} else { 
		$Name = NULL;
		echo "please enter the name of the animal";
	}
	
	
	if (isset($_POST['Type'])){
 	 	$Type = $_POST['Type'];
	 } else { 
	 	$Type = NULL;
		echo "Please enter the type of the animal";
	 }
	 
	if (isset($_POST['Description'])){
 	 	$Description = $_POST['Description'];
	 } else { 
	 	$Description = NULL;
		echo "Please enter a description";
	}
		 
?>