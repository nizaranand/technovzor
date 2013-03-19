<article class="post">
    <header>
        <h1 class="post-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-title-link"><?php the_title(); ?></a>
        </h1>
    </header>
    <?php the_content(''); ?>
</article>