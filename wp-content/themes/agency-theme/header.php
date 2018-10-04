<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header class="header-nightsky d-flex flex-column justify-content-end" style="background-image: url(<?php echo get_theme_file_uri('img/anfal-shamsudeen-358868-unsplash.jpg'); ?>)">
			<a class="navbar-brand" href="#">Navbar</a>

			<div class="hero">
	            <h1>Tagline for the Company</h1>
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut tempor enim.</p>
	        </div>

        	<nav class="navbar navbar-expand-lg bg-transparent">
			  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="nav navbar-collapse collapse justify-content-center" id="navbarNav">
			    <ul class="navbar-nav mx-auto bg-transparent">
		      		<li class="nav-item ">
	                	<a class="nav-link text-white active" href="#">Home</a>
	            	</li>
		            <li class="nav-item">
		                <a class="nav-link text-white" href="#">Packages</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link text-white" href="#">Attractions</a>
		            </li>	
	            	<li class="nav-item">
		                <a class="nav-link text-white" href="#">About</a>
		            </li>
	            	<li class="nav-item">
		                <a class="nav-link text-white" href="#">Contact Us</a>
		            </li>		    
	        	</ul>
			  </div>
			</nav>
	        
    	</header>
