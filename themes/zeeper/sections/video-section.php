<?php
  $showhidevideo = get_field('showhidevideo', HOMEID);
  if( $showhidevideo ):
    $videosec = get_field('videosec', HOMEID);
?>
<!--Start Demo Video Section-->
<section id="demo-video" class="bg-cover position-relative">
    <div class="overlay"></div>
    <!--Start Container-->
    <div class="container">
        <!--Start Row-->
        <div class="row">
            <!--Start Video Content-->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="video-content text-center">
                    <?php 
                    if( !empty($videosec['title']) ) printf('<h2 class="font-700 text-uppercase color-white wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $videosec['title'] ); 
                    if( !empty($videosec['description']) ) printf('<p class="color-white wow fadeInUp" data-wow-delay="0.2s">%s</p>', $videosec['description'] ); 
                    ?>
                    <?php if( !empty($videosec['video_url']) ){ ?>
                    <div class="video-popup-icon position-relative">
                        <div class="pulse1"></div>
                        <div class="pulse2"></div>
                        <a class="popup-video" href="<?php echo $videosec['video_url']; ?>">
                            <i class="icofont icofont-play-alt-2"></i>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--End Video Content-->
        </div>
        <!--End Row-->
    </div>
    <!--End Container-->
</section>
<!--End Demo Video Section-->
<?php endif; ?>