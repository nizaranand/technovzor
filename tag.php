<?php get_header(); ?>
<header class="header">
    <div class="container clearfix">
        <div class="header-logo">
            <a href="/" title="<?php bloginfo('name'); ?>">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="270" height="30" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
    </div>
</header>
<div class="container clearfix">
    <div class="content-wrapper">
        <main class="content">
            <?php if(have_posts()): ?>
                <legend>Записи с меткой: <a href="<?php get_tag_link(single_tag_title()); ?>"><?php single_tag_title(); ?></a></legend>
                <?php while(have_posts()):the_post(); ?>
                    <?php get_template_part('content',get_post_format()); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_pagenavi(); ?>
        </main>
        <footer class="footer container">
            <p>Copyright &copy; 2013 <a href="http://kubeex.com" rel="nofollow" target="_blank" title="Студия правильных решений" class="footer-link">Студия правильных решений</a></p>
            <p>
                <a href="/about" title="О проекте" class="footer-link">О проекте</a>
                <span class="footer-bull">&bull;</span>
                <a href="/adv" title="Реклама на сайте" class="footer-link">Реклама на сайте</a>
                <span class="footer-bull">&bull;</span>
                <a href="/contacts" title="Контактная информация" class="footer-link">Контактная информация</a>
            </p>
        </footer>
    </div>
    <aside class="sidebar">
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php get_footer(); ?>