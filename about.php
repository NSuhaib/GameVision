<?php # Script 3.4 - about.php
include ('includes/session.php');

$page_title = 'About';
include ('./includes/header.php');
?>
<div class="page-header">
    <center>  <img src="images/allgames.jpg" alt="All games" height="542"> 

		<br/>
    <!-- style="color:red" -->
	<h1 style="font-size:65px">What is Game Vision ?</h1> </center>
</div>


<!-- change class name to "well" to put grey border back  -->

<div class="wells" >

	<center>
	<p style="width:50%">
    		Game Vision provides a platform to post reviews and rating for the latest games. Waiting for game guides to be released is real frustrating for customers especially receiving a game on launch day. This platform will allow users direct access to game secret treasures and codes on day 1 of release. 	
	</p>
	</center>
	<br />
	<br />
	<br />
</div>
<?php
include ('./includes/footer.html');
?>