<?php
$post_url = get_permalink();
$thumbnail = get_the_post_thumbnail($id);
$post_date = get_the_date();
$content = get_the_content();

$author = get_the_author();
$author_url = get_author_posts_url($id);




?>
<?php  ?>

<div class="single-grid">
    <?php echo $thumbnail ?>
    <?php echo $content ?>

</div>

<ul class="comment-list">
    <h5 class="post-author_head">Written by <a href="<?php echo $author_url; ?>" title="Posts by admin" rel="author"><?php echo $author ?></a></h5>
    <li><img src="images/avatar.png" class="img-responsive" alt="">
        <div class="desc">
            <p>View all posts by: <a href="#" title="Posts by admin" rel="author"><?php echo $author ?></a></p>
        </div>
        <div class="clearfix"></div>
    </li>
</ul>

<div class="content-form">
    <h3>Leave a comment</h3>
    <?php
    echo do_shortcode('[contact-form-7 id="25" title="Contact form 1"]');
    ?>

</div>
