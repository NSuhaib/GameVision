<?php 
include ('includes/session.php');

$page_title = 'Add Game';
include ('includes/header.php');
?>
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
// Check if the form has been submitted:
if (isset($_POST['submitted'])) {

	
	
	
    // title of game
    if (empty($_POST['game_title'])) {
            $errors[] = 'please enter game title.';
    } else {
            $gn = mysqli_real_escape_string($dbc, trim($_POST['game_title']));
    }
	
	
	
	
	

    //game genre
    if (empty($_POST['game_genre'])) {
            $errors[] = 'please enter game genre.';
    } else {
            $gd = mysqli_real_escape_string($dbc, trim($_POST['game_genre']));
    }

    // game plateform:
    if (empty($_POST['game_platform'])) {
            $errors[] = 'please enter game platform.';
    } else {
            $p = mysqli_real_escape_string($dbc, trim($_POST['game_platform']));
    }

	 // game plateform:
    if (empty($_POST['game_tutorial'])) {
            $errors[] = 'please enter game tutorial link.';
    } else {
            $p = mysqli_real_escape_string($dbc, trim($_POST['game_tutorial']));
    }
	
	
	 // game plateform:
    if (empty($_POST['game_description'])) {
            $errors[] = 'please enter game description.';
    } else {
            $p = mysqli_real_escape_string($dbc, trim($_POST['game_description']));
    }
	
	
	
    // Check for platform name:
    if (empty($_POST['image_file_name'])) {
            $errors[] = 'You forgot to enter link of image.';
    } else {
            $pn = mysqli_real_escape_string($dbc, trim($_POST['image_file_name']));
    }
    
    

        // Add Games in the database...

        // Make the query:
        $q = "INSERT INTO games(game_title, game_genre, game_platform, game_tutorial, game_description, image_file_name) VALUES ('$gt', '$gg', '$gp', '$gtu','$gd','$ifn')";		
        $r = @mysqli_query ($dbc, $q); // Run the query.
        if ($r) { // If it ran OK.

                // Print a message:
                echo '<h1>Thank you!</h1>
        <p>You have successfully added a game</p><p><br /></p>';	

        } else { // If it did not run OK.

                // Public message:
                echo '<h1>System Error</h1>
                <p class="error">You could not add a game to a system error. We apologize for any inconvenience.</p>'; 

                // Debugging message:
                echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';

        } // End of if ($r) IF.

        mysqli_close($dbc); // Close the database connection.

        // Include the footer and quit the script:
        include ('includes/footer.html'); 
        exit();

    } else { // Report the errors.

            echo '<h1>Error!</h1>
            <p class="error">The following error(s) occurred:<br />';
            foreach ($errors as $msg) { // Print each error.
                    echo " - $msg<br />\n";
            }
            echo '</p><p>Please try again.</p><p><br /></p>';

    } // End of if (empty($errors)) IF.
	
 



mysqli_close($dbc); // Close the database connection. 

?>


<div class="page-header">
    
	<center>
	<h1>Add Game</h1>
	</center>
</div>
<p>


<form class="form-signin" role="form" action="AddGames.php" method="post">

    <p>Game Title: <input type="normal" class="form-control" placeholder="Game Title" required autofocus name="game_title" maxlength="10" value="<?php if (isset($_POST['game_title'])) echo $_POST['game_title']; ?>" /></p>
	
	
	
	
	
	
	<p>Game Genre: <input type="normal" class="form-control" placeholder="Game Genre" required name="game_genre" maxlength="12" value="<?php if (isset($_POST['game_genre'])) echo $_POST['game_genre']; ?>"  /> </p>
	
	
	
	
	<p>Game Platform:  <input type="normal" class="form-control" placeholder="Game Platform" required name="game_platform" maxlength="20" value="<?php if (isset($_POST['game_platform'])) echo $_POST['game_platform']; ?>"  /> </p>
	
	
	
	
	 <p>Game Tutorial Link: <input type="normal" class="form-control" placeholder="Game Tutorial" required name="game_tutorial" maxlength="500" value="<?php if (isset($_POST['game_tutorial'])) echo $_POST['game_tutorial']; ?>"  /> </p>
	 
	 
	 
	
    <p>Game Description: <input type="normal" class="form-control" placeholder="Game Description" required name="game_description" maxlength="500" value="<?php if (isset($_POST['game_description'])) echo $_POST['game_description']; ?>" /></p>
	
	
    <p>Image name in database: <input type="normal" class="form-control" placeholder="Image File Name" required name="image_file_name" maxlength="500" value="<?php if (isset($_POST['image_file_name'])) echo $_POST['image_file_name']; ?>"  /> </p>
	
	
   
	
	
    <p><button type="submit" name="submit" class="btn btn-sm btn-primary" />Submit</button></p>
    <input type="hidden" name="submitted" value="TRUE" />
    
  
</form>
<?php
include ('includes/footer.html');
?>
