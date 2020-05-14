<?php 
get_header(); 
while ( have_posts() ) :
  the_post();
?>
<section class="innerpage-con-wrap">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <div class="default-page-con">
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
              </div>
          </div>
      </div>
  </div>
</section>
<?php endwhile; get_footer(); ?>