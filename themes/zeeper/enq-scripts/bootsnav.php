<?php
/**
Theme specific styles and scripts
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	wp_enqueue_style( $handle, $src, $deps, $ver );
*/ 
wp_enqueue_style('cbv-bootsnav-style', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), array(0, 99));
wp_enqueue_script('cbv-bootsnav.js', get_template_directory_uri() . '/assets/js/bootsnav.js.download', array('jquery'), '1.0.0', true);

?>