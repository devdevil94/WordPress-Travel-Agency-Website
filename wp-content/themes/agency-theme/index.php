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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="img-container">
				<img class="d-block mw-100" src="<?php echo get_theme_file_uri('img/testimonials/man.jpg'); ?>">
			</div>
			<div class="carousel-caption d-none d-md-block">
				<h5>...</h5>
				<p>...</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block" src="<?php echo get_theme_file_uri('img/testimonials/elder-man.jpg'); ?>">
			<div class="carousel-caption d-none d-md-block">
				<h5>...</h5>
				<p>...</p>
			</div>
		</div>
		<div class="carousel-item">
		  <img class="d-block" src="<?php echo get_theme_file_uri('img/testimonials/woman.jpg'); ?>">
		  <div class="carousel-caption d-none d-md-block">
				<h5>...</h5>
				<p>...</p>
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
</div><!--end of container-->


<?php get_footer(); ?>