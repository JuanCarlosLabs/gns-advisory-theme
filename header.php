<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts - Inter Tight (optimized: only needed weights) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;600;700&display=swap" rel="stylesheet"></noscript>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Skip Link for Accessibility -->
<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e('Saltar al contenido principal', 'gns-advisory'); ?></a>

<header id="masthead" class="site-header" role="banner">
    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Navegación principal', 'gns-advisory'); ?>">
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
            ));
        }
        ?>
    </nav>
</header><!-- #masthead -->
