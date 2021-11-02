<?php
/*
 * Template Name: Contact
 */
get_header()
?>

<div class="contact-content">
    <div class="container">
        <div class="contact-info">
            <h2><?php
                echo get_the_title();
                ?>
            </h2>
            <p>
                <?php
                the_field('description_contact');
                ?>
            </p>
        </div>
        <div class="contact-details">
            <?php
            echo do_shortcode('[contact-form-7 id="26" title="Contact-form contact-page"]');
            ?>
        </div>
        <div class="contact-details">
            <div class="col-md-6 contact-map">
                <h4> <?php
                        the_field('map_title');
                        ?></h4>

                <?php
                $map = get_field('map');
                echo $map;
                ?>
            </div>
            <div class="col-md-6 company_address">
                <h4><?php the_field('address_title'); ?></h4>
                <p><?php the_field('adr_street'); ?></p>
                <p><?php the_field('adr_city'); ?></p>
                <p><?php the_field('adr_country'); ?></p>
                <p>Phone:<?php the_field('adr_phone'); ?></p>
                <p>Fax: <?php the_field('fax'); ?></p>
                <p>Email: <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                <p>Follow on: <a href="<?php the_field('follow_on'); ?>">Facebook</a>, <a href="<?php the_field('follow_on'); ?>">Twitter</a></p>
            </div>
            <div class="clearfix"></div>
        </div>


    </div>
</div>
</div>

<?php
get_footer()
?>