<?php
	include 'header.php';
?>

<?php
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "Please login or register Adopt an animal";
	}
?>


<?php
//session_start();
include 'dbh.php';

echo "<h1>Adoptions</h1>";
echo "<br><br><br>";
if (isset($_SESSION['id'])) {

$sql="SELECT * FROM Adoptions";

$results=mysqli_query($conn, $sql);



}

//if the number of my results variable is greater than 0, then execute the following code which says while there is more then 1 row, echo out the following columns from that row.

if (mysqli_num_rows($results)>0) {
	while($row=mysqli_fetch_array($results)) {
		echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5];
		echo "<br>";
	}
	
}

else {
	echo "";
	
}	
mysqli_close($conn);
?>
<br><br><br>
<?php
	if (isset($_SESSION['id'])) {
		echo "<form action='includes/requestItem.inc.php' method='POST'>
	<input type='text' name='Animal ID' placeholder='Enter the Animal ID'><br>
	<input type='text' name='Name' placeholder='Enter the Name'><br>
	<input type='text' name='PickupDate' placeholder='Enter the Pickup date'><br>
	<button type ='submit'>Submit request!</button>
		</form>";
	}
	
	else {
		echo " ";
	}
?>

</body>
</html>