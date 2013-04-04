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
        <div class="post-tags">
            Метки:
            <?php the_tags('<span class="post-tags-item">','</span><span class="post-tags-item">','</span>'); ?>
        </div>
        <div class="post-nav-wrapper">
            <div class="post-nav">
                <?php if(get_previous_post() == null){ ?>
                    <span class="post-nav-link post-nav-link--prev">
                        <h3>Предыдущая запись</h3>
                        <p>У нас больше ничего нет</p>
                    </span>
                <?php }else { ?>
                <a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" class="post-nav-link post-nav-link--prev">
                    <h3>Предыдущая запись</h3>
                    <p><?php echo get_the_title(get_previous_post()); ?></p>
                </a>
                <?php } ?>

                <?php if(get_next_post() == null){ ?>
                    <span class="post-nav-link post-nav-link--next">
                        <h3>Следующая запись</h3>
                        <p>Новая запись в процессе написания</p>
                    </span>
                <?php }else { ?>
                <a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="post-nav-link post-nav-link--next">
                    <h3>Следующая запись</h3>
                    <p><?php echo get_the_title(get_next_post()); ?></p>
                </a>
                <?php } ?>
            </div>
        </div>
    </footer>
    <?php comments_template(); ?>
</article>