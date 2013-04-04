<?php get_header(); ?>
<header class="header">
    <div class="container clearfix">
        <div class="pull-left">
            <a href="/" title="<?php bloginfo('name'); ?>">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="270" height="30" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
    </div>
</header>
<div class="container clearfix">
    <div class="content-wrapper">
        <main class="content error-404">
            <h1><strong>Ошибка 404</strong></h1>
            <h3>Запрашиваемая страница не найдена!</h3>
            <a href="/">&larr; Вернуться на главную страницу</a>
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