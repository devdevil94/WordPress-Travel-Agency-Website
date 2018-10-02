<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header class="header-nightsky d-flex flex-column justify-content-end">
			<a class="navbar-brand" href="#">Navbar</a>

			<div class="hero">
	            <h1>This is a Bootstrap header</h1>
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut tempor enim.</p>
	            <div class="btn btn-primary">Learn more about us</div>
	            <div class="btn btn-primary">Contact us</div>
	        </div>

        	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="nav navbar-collapse collapse justify-content-center" id="navbarNav">
			    <div class="navbar-nav mx-auto">
			      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="#">Packages</a>
			      <a class="nav-item nav-link" href="#">Attractions</a>
			      <a class="nav-item nav-link" href="#">About Us</a>
			      <a class="nav-item nav-link" href="#">Contact</a>
			    </div>
			  </div>
			</nav>
	        
    	</header>
