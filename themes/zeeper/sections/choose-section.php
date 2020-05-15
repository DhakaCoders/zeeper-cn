<?php
  $showhidechoose = get_field('showhidechoose', HOMEID);
  if( $showhidechoose ):
    $choose = get_field('choose', HOMEID);
    if($choose):
?>
<!--Start Why Choose Section-->
<section id="why-choose">
    <!--Start Container-->
    <div class="container">
        <!--Start Row-->
        <div class="row">
            <!--Start Why Choose Content-->
            <div class="col-md-6">
                <div class="why-choose-content">
                    <?php 
                    if( !empty($choose['title']) ) printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $choose['title'] );  
                    ?>
                    <?php 
                      $chooses = $choose['choose_causes'];
                      if( $chooses ){
                    ?>
                     <?php foreach( $chooses as $chorow ): ?>
                    <!--Start Why Choose Item-->
                    <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                        <div class="why-chose-icon float-left">
                            <i class="icofont icofont-<?php echo $chorow['icon']; ?>"></i>
                        </div>
                        <div class="why-choose-single-details float-right">
                            <?php 
                            if( !empty($chorow['title']) ) printf('<h5 class="font-600">%s</h5>', $chorow['title'] ); 
                            if( !empty($chorow['description']) ) echo wpautop( $chorow['description'] ); 
                            ?>
                        </div>
                    </div>
                    <!--End Why Choose Item-->
                    <?php endforeach; ?>
                    <?php } ?>
                </div>
            </div>
            <!--End Why Choose Content-->

            <!--Start Why Choose Image-->
            <div class="col-md-6">
                <?php if(!empty($choose['image'])): ?>
                <div class="why-choose-img wow fadeIn" data-wow-delay="0.2s">
                    <?php echo cbv_responsive_image_tag($choose['image']); ?>
                </div>
                <?php endif; ?>
            </div>
            <!--End Why Choose Image-->
        </div>
        <!--End Row-->
    </div>
    <!--End Container-->
</section>
<!--End Why Choose Section-->
<?php endif; ?>
<?php endif; ?>