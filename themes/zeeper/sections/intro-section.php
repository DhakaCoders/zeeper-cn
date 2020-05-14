<?php
$intro = get_field('introsec', HOMEID);
?>
<!--Start Banner Section-->
<section id="banner" class="gradient-bg full-height">
    <!--Start Container-->
    <div class="container">
        <!--Start Row-->
        <div class="row">
            <!--Start Banner Caption-->
            <div class="col-md-6">
                <div class="caption-content">
                    <?php if( !empty($intro['title']) ) printf('<h1 class="font-700 color-white text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h1>', $intro['title'] ); ?>
                    <?php if(!empty($intro['description'])) printf('<p class="color-white wow fadeInUp" data-wow-delay="0.2s">%s</p>', $intro['description'] ); ?>
                    <div class="caption-btn wow fadeInUp" data-wow-delay="0.3s">
                        <a class="font-600" href="#app-download">Download</a>
                        <a class="font-600" href="#features">Features</a>
                    </div>
                </div>
            </div>
            <!--End Banner Caption-->
            
            <!--Start Banner Image-->
            <div class="col-md-6">
                <?php if(!empty($intro['image'])): ?>
                <div class="banner-img wow fadeIn" data-wow-delay="0.4s">
                    <img src="<?php echo $intro['image']; ?>" class="img-responsive" alt="<?php echo cbv_get_image_alt( $intro['image'] ); ?>">
                </div>
                <?php endif; ?>
            </div>

            <!--End Banner Image-->
        </div>
        <!--End Row-->
    </div>
    <!--End Container-->
</section>
<!--End Banner Section-->