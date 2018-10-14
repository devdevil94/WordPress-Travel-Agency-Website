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
<section class="testimonials py-5 text-white px-1 px-md-5 margin-top-xl">
    <img src="https://raw.githubusercontent.com/solodev/testimonial-slider-fullwidth/master/solodev-logo-stacked.png" class="icon-overlay" />

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="pt-2 text-center font-weight-bold">Our Customers Are Seeing Big Results</h2>

                <div class="carousel-controls testimonial-carousel-controls">
                    <div class="control d-flex align-items-center justify-content-center prev mt-3">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <div class="control d-flex align-items-center justify-content-center next mt-3">
                        <i class="fa fa-chevron-right"></i>
                    </div>

                    <div class="testimonial-carousel">
                        <div class="h5 font-weight-normal one-slide mx-auto">
                            <div class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                                <div class="message text-center blockquote w-100">
                                    "They’ve been consistent throughout the years and grown together with us. Even as they’ve grown, they haven’t lost sight of what they do. Most of their key resources are still with them, which is also a testament to their organization."
                                </div>

                                <div class="blockquote-footer w-100 text-white">Jim Joe, WebCorpCo</div>
                            </div>
                        </div>

                        <div class="h5 font-weight-normal one-slide mx-auto">
                            <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                                <div class="message text-center blockquote w-100">
                                    "Miami Beach Visitor and Convention Authority uses Solodev to craft a website capable of representing its diverse residents. The website features a newsroom with the latest events, an interactive calendar, and a mobile app that puts the resources of VCA at a user’s fingertips."
                                </div>

                                <div class="blockquote-footer w-100 text-white">Jim Joe, WebCorpCo</div>
                            </div>
                        </div>
                        <div class="h5 font-weight-normal one-slide mx-auto">
                            <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                                <div class="message text-center blockquote w-100">
                                    Solodev is a great company to partner with! We are extremely happy with the software, service, and support.
                                </div>

                                <div class="blockquote-footer w-100 text-white">Jim Joe, WebCorpCo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>