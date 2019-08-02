<?php
	include 'header.php';
?>

<?php
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "Please login or register to add or Adopt an animal";
	}
?>

<h1>Lost Items</h1>

</br></br></br>
<h5>Name, Type, Description, Date Aded</h5>
<?php
//session_start();
include 'dbh.php';

$sql="SELECT * FROM Animals";

$results=mysqli_query($conn, $sql);


//if the number of my results variable is greater than 0, then execute the following code which says while there is more then 1 row, echo out the following columns from that row.

if (mysqli_num_rows($results)>0) {
	while($row=mysqli_fetch_array($results)) {
		echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5];
		echo "<br>";
	}
	
}

	
mysqli_close($conn);
?>

</body>
</html>