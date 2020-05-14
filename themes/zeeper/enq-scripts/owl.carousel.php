<?php
wp_enqueue_style('carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), null);
wp_enqueue_script('carousel-slider-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js.download', array('jquery'), '1.0.0', true);