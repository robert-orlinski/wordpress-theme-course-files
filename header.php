<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <h1>
                <a href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>   
                </a>
            </h1>
            <h2>
                <?php bloginfo('description'); ?>
            </h2>
        </header>
    </body>