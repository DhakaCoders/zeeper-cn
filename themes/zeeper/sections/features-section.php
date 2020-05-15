<?php
  $showhidefeature = get_field('showhidefeature', HOMEID);
  if( $showhidefeature ):
    $feature = get_field('featuresec', HOMEID);
    if( $feature ):
?>
<!--Start Features Section-->
<section id="features" class="bg-gray">
    <!--Start Container-->
    <div class="container">
        <!--Start Heading Row-->
        <div class="row">
            <!--Start Heading content-->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="section-heading text-center">
                <?php 
                if( !empty($feature['title']) ) printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $feature['title'] ); 
                if( !empty($feature['description']) ) printf('<p class="wow fadeInUp" data-wow-delay="0.2s">%s</p>', $feature['description'] ); 
                ?>
                </div>
            </div>
            <!--End Heading content-->
        </div>
        <!--End Heading Row-->
        <?php 
          $features = $feature['features'];
          if( $features ){
        ?>
        <!--Start Feature Items Row-->
        <div class="row">
            <?php foreach( $features as $fearow ): ?>
            <!--Start Feature Item-->
            <div class="col-md-3 col-sm-6">
                <div class="feature-single text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="icofont icofont-<?php echo $fearow['icon']; ?> gradient-bg-1 color-white"></i>
                    <?php 
                    if( !empty($fearow['title']) ) printf('<h5 class="font-600">%s</h5>', $fearow['title'] ); 
                    if( !empty($fearow['description']) ) echo wpautop( $fearow['description'] ); 
                    ?>
                </div>
            </div>
            <!--End Feature Item-->
            <?php endforeach; ?>
        </div>
        <!--End Feature Items Row-->
        <?php } ?>
    </div>
    <!--End Container-->
</section>
<!--End Features Section-->
<?php endif; ?>
<?php endif; ?>