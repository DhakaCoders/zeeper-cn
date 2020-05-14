<?php
  $showhidescr = get_field('showhidescr', HOMEID);
  if( $showhidescr ):
    $screenshot = get_field('screenshotsec', HOMEID);
?>
<!--Start App Screenshots Section-->
<section id="app-screenshot" class="bg-gray">
    <!--Start Container-->
    <div class="container">
        <!--Start Heading Row-->
        <div class="row">
            <!--Start Heading Content-->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="section-heading text-center">
                <?php 
                if( !empty($screenshot['title']) ) printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $screenshot['title'] ); 
                if( !empty($screenshot['description']) ) printf('<p class="wow fadeInUp" data-wow-delay="0.2s">%s</p>', $screenshot['description'] ); 
                ?>
                </div>
            </div>
            <!--End Heading Content-->
        </div>
        <!--End Heading Row-->
        <?php 
          $screenshots = $screenshot['screenshots'];
          if( $screenshots ){
        ?>
        <!--Start Screenshots Slider-->
        <div class="screenshots-slider owl-carousel wow fadeIn owl-loaded owl-drag" data-wow-delay="0.1s">
             <?php foreach( $screenshots as $scrrow ): ?>
            <div class="owl-item">
                <?php if(!empty($scrrow['image'])) { echo cbv_responsive_image_tag($scrrow['image']); } ?>
            </div>
            <?php endforeach; ?>

        </div><!--End Screenshots Slider-->
        <?php } ?>
    </div><!--End Container-->
        
    
</section>
<!--End App Screenshots Section-->
<?php endif; ?>