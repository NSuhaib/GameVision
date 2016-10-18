<?php # Script 3.4 - index.php
include ('includes/session.php');

$page_title = 'Home';
include ('./includes/header.php');
?>
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/gamebanner5.jpg" alt="...">
      <div class="carousel-caption">
          <h3></h3>
      </div>
    </div>
    <div class="item">
      <img src="images/gamebanner2.jpg" alt="...">
      <div class="carousel-caption">
          <h3></h3>
      </div>
    </div>
    <div class="item">
      <img src="images/gamebanner3.jpg" alt="...">
      <div class="carousel-caption">
          <h3></h3>
      </div>
    </div>
	<div class="item">
      <img src="images/gamebanner4.jpg" alt="...">
      <div class="carousel-caption">
          <h3></h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->


<?php
include ('./includes/footer.php');
?>

<script>
$(document).ready(function() {
  $("#my-carousel").owlCarousel({
	  singleItem: true,
	  navigation: true,
	  pagination: false,
	  navigationText: ["",""]
  });
});
</script>