<?php # Script 3.4 - view-games.php
include ('includes/session.php');

$page_title = 'View Games';
echo "<div id='wrapper' style='min-height:100%;'>";
include ('./includes/header.php');
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
$sql = "SELECT game_id, game_title, game_platform, image_file_name FROM games";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<p><form action='more_about.php' method='post'><ul style=''>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
					
		echo "<div> <li style='margin: 20px; float:left; height: 350px; width:220px;'> ";
		$game_count = 1; // for every 6, add height to relative position
		echo "<h5 style= 'color: blue; font-weight: bold;'>".$row['game_title']."</h5>";
		//echo "<img src='images/games/ps4_default.jpg".$row['game_image']."' />";
		
		//echo "<h2>".$row['game_price']."</h2>"; 
		echo "<p>".substr($row['game_description'],0,200)."<a href=more_about.php?id=".$row['game_id']." ></a></p>";
		//<input id=''type='href' onclick=".$_SESSION['game_clicked'] = $row['game_id']."; name=".$row['game_id']." value=".$row['game_id']." /></a></p>";
		// echo "<p>".$row['game_price']."</p>";
		
		// This is my temp code
		echo "<a href=more_about.php?myGame=".$row['game_id']." onClick='post'><img src='images/games/" . $row['image_file_name'] . "' width='150' height='220' ></a>";
			//echo "<img src=\"!retrieve.php?game_image='game_image'\" width=\"150\" height=\"220\" >";	
		echo "</div>";
		
		if($game_count == 6){
			
			echo "<br>";
			$game_count = 0;
		}
		echo "</li>";
		$game_count++;
      }
    echo "</ul> </form> </p>";
} else {
    echo "0 results";
}
$conn->close();
?>
</center>
<?php
include ('includes/footer.php');
echo "</div>";
?>