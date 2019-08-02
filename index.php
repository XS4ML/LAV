<?php
	include 'header.php';
?>

</br>
<?php
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "Login failed!";
	}
?>


</body>
</html>