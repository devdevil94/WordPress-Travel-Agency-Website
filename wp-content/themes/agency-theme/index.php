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



<!-- Testimonials -->
<div class="testimonials-container section-container section-container-image-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 testimonials section-description">
            	<h2>Our Testimonials</h2>
                <p class="medium-paragraph">Take a look below to learn
                what our clients are saying about us:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 testimonial-list">
            	<div role="tabpanel">
            		<!-- Tab panes -->
            		<div class="tab-content">
            			<div role="tabpanel" class="tab-pane fade in active" id="tab1">
            				<div class="testimonial-image">
            					<img src="assets/img/testimonials/1.jpg" alt="t1">
            				</div>
            				<div class="testimonial-text">
                                <p>
                                	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                	Lorem ipsum dolor sit amet, consectetur..."<br>
                                	<a href="#">Lorem Ipsum, dolor.co.uk</a>
                                </p>
                            </div>
            			</div>
            			<div role="tabpanel" class="tab-pane fade" id="tab2">
            				<div class="testimonial-image">
            					<img src="assets/img/testimonials/2.jpg" alt="t2">
            				</div>
            				<div class="testimonial-text">
                                <p>
                                	"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                	ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                	lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                	<a href="#">Minim Veniam, nostrud.com</a>
                                </p>
                            </div>
            			</div>
            			<div role="tabpanel" class="tab-pane fade" id="tab3">
            				<div class="testimonial-image">
            					<img src="assets/img/testimonials/3.jpg" alt="t3">
            				</div>
            				<div class="testimonial-text">
                                <p>
                                	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                	Lorem ipsum dolor sit amet, consectetur..."<br>
                                	<a href="#">Lorem Ipsum, dolor.co.uk</a>
                                </p>
                            </div>
            			</div>
            			<div role="tabpanel" class="tab-pane fade" id="tab4">
            				<div class="testimonial-image">
            					<img src="assets/img/testimonials/4.jpg" alt="t4">
            				</div>
            				<div class="testimonial-text">
                                <p>
                                	"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                	ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                	lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                	<a href="#">Minim Veniam, nostrud.com</a>
                                </p>
                            </div>
            			</div>
            		</div>
            		<!-- Nav tabs -->
            		<ul class="nav nav-tabs" role="tablist">
            			<li role="presentation" class="active">
            				<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
            			</li>
            			<li role="presentation">
            				<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
            			</li>
            			<li role="presentation">
            				<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
            			</li>
            			<li role="presentation">
            				<a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
            			</li>
            		</ul>
            	</div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>