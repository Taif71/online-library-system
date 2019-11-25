<?php
    
    // include header and title
    include 'header.php';
    echo '<title>Home Page</title>';
?>

  <body>
  	<div class="container-fluid" id="page-container">
  		<div class="row">
        <!-- Home Page Crasue -->
  			<div class="col-md-12 slider">
  				<div id="demo" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/slide1.png" class="" alt="Los Angeles" width="100%" height="500">
                  <div class="carousel-caption">
                    <h3>Read Ego is the enemy By Ryan Holiday</h3>
                    <p>We had such a great time in LA!</p>
                  </div>   
                </div>
                <div class="carousel-item">
                  <img src="images/slidex.jpg" class="" alt="Chicago" width="100%" height="500">
                  <div class="carousel-caption">
                    <h3>Buy a Collection of Books</h3>
                    <p>We have book on all types of categories. Search for your books and enjoy!</p>
                  </div>   
                </div>
                <div class="carousel-item">
                  <img src="images/models.jpeg" class="d-block w-100 h-10" alt="New York" >
                  <div class="carousel-caption">
                    <h3>Models by Mark Manson</h3>
                    <p>A comprehensive and no BS guide to attract women!</p>
                  </div>   
                </div>
              </div>
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
  			</div>
  		</div>
      
  	</div>
    <?php
      include 'footer.php';
    ?>
  </body>
</html>