<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <nav class="main-nav">
                <h1 class="logo">
                    <a class="title-link" href="<?php echo home_url(); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
                <?php
                    wp_nav_menu( array(
                        'menu' => 'primary',
                        'menu_class' => 'navigation',
                        'container_class' => 'navigation-container'
                    ));
                ?>
            </nav>
            <section class="main-banner">

            </section>
        </header>
    </body>
