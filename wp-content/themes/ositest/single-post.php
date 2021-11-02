<?php
get_header()
?>


<div class="single">
    <div class="container">
        <div class="col-md-8 single-main">
            <?php if (have_posts()) :
                the_post();
                $post_type = get_post_type();
                get_template_part('templates/post-item', 'post');

            endif; ?>
        </div>

        <div class="col-md-4 side-content">
            <?php get_sidebar('right'); ?>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php
get_footer()
?>
























<?php get_footer();
