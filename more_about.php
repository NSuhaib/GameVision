<?php # Script 3.4 - view-games.php
include ('includes/session.php');

$page_title = 'View Games';
include ('./includes/header.php');

echo "<div style='min-height: 100%'>";
?>
<br/><br/>
 <center>

<?php
$servername = "localhost";
$username = "fsef15g8";
$password = "neiu2015";
$dbname = "fsef15g8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$myGame = $_GET['myGame'];
$game = "SELECT game_title, game_description, game_platform, game_rating, game_genre, game_price, image_file_name, game_tutorial FROM games WHERE game_id = $myGame";

$result = $conn->query($game);
$info = $result->fetch_assoc();

$conn->close();

		//only for admin
			
		//echo "<input type='button' value='Edit/Add Tutorial'/>";
		//echo "<input type='button' value='Delete Tutorial'/>";
		//echo "<input type='button' value='Download Tutorial'/><br>"; 
		
		/* edit review
		echo "<form method='post' action='action_editreview.php'>";
			echo "<input type='hidden' value=".$review." name='userid' />";
			echo "<input type='button' value='Edit Review'/>";
		echo "</form>";
		
		//$_POST['review'] 
		echo "<input type='text' name=".$review."/>";
		
		// delete review
		echo "<form method='post' action='action_deletereview.php'>";
			echo "<input type='hidden' value='delete' name='userid' />";
			echo "<input type='button' value='Delete Review'/>";
		echo "</form>";
		*/
?>
	<form action="view-games.php" method="post">
				
		<div style="padding-left:0px;"><img style="float:inherit;" src="images/games/<?php echo $info['image_file_name']; ?> " width="320">		
			<p style="max-width: 700px; "> "<?php echo $info['game_title'] ?>"
			<br><br> Platform: <?php echo $info['game_platform'] ?> <br>
			Genre: <?php echo $info['game_genre'] ?> <br> 
			Price: <?php echo $$info["game_price"] ?> <br><br>
			<a target="_blank" href ="<?php echo $info['game_tutorial'] ?>"> Watch tutorial/walkthrough </a> <br><br>
			<?php echo $info['game_description'] ?><br> </div> </p> <br><br><br>
				
		<input type="submit" value="Back to View Games"/>
		
	</form>
	
	<!-- add review functions and posts a review to the db -->
	<form action="action_addreview.php" method="post">
			<p> Review:<br/> <textarea rows="3" cols="70" name="review"
				placeholder="" value="<?php if (isset($_POST['review'])) echo $_POST['review']; ?>"> </textarea>
			<br/>
				<input type="hidden" name="submitted" value="<?php $_POST['review']; ?>]" />
				<button type="submit" name="submit">Submit</button>
			</p>
	</form>
	
</center>
 <br><br>
<?php
echo "</div>";
include ('includes/footer.php');
?>