<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= the_title() ?></title>
    <meta charset="utf-8">
    <!-- Device-->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <!-- Description -->
    <meta name="description" content="<?= the_title() ?>">
    <!-- Social -->
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= bloginfo('title') ?>">
    <meta name="twitter:description" content="<?= bloginfo('title') ?>">
    <meta name="twitter:image" content="#">

    <!-- Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.les-creations-du-paradis.com">
    <meta property="og:title" content="<?= bloginfo('title') ?>">
    <meta property="og:description" content="<?= bloginfo('title') ?>">
    <meta property="og:image" content="#">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <!-- Favicon -->
    <meta name="theme-color" content="#fff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <?php wp_head(); ?>
</head>

<body>
    <div class="minheader">
        <div class="minheader__welcome">
            <p>Bienvenue sur <?php bloginfo('title') ?>!</p>
        </div>
        <ul class="minheader__signin">
            <li><a href="<?= home_url() . '/wp-login.php?action=register' ?>">S'inscrire</a></li>
            <li><a href="<?= home_url() . '/login' ?>">S'identifier</a></li>
        </ul>
    </div>
    <header class="header" id="hd">
        <div class="header__container">
            <div class="header__logo">
                <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/logo_paradis_small_black.png' ?>" alt="" class="header__img"></a>
            </div>

            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'header__nav-menu',
            ]);
            ?>

            <div class="header__search-shop">
                <a href="#"><img src="<?= get_template_directory_uri() . '/assets/svg/icon_burger.svg' ?>" alt="" class="header__search-shop-buger icon"></a>
                <a href="#"><img src="<?= get_template_directory_uri() . '/assets/svg/icon_shopping.svg' ?>" alt="" class="icon"></a>
            </div>
        </div>
    </header>