<div class="wdg wdg-social">
    <div class="wdg-title wdg-social-icon">
        <a href="/feed" rel="nofollow" title="RSS" target="_blank" class="wdg-social-icon-link"><img src="<?php bloginfo('template_url'); ?>/img/rss.png"></a>
        <a href="https://twitter.com/technovzor" rel="nofollow" title="Twitter" target="_blank" class="wdg-social-icon-link"><img src="<?php bloginfo('template_url'); ?>/img/twitter.png"></a>
        <a href="https://www.facebook.com/technovzor" title="Facebook" rel="nofollow" target="_blank" class="wdg-social-icon-link"><img src="<?php bloginfo('template_url'); ?>/img/facebook.png"></a>
        <a href="https://plus.google.com/u/0/communities/107930683343719948916" title="Google Plus" rel="nofollow" target="_blank" class="wdg-social-icon-link"><img src="<?php bloginfo('template_url'); ?>/img/gplus.png"></a>
        <a href="http://surfingbird.ru/surfer/technovzor" rel="nofollow" target="_blank" title="Surfingbird" class="wdg-social-icon-link"><img src="<?php bloginfo('template_url'); ?>/img/surfingbird.png"></a>
    </div>
    <div class="wdg-content">
        <script type="text/javascript" src="//vk.com/js/api/openapi.js?82"></script>
        <div id="vk_groups"></div>
        <script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 0, width: "310", height: "290"}, 23121111);
        </script>
    </div>
</div>
<div class="wdg wdg-randpost">
    <div class="wdg-title wdg-randpost-title">
        <img src="<?php bloginfo('template_url'); ?>/img/wdg-icon.png" class="wdg-icon" width="18" height="18">
        Случайные записи
    </div>
    <div class="wdg-content wdg-randpost-content">
        <?php wdg_randpost(); ?>
    </div>
</div>
<div class="wdg">
    <div class="wdg-title">
        <img src="<?php bloginfo('template_url'); ?>/img/wdg-icon.png" class="wdg-icon" width="18" height="18">
        Популярные метки
    </div>
    <div class="wdg-content">
        <?php wp_tag_cloud('smallest=8&largest=14&number=35'); ?>
    </div>
</div>
<div class="wdg">
    <div class="wdg-title">
        <img src="<?php bloginfo('template_url'); ?>/img/wdg-icon.png" class="wdg-icon" width="18" height="18">
        Реклама
    </div>
    <div class="wdg-content">
        <a href="http://www.emulroom.com" target="_blank" rel="nofollow" title="Только олдскул, только хардкор">
            <img src="<?php bloginfo('template_url'); ?>/adv/emulroom.png" width="310" height="500">
        </a>
    </div>
</div>