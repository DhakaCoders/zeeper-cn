<?php
  $showhidework = get_field('showhidework', HOMEID);
  if( $showhidework ):
    $howwork = get_field('howwork', HOMEID);
?>
<!--Start How Work Section-->
<section id="how-work">
    <!--Start Container-->
    <div class="container">
        <!--Start Heading Row-->
        <div class="row">
            <!--Start Heading Content-->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="section-heading text-center">
                <?php 
                if( !empty($howwork['title']) ) printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $howwork['title'] ); 
                if( !empty($howwork['description']) ) printf('<p class="wow fadeInUp" data-wow-delay="0.2s">%s</p>', $howwork['description'] ); 
                ?>
                </div>
            </div>
            <!--End Heading Content-->
        </div>
        <!--End Heading Row-->
        <?php 
          $workprocess = $howwork['workprocess'];
          if( $workprocess ){
        ?>
        <!--Start Row-->
        <div class="row">
            <?php $i = 1; foreach( $workprocess as $workrow ): ?>
            <!--Start How Work Single-->
            <div class="col-md-3 col-sm-6">
                <div class="how-work-single wow fadeIn" data-wow-delay="0.<?php echo $i; ?>s">
                    <div class="how-work-btn position-relative">
                        <span class="font-600 gradient-bg-1 color-white text-center"><i class="icofont-<?php echo $workrow['icon']; ?>"></i> 
                        <?php if( !empty($workrow['title']) ) printf('%s', $workrow['title'] );?>
                        </span>
                        <div class="arrow-line">
                            <div class="round-circle"></div>
                        </div>
                    </div>
                    <div class="how-work-image">
                        <?php if(!empty($workrow['image'])): echo cbv_responsive_image_tag($workrow['image']); endif; ?>
                    </div>
                </div>
            </div>
            <!--End How Work Single-->
            <?php $i++; endforeach; ?>
        </div>
        <!--End Row-->
        <?php } ?>
    </div>
    <!--End Container-->
</section>
<!--End How It Work Section-->
<?php endif; ?>