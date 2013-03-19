<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title><?php
        wp_title( '-', true, 'right' );
    ?></title>

    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet"/>

    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.png">

    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-144x144.png"/>
    <?php wp_head(); ?>
</head>
<body>