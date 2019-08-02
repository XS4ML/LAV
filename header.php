<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<nav>
		<ul>
			<li><a href="index.php">HOME</a></li>
			<?php
				if (isset($_SESSION['id'])) {
					echo "<form action='includes/logout.inc.php'>
						<button>LOG OUT</button>
					</form>";
				} else {
					echo "<form action='includes/login.inc.php' method='POST'>
						<input type='text' name='uid' placeholder='Enter Username'>
						<input type='password' name='pwd' placeholder='Enter Password'>
						<button type ='submit'>LOGIN</button>
					</form>";
				}
			?>
			<li><a href="signup.php">SIGNUP</a></li>
			<li><a href="Animals.php">ANIMALS</a><li>
			<li><a href="addanimal.php">ADD ANIMAL</a><li>
			<li><a href="Adoptions.php">CREATE AN ADOPTION </a><li>
		</ul>
	</nav>
</header>