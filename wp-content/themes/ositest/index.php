<?php
get_header()
?>
<div class="content">
   <div class="container">
      <div class="content-grids">
         <div class="col-md-8 content-main">
            <div class="content-grid">


               <?php
               if (have_posts()) : while (have_posts()) : the_post(); ?>
                     <div class="content-grid-info">
                        <?php echo get_the_post_thumbnail(); ?>

                        <div class="post-info">
                           <h4><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a><?php echo get_the_date(); ?> / <?php echo get_comments_number(); ?></h4>
                           <p><?php echo has_excerpt() ? wp_kses_post(get_the_excerpt()) : wp_kses_post(wp_trim_words(get_the_content(), 20)); ?></p>
                           <a href="<?php echo get_permalink(); ?>"><span></span>READ MORE</a>
                        </div>
                     </div>
               <?php endwhile;

               endif;
               wp_reset_postdata();
               ?>


            </div>
         </div>
         <div class="col-md-4 content-right">

            <?php get_sidebar('right'); ?>
            <div class="clearfix"></div>

            <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</div>

<?php
get_footer()
?>