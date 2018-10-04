<?php get_header(); ?>
<hr class="w-75 my-5">
<div id="carouselExampleIndicators" class="carousel slide mx-auto" style="width: 50%" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      	<img class="d-block w-100" src="<?php echo get_theme_file_uri('img/41117494141_a2809ae23e_o.jpg'); ?>" alt="First slide">
    	<div class="carousel-caption d-none d-md-block">
	    	<h5 class="text-dark">Sultan Qaboos Mosque</h5>
	    	<button type="button" class="btn btn-info">Read More</button>
	  	</div>
    </div>
    <div class="carousel-item">
      	<img class="d-block w-100" src="<?php echo get_theme_file_uri('39390331741_56abc913e4_o.jpg'); ?>" alt="Second slide">
      	<div class="carousel-caption d-none d-md-block">
	    	<h5 class="text-dark">Sultan Qaboos Mosque</h5>
	    	<button type="button" class="btn btn-info">Reore</button>
	  	</div>
    </div>
    <div class="carousel-item">
      	<img class="d-block w-100" src="<?php echo get_theme_file_uri('39394819962_616c85c251_o.jpg'); ?>" alt="Third slide">
      	<div class="carousel-caption d-none d-md-block">
	    	<h5 class="text-dark">Sultan Qaboos Mosque</h5>
	    	<button type="button" class="btn btn-info">Rade</button>
	  	</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<?php get_footer(); ?>