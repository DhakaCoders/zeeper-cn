<?php
  $showhideabout = get_field('showhideabout', HOMEID);
  if( $showhideabout ):
    $about = get_field('aboutsec', HOMEID);
    if( $about ):
?>
<!--Start About Section-->
<section id="about">
    <!--Start Container-->
    <div class="container">
        <!--Start Heading Row-->
        <div class="row">
            <!--Start Heading content-->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="section-heading text-center">
                <?php 
                if( !empty($about['title']) ) printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $about['title'] ); 
                if( !empty($about['description']) ) printf('<p class="wow fadeInUp" data-wow-delay="0.2s">%s</p>', $about['description'] ); 
                ?>
                </div>
            </div>
            <!--End Heading content-->
        </div>
        <!--End Heading Row-->
        <?php 
          $lftcol = $about['colleft'];
          $rgtcol = $about['colright'];
        ?>
        <!--Start About Row-->
        <div class="row">
            <!--Start About Image-->
            <div class="col-md-6">
                <?php if(!empty($lftcol['image'])): ?>
                <div class="about-img wow fadeIn" data-wow-delay="0.2s">
                    <?php echo cbv_responsive_image_tag($lftcol['image']); ?>
                </div>
                <?php endif; ?>
            </div>
            <!--End About Image-->

            <!--Start About Content-->
            <div class="col-md-6">
                <div class="about-content">
                <?php 
                    if( !empty($rgtcol['title']) ) printf('<h3 class="font-700 wow fadeInUp" data-wow-delay="0.1s">%s</h3>', $rgtcol['title'] ); 
                    if(!empty($rgtcol['description'])) echo wpautop( $rgtcol['description'], true ); 
                ?>
                </div>
                <div class="about-btn btn-lg p-0 wow fadeInUp" data-wow-delay="0.3s">
                    <?php if( !empty($rgtcol['google_store_link']) ): ?>
                    <a class="gradient-bg-1" href="<?php echo $rgtcol['google_store_link']; ?>">
                        <i class="icofont icofont-brand-android-robot float-left"></i>
                        <span class="float-right text-center font-w-700"><small>Available On<br></small> Google Store</span>
                    </a>
                    <?php endif; ?>
                    <?php if( !empty($rgtcol['apple_store_link']) ): ?>
                    <a class="gradient-bg-1" href="<?php echo $rgtcol['apple_store_link']; ?>">
                        <i class="icofont icofont-brand-apple float-left"></i>
                        <span class="float-right text-center font-w-700"><small>Available On<br></small> Apple Store</span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <!--End About Content-->
        </div>
        <!--End About Row-->
    </div>
    <!--End Container-->
</section>
<!--End About Section-->
<?php endif; ?>
<?php endif; ?>