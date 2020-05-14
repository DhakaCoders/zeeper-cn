<?php
  $showhidefaq = get_field('showhidefaq', HOMEID);
  if( $showhidefaq ):
    $faq = get_field('faqsec', HOMEID);
?>
<!--Start Faq Section-->
<section id="faq" class="bg-gray">
    <!--Start Container-->
    <div class="container">
        <!--Start Heading Row-->
        <div class="row">
            <!--Start Heading Content-->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="section-heading text-center">
                <?php 
                if( !empty($faq['title']) ) printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $faq['title'] ); 
                if( !empty($faq['description']) ) printf('<p class="wow fadeInUp" data-wow-delay="0.2s">%s</p>', $faq['description'] ); 
                ?>
                </div>
            </div>
            <!--End Heading Content-->
        </div>
        <!--End Heading Row-->
        
        <!--Start Faq Row-->
        <div class="row">
            <?php 
              $faqs = $faq['faqs'];
              if( $faqs ){
            ?>
            <!--Start Faq Accordian-->
            <div class="col-md-6">
                <div class="panel-group" id="accordion">
                    <?php $i = 1; foreach( $faqs as $faqrow ): ?>
                    <!--Start Accordian Single-->
                    <div class="panel panel-default wow fadeInUp" data-wow-delay="0.<?php echo $i; ?>s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>">
                                <?php if( !empty($faqrow['title']) ) printf('%s', $faqrow['title'] );?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse in">
                        <div class="font-500 panel-body">
                        <?php if( !empty($faqrow['description']) ) echo $faqrow['description'];?>
                        </div>
                        </div>
                    </div>
                    <!--End Accordian Single-->
                    <?php $i++; endforeach; ?>
                </div>
            </div>
            <!--End Faq Accordian-->
            <?php } ?>
            <!--Start Faq Image-->
            <div class="col-md-6">
                <?php if(!empty($faq['image'])): ?>
                <div class="faq-img float-right wow fadeIn" data-wow-delay="0.2s">
                    <?php  echo cbv_responsive_image_tag($faq['image']); ?>
                </div>
                <?php endif; ?>
            </div>
            <!--End Faq Image-->
        </div>
        <!--Start Faq Row-->
    </div>
    <!--End Container-->
</section>
<!--End Faq Section-->
<?php endif; ?>