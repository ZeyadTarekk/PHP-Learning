<?php 
	// Connect to a database
	$conn = mysqli_connect('localhost','root','1234','mydatabase');

	// check the connection
	if(!$conn){
		echo "Connection error: " . mysqli_connect_error();
	}
?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<?php include('templates/footer.php'); ?>

</html>