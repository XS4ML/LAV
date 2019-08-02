
<?php
	include 'header.php';
?> 


<?php
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "Please login to be able to add an animal ";
	}
?>

<br><br><br>

<?php
	if (isset($_SESSION['id'])) {
		echo "<form action='includes/addItem.inc.php' method='POST'>
	<input type='text' name='Name' placeholder='Enter the name of the animal'><br>
	<input type='text' name='Type' placeholder='Enter the Type of animal e.g. Dog, Cat, Fish  '><br>
	<input type='text' name='Desctiption' placeholder='Enter a description of the animal'><br>
	<button type ='submit'>Add Item</button>
		</form>";
	}
	
	else {
		echo " ";
	}
?>

</body>
</html>