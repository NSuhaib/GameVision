<?php # Script 3.4 - view-games.php
include ('includes/session.php');
include ('includes/header.php');
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Newsletter Subscription</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Newsletter Subscription</a></h1>
		<form id="form_1077536" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Newsletter Subscription</h2>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Name </label>
		<span>
			<input id="element_1_1" name= "element_1_1" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="element_1_2" name= "element_1_2" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Email </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1077536" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
<?php
include ('includes/footer.php');
echo "</div>";
?>
</html>
