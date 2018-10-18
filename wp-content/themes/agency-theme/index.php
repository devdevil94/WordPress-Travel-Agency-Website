<?php get_header(); ?>

<hr class="w-75 my-5">

<div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
			  	</div>
			</div>
			<div class="carousel-item">
			  	<img class="d-block w-100" src="<?php echo get_theme_file_uri('img/39390331741_56abc913e4_o.jpg'); ?>" alt="Second slide">
			  	<div class="carousel-caption d-none d-md-block">
			    	<h5 class="text-dark">Sultan Qaboos Mosque</h5>
			  	</div>
			</div>
			<div class="carousel-item">
			  	<img class="d-block w-100" src="<?php echo get_theme_file_uri('img/39394819962_616c85c251_o.jpg'); ?>" alt="Third slide">
			  	<div class="carousel-caption d-none d-md-block">
			    	<h5 class="text-dark">Sultan Qaboos Mosque</h5>
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
</div>

<hr class="w-75 my-5">

<div class="container d-flex justify-content-around">
	<?php
		$popularPackages = new WP_Query(array(
			'posts_per_page' => 3,
			'post_type' => 'package',
			'orderby' => 'title',
			'order' => 'ASC')
		);
		
		while($popularPackages->have_posts()){
			$popularPackages->the_post();
	?>
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="<?php echo get_theme_file_uri('img/39394819962_616c85c251_o.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"><?php the_title(); ?></h5>
					<p class="card-text"><?php echo get_the_excerpt(); ?></p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
	<?php 
		}
	?>
</div>

<hr class="w-75 my-5">

<!-- Testimonials -->
<div id="page-wrap">
		
	<h2>Start/Stop Slider</h2>
	
	<div id="slider">
		<div id="mover">
			<div id="slide-1" class="slide">
				<h1>Garden Rack</h1>
				
				<p>Donec gravida posuere arcu. Nulla facilisi. Phasellus imperdiet. Vestibulum at metus. Integer euismod. Nullam placerat rhoncus sapien. Ut euismod. Praesent libero. Morbi pellentesque libero sit amet ante. Maecenas tellus.</p>
				
				<a href="#"><img src="images/slide-1-image.png" alt="learn more" /></a>
			</div>

			<div class="slide">
				<h1>Tulip Bulbs</h1>
				
				<p>Donec gravida posuere arcu. Nulla facilisi. Phasellus imperdiet. Vestibulum at metus. Integer euismod. Nullam placerat rhoncus sapien. Ut euismod. Praesent libero. Morbi pellentesque libero sit amet ante. Maecenas tellus.</p>
				
				<a href="#"><img src="images/slide-2-image.png" alt="learn more" /></a>
			</div>
			
			<div class="slide">
				<h1>Garden Gloves</h1>
				
				<p>Donec gravida posuere arcu. Nulla facilisi. Phasellus imperdiet. Vestibulum at metus. Integer euismod. Nullam placerat rhoncus sapien. Ut euismod. Praesent libero. Morbi pellentesque libero sit amet ante. Maecenas tellus.</p>
				
				<a href="#"><img src="images/slide-3-image.png" alt="learn more" /></a>	
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>