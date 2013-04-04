<article class="post">
    <header class="post-header">
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-title-link"><?php the_title(); ?></a>
        </h2>
    </header>
    <?php the_content(''); ?>
</article>