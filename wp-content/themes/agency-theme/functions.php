
<?php 
	function load_bootstrap_files(){
		wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
		wp_enqueue_style('main_styles', get_stylesheet_uri());

		wp_enqueue_script('bootstrap-js', '//code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	}

	add_action('wp_enqueue_scripts', 'load_bootstrap_files');
?>
