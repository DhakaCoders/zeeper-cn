<?php
/**
Documentation
http://getbootstrap.com/
*/
wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.0.0');
wp_enqueue_script('bootstrap.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js.download', array('jquery'), '4.0.0', true);
?>