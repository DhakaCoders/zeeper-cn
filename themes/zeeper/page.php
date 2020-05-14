<?php 
get_header(); 
while ( have_posts() ) :
  the_post();
?>

<section class="fl-page-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <article class="default-page-con">
                  <div class="dfp-text-module clearfix">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    </div>        
                </article>
            </div>
        </div>
    </div>
</section>
<?php endwhile;  get_footer(); ?>