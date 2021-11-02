<?php $theme_uri = get_stylesheet_directory_uri();
get_header( 
    null, 
    array( 'theme_uri' => $theme_uri ) )
; ?>
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <article role="pge-title-content" class="blog-header">
                  <header>
                     <h2><span>Search</span> results: '<?php echo get_search_query() ?>'</h2>
                  </header>
                  <p>Here what we have found:</p>
               </article>


            <?php if( have_posts() ) : ?>
                <?php global $wp_query;
                    $posts_count = count($wp_query->posts);

                    $current_post = 1;
                    $half = floor( $posts_count / 2 ); ?>
                    <?php while( have_posts() ): 
                        the_post();
                        if( $current_post == 1 ) { ?>
                            <ul class="grid-lod effect-2" id="grid">
                        <?php } elseif( $current_post == $half + 1 ) { ?>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <ul class="grid-lod effect-2" id="grid">
                        <?php }
                        $post_type = get_post_type(); ?>
                        <li>
                            <?php get_template_part( 'templates/content', $post_type ); ?>
                        </li>

                        <?php if( $current_post == $posts_count || $current_post == $half ) { ?>
                                </ul>
                            </div>
                        <?php } 
                        $current_post++; ?>

                    <?php endwhile; ?>
                </ul>
            <?php endif;?>
            <div class="clearfix"></div>
         </div>

         <?php get_footer(); ?>
