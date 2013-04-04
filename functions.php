<?php
    remove_action('wp_head','rsd_link');
    remove_action('wp_head','wlwmanifest_link');
    remove_action('wp_head','wp_generator');
    add_filter('show_admin_bar','__return_false');

    function wdg_randpost(){
        query_posts('orderby=rand&showposts=5');
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="wdg-randpost-item">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </div>
    <?php endwhile; endif; } ?>