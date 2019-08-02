<?php
	include 'header.php';
?>

<?php
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "Login failed!";
	}
?>

<br><br><br>
<!-- User will enter these details and this will get sent and stored to the database	. I am using the POST method instead of GET as this the information sent via this method is invisible to others -->
<?php
	if (isset($_SESSION['id'])) {
		echo "You are already logged in!";
	} else {
		echo "<form action='includes/signup.inc.php' method='POST'>
	<input type='text' name='first' placeholder='Enter Firstname'><br>
	<input type='text' name='last' placeholder='Enter Lastname'><br>
	<input type='text' name='uid' placeholder='Enter Username'><br>
	<input type='password' name='pwd' placeholder='Enter Password'><br>
	<button type ='submit'>SIGN UP</button>
		</form>";
	}
	
	
?>



</body>
</html>