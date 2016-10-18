<html lang="en">
<head>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
        
    <!-- Bootstrap theme -->
    <!-- -->
	<link href="css/theme.css" rel="stylesheet" /> 
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
    
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="css/owl.theme.css">
    
    <link href="css/styles.css" rel="stylesheet" />
	

    <!-- Custom CSS -->
	<!-- 
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> 
	<link rel="stylesheet" href="css/otherstyle.css"> 
	-->
    
    <title><?php echo $page_title; ?></title>	
    
        <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document">
    
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li>
			<?php
                if(basename($_SERVER['PHP_SELF']) == 'index.php')
                {
            	echo '<a class="activ" href="index.php">Home</a>';
				}
				else
				{
            	echo '<a href="index.php">Home</a>';
				}
			?>
            </li>
            <li>
			<?php
                if(basename($_SERVER['PHP_SELF']) == 'about.php')
                {
            	echo '<a class="activ" href="about.php">About</a>';
				}
				else
				{
            	echo '<a href="about.php">About</a>';
				}
			?>
            </li>
			<!-- add news -->
			
			
			 <li>
			<?php
                if(basename($_SERVER['PHP_SELF']) == 'newsletter.html')
                {
            	echo '<a class="activ" href="newsletter/newsletter.html">Newsletter</a>';
				}
				else
				{
            	echo '<a href="newsletter/newsletter.html">Newsletter</a>';
				}
			?>
            </li>
			
			
		
			
			
			
			
			
			
			
			
            <li>
			<?php
                if(basename($_SERVER['PHP_SELF']) == 'view-games.php')
                {
            	echo '<a class="activ" href="view-games.php">View Games</a>';
				}
				else
				{
            	echo '<a href="view-games.php">View Games</a>';
				}
			?>
            </li>
                
			<?php 
			if (!isset($_SESSION['user_id'])) {
				echo '<li>';
                if(basename($_SERVER['PHP_SELF']) == 'register.php')
                {
            		echo '<a class="activ" href="register.php">Register</a>';
				}
				else
				{
            		echo '<a href="register.php">Register</a>';
				}
				echo '</li>';
				echo '<li>';
                if(basename($_SERVER['PHP_SELF']) == 'login.php')
                {
            		echo '<a class="activ" href="login.php">Sign In</a>';
				}
				else
				{
            		echo '<a href="login.php">Sign In</a>';
				}
				echo '</li>';
			}
			else
			{
				if ($is_admin) {
					echo '<li>';
					if(basename($_SERVER['PHP_SELF']) == 'view_users.php')
					{
						echo '<a class="activ" href="view_users.php">View Users</a>';
					}
					else
					{
						echo '<a href="view_users.php">View Users</a>';
					}
					echo '</li>';
				}
				
				echo '<li>';
				if(basename($_SERVER['PHP_SELF']) == 'password.php')
				{
					echo '<a class="activ" href="password.php">Change Password</a>';
				}
				else
				{
					echo '<a href="password.php">Change Password</a>';
				}
				echo '</li>';
				
				echo '<li>';
				if(basename($_SERVER['PHP_SELF']) == 'logout.php')
				{
					echo '<a class="activ" href="logout.php">Log Out</a>';
				}
				else
				{
					echo '<a href="logout.php">Log Out</a>';
				}
				echo '</li>';				
			}
			?>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    
    <!--<div class="container theme-showcase" role="main">
        <div class="jumbotron">-->
          <!-- Start of the page-specific content. -->
<!-- Script 8.1 - header.html -->
