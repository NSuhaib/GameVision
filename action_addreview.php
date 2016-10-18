<?php 
include ('includes/session.php');

$page_title = 'Insert Game';
include ('includes/header.php');
echo "<div style='min-height: 100%'>";
?>

<?php
	$servername = "localhost";
	$username = "fsef15g8";
	$password = "neiu2015";
	$dbname = "fsef15g8";

	// Create connection
	$conn2 = new mysqli($servername, $username, $password, $dbname);

	$review = mysqli_real_escape_string($conn2, trim($_POST['review']));
	$insert = "INSERT INTO reviews (review, game_id) VALUES ('$review')";	
    $r = @mysqli_query($conn2, $insert);	
	
	mysqli_close($conn2);
?>

	<center>
	<h1>Thank you for adding your review!</h1>
		<form action="view-games.php" method="post">
				
		<input type="submit" value="Back to View Games"/>
		
	</form>
	</center>

<?php
include ('includes/footer.php');
echo "</div>";
?>