<?php $theme_uri = get_stylesheet_directory_uri();
get_header( 
    null, 
    array( 'theme_uri' => $theme_uri ) )
; ?>
<div class="blog-details">
<?php if( have_posts() ) :
    the_post();
    $post_type = get_post_type();
    get_template_part( 'templates/content-single', $post_type );

 endif; ?>
</div>
<?php get_footer();