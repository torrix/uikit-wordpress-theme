<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit-icons.min.js"></script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
    <header id="header" class="uk-background-primary uk-light">
        <div id="branding" class="uk-container">
            <div id="site-title">
                <h1>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php echo esc_html(get_bloginfo('name')); ?>
                    </a>
                </h1>
            </div>
            <div id="site-description"><?php bloginfo('description'); ?></div>
            <div id="search"><?php get_search_form(); ?></div>
            <nav>
                <?php wp_nav_menu(['theme_location' => 'main-menu', 'container' => 'ul', 'menu_class'=> 'uk-subnav uk-flex uk-flex-between uk-flex-nowrap']); ?>
            </nav>
        </div>
    </header>
    <div id="container" class="uk-container">