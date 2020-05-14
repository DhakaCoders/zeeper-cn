<?php
  $showhidetest = get_field('showhidetest', HOMEID);
  if( $showhidetest ):
    $testm = get_field('testimonialsec', HOMEID);
?>
<!--Start Testimonial Section-->
<section id="testimonial" class="gradient-bg">
    <!--Start Container-->
    <div class="container">
        <!--Start Heading Row-->
        <div class="row">
            <!--Start Heading Content-->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="section-heading text-center">
                <?php 
                if( !empty($testm['title']) ) printf('<h2 class="font-700 color-white text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $testm['title'] ); 
                if( !empty($testm['description']) ) printf('<p class="color-white wow fadeInUp" data-wow-delay="0.2s">%s</p>', $testm['description'] ); 
                ?>
                </div>
            </div>
            <!--End Heading Content-->
        </div>
        <!--End Heading Row-->
        <?php 
          $testms = $testm['testimonials'];
          if( $testms ){
        ?>
        <!--Start Testimonial Row-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <!--Start Testimonial Carousel-->
                <div class="testimonial-carousel owl-carousel owl-loaded owl-drag">
                    <?php foreach( $testms as $testrow ): ?>
                    <div class="owl-item">
                        <div class="testimonial-single row">
                            <div class="col-sm-3">
                                <div class="client-info text-center">
                                <?php if(!empty($testrow['image'])): echo cbv_get_image_tag($testrow['image']); endif; ?>
                                <?php 
                                if( !empty($testrow['name']) ) printf('<h4 class="font-600">%s</h4>', $testrow['name'] );
                                if( !empty($testrow['position']) ) printf('<p>%s</p>', $testrow['position'] );
                                ?>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="testimonial-border"></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="client-comment">
                                    <?php if( !empty($testrow['description']) ) echo wpautop($testrow['description']); ?>
                                    <span>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                    </span>
                                    <span class="float-right">
                                        <i class="icofont icofont-quote-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!--End Testimonial Carousel-->
            </div>
        </div>
        <!--End Testimonial Row-->
        <?php } ?>
    </div>
    <!--End Container-->
</section>
<!--End Testimonial Section-->
<?php endif; ?>