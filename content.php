<article class="post">
    <header class="post-header">
        <time class="post-info"><?php the_time('d.m.Y'); ?></time>
        <span class="post-info-marker">&bull;</span>
        <span class="post-info"><?php the_author_posts_link(); ?></span>
        <span class="post-info-marker">&bull;</span>
        <span class="post-info"><?php the_category(' '); ?></span>
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-title-link"><?php the_title(); ?></a>
        </h2>
    </header>
    <?php the_content(''); ?>
    <footer class="post-footer clearfix">
        <div class="pull-right">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-more-link">Читать далее</a>
        </div>
    </footer>
</article>