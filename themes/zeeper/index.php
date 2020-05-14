<?php get_header(); ?>
<!--Start Latest Blog Section-->
<section id="latest-blog">
    <!--Start Container-->
    <div class="container">
        <!--Start Heading Row-->
        <div class="row">
            <!--Start Heading Content-->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="section-heading text-center">
                <?php 
                printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', 'Blog' );  
                ?>
                </div>
            </div>
            <!--End Heading Content-->
        </div>
        <!--End Heading Row-->
        <?php if(have_posts()): ?>
        <!--Start Latest Blog Row-->
        <div class="row">
            <?php 
                $i = 1; 
                while(have_posts()): the_post();
                  $attach_id = get_post_thumbnail_id(get_the_ID());
                  $feaimg_src = '';
                  if( !empty($attach_id) ){
                    $feaimg_tag = cbv_responsive_image_tag($attach_id, 'bloggrid');
                  }
                  else{
                    $feaimg_tag = '<img class="img-responsive" src="'.THEME_URI.'/assets/images/dfpost.png" alt="image">';
                  }
                    $archive_year  = get_the_time('Y'); 
                    $archive_month = get_the_time('m'); 
                    $archive_day   = get_the_time('d'); 
            ?>
            <!--Start Blog Post Single-->
            <div class="col-md-4">
                <article class="blog-post-single wow fadeIn" data-wow-delay="0.<?php echo $i; ?>s">
                    <div class="post-media">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo $feaimg_tag; ?>
                        </a>
                    </div>
                    <div class="post-details">
                        <div class="post-meta">
                            <h2 class="post-title">
                                <a class="font-600" href="http://themehoster.com/rp/zeeper/blog-details.html"><?php the_title(); ?></a>
                            </h2>
                            <span><i class="icofont icofont-user"></i> <?php echo get_the_author_link(); ?></span>
                            <small>|</small>
                            <span><a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"><i class="icofont icofont-ui-calendar"></i> <?php echo get_the_date( 'd M, Y' )?></a></span>
                            <small>|</small>
                            <span>
                            <i class="icofont icofont-comment"></i> 
                            <?php 
                            comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-link', 'Comments are off');?>

                            </span>
                        </div>
                        <div class="post-content">
                            <?php the_excerpt(); ?>
                            <a class="font-500 color-base" href="<?php the_permalink(); ?>">Read More <i class="icofont icofont-double-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>
            <!--End Blog Post Single-->
            <?php $i++; endwhile; ?>
        </div>
        <!--End Latest Blog Row--> 
        <div class="row">
          <div class="col-md-12">
            <div class="pagi-select-area clearfix">
              <div class="fl-pagi-pagi-ctlr">
              <?php
                global $wp_query;

                $big = 999999999; // need an unlikely integer
                $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

                echo paginate_links( array(
                  'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'type'      => 'list',
                  'prev_text' => __('«'),
                  'next_text' => __('»'),
                  'format'    => '?paged=%#%',
                  'current'   => $current,
                  'total'     => $wp_query->max_num_pages
                ) );
              ?>
              </div>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="notfound">No Result!</div>
      <?php endif; ?>
    </div>
    <!--End Container-->
</section>
<!--End Latest Blog Section-->

<?php get_footer(); ?>