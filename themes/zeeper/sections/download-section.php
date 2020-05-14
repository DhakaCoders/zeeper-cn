<?php
  $showhidedown = get_field('showhidedown', HOMEID);
  if( $showhidedown ):
    $download = get_field('downloadsecc', HOMEID);
?>
<!--Start Download App Section-->
<section id="app-download">
    <!--Start Container-->
    <div class="container">
        <!--Start App Download Row-->
        <div class="row">
            <div class="col-md-6">
                <?php if(!empty($download['image'])): ?>
                <div class="app-downlod-img wow fadeInUp" data-wow-delay="0.2s">
                    <?php echo cbv_responsive_image_tag($download['image']); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <div class="app-download-content animated fadeInUp">
                    <?php 
                    if( !empty($download['title']) ) printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $download['title'] ); 
                    if( !empty($download['description']) ) printf('<p class="wow fadeInUp" data-wow-delay="0.2s">%s</p>', $download['description'] ); 
                    ?>
                    <div class="app-download-btn btn-lg p-0 wow fadeInUp" data-wow-delay="0.3s">
                        <?php if( !empty($download['google_store_link']) ): ?>
                        <a class="gradient-bg-1" href="<?php echo $download['google_store_link']; ?>">
                            <i class="icofont icofont-brand-android-robot float-left"></i>
                            <span class="float-right text-center font-w-700"><small>Available On<br></small> Google Store</span>
                        </a>
                        <?php endif; ?>
                        <?php if( !empty($download['apple_store_link']) ): ?>
                        <a class="gradient-bg-1" href="<?php echo $download['apple_store_link']; ?>">
                            <i class="icofont icofont-brand-apple float-left"></i>
                            <span class="float-right text-center font-w-700"><small>Available On<br></small> Apple Store</span>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
        <!--End App Download Row-->
    </div>
    <!--End Container-->
</section>
<!--End Download App Section-->
<?php endif; ?>