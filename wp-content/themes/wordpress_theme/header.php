<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Front page of my wordpress theme">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Wamiq Ur Rehman">
        <meta name="viewport" content="width=device-width, initial-scare=1.0">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="header">
            <div class="blog-info">
                <div class="blog-info-media">
                    <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    ?>
                    <img class="header-logo" src="<?php echo $logo[0] ?>" alt="">
                </div>
                <div class="blog-info-details">
                    <h1><?php echo get_bloginfo('name') ?></h1>
                    <p><?php echo get_bloginfo('description') ?></p>
                </div>
            </div>
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="nav-menu">%3$s</ul>'
                    )
                );
            ?>
        </div>