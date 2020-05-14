<?php
  $showhidecounter = get_field('showhidecounter', HOMEID);
  if( $showhidecounter ):
    $counterup = get_field('counterup', HOMEID);
?>
<!--Start Counter Section-->
<section id="counter" class="bg-cover position-relative">
    <div class="overlay"></div>
    <?php 
      $counters = $counterup['counterups'];
      if( $counters ){
    ?>
    <!--Start Container-->
    <div class="container">
        <!--Start Row-->
        <div class="row">
            <?php $i = 1; foreach( $counters as $counrow ): ?>
            <!--Start Counter Item-->
            <div class="col-sm-3 col-xs-6">
                <div class="counter-item text-center wow fadeIn" data-wow-delay="0.<?php echo $i; ?>s">
                    <i class="icofont-<?php echo $counrow['icon']; ?> color-white"></i>
                    <?php if( !empty($counrow['value']) ) printf('<h1 class="font-700 color-white">%s</h1>', $counrow['value'] );?>
                    <?php if( !empty($counrow['title']) ) printf('<h4 class="font-500 color-white">%s</h4>', $counrow['title'] );?>
                </div>
            </div>
            <!--End Counter Item-->
            <?php $i++; endforeach; ?>

        </div>
        <!--End Row-->
    </div>
    <!--End Container-->
    <?php } ?>
</section>
<!--End Counter Section-->
<?php endif; ?>