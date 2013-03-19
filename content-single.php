<article class="post">
    <header>
        <time class="post-info"><?php the_time('d.m.Y'); ?></time>
        <span class="post-info-marker">&bull;</span>
        <span class="post-info"><?php the_author(); ?></span>
        <span class="post-info-marker">&bull;</span>
        <span class="post-info"><?php the_category(' '); ?></span>
        <h1 class="post-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-title-link"><?php the_title(); ?></a>
        </h1>
    </header>
    <?php the_content(''); ?>
    <footer class="post-footer">
        <div class="post-tags">
            <?php the_tags('<span class="post-tags-item">','</span><span class="post-tags-item">','</span>'); ?>
        </div>
    </footer>
    <?php comments_template(); ?>
</article>