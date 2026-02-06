<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta content="telephone=no" name="format-detection" />
<meta content="" name="keywords" />
<meta content="" name="description" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/base.css" rel="stylesheet" type="text/css" />
<?php if (is_front_page() || is_home()) { ?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css" rel="stylesheet" type="text/css" />
<?php } else { ?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/page.css" rel="stylesheet" type="text/css" />
<?php } ?>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" sizes="32x32">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>


<body>

<?php if (is_front_page() || is_home()) { ?>
<header class="site-header">
<?php } else { ?>
<header class="site-header sub">
<?php } ?>
    <div class="site-header__inner">
        <h1 class="site-header__logo"><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_red.svg" alt=""></a></h1>
        <div class="header-cont">
            <nav class="header-nav">
                <ul class="g-nav">
                    <li class="g-nav__list"><a href="<?php echo esc_url(home_url()); ?>/about">Y's Factoryについて</a></li>
                    <li class="g-nav__list"><a href="<?php echo esc_url(home_url()); ?>/service">Y's Factoryの技術</a></li>
                    <li class="g-nav__list"><a href="<?php echo esc_url(home_url()); ?>/news">新着情報</a></li>
                    <li class="g-nav__list"><a href="#" target="_blank">採用情報</a></li>
                </ul>
                <a href="<?php echo esc_url(home_url()); ?>/contact" class="site-header__btn">お問い合わせ</a>
            </nav>
        </div>
        <button type="button" class="menu-btn"><span><span></span><span></span></span></button>
    </div>
</header>


<div class="wrap">