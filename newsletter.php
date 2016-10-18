<?php
include ('includes/session.php');
include ('./includes/header.php');
?>

<center>
<head>
<title>Newsletter Subscription</title>
</head>
<body>
	
	<h1><a>Newsletter Subscription</a></h1>
	<form method="post" action="">
		<h2>Newsletter Subscription</h2>
	</div>						
		<ul>
			<li>
			<label>Name </label>
			<br>
			<label for="first_name" >First</label>
			<input id="first_name"maxlength="255" size="8" value=""/>
			<label>Last</label>
			<input maxlength="255" size="14" value=""/>
			<br> 
		</li>		
		<li>
			<label>Email </label>
				<div>
					<input type="text" maxlength="255" value=""/> 
				</div> 
			</li>
		
			<li>
				<input type="hidden" name="form_id" value="1077536" />
				
				<input type="submit" name="submit" value="Submit" />
			</li>
		</ul>
	</form>	
</body>
	
</center>
<?php
include ('includes/footer.php');
echo "</div>";
?>