<?php 
  $smedias = get_field('sociale_media', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?>
<!--Start Footer-->
<footer id="footer">
    <!--Start Container-->
    <div class="container">
        <!--Start Row-->
        <div class="row">
            <!--Start Footer Social-->
            <div class="col-sm-4">
                <?php if( !empty($smedias) ): ?>
                <div class="footer-social text-left wow fadeIn" data-wow-delay="0.1s">
                    <ul>
                        <?php foreach( $smedias as $smedia ): ?>
                        <li><a href="<?php echo $smedia['url']; ?>"><i class="icofont-<?php echo $smedia['icon']; ?>"></i></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
            <!--End Footer Social-->

            <!--Start Copyright Text-->
            <div class="col-sm-8">
                <div class="copyright-text text-right wow fadeIn" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                    <p class="color-white">
                    <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?> 
                    <a class="color-base" href="#">DhakaCoders</a></p>
                </div>
            </div>
            <!--End Copyright Text-->
        </div>
        <!--End Row-->
    </div>
    <!--End Container-->

    <!--Start ClickToTop-->
    <div class="click-to-top">
        <a class="gradient-bg" href="#header"><i class="icofont icofont-simple-up"></i></a>
    </div>
    <!--End ClickToTop-->
</footer>
<!--End Footer-->
</div>
<!--End Body Wrap-->
<!--jQuery JS-->
<script src="<?php echo THEME_URI; ?>/assets/js/jquery.min.js.download"></script>
</div>
<?php wp_footer(); ?>
</body>
</html>