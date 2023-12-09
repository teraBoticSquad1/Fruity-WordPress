<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- calling wp head -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- calling wp foot -->
    <?php wp_footer(); ?>
    <div id="header_area" class="<?php echo get_theme_mod('fruity_menu_position'); ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="">
                        <img class="logo" src="<?php echo get_theme_mod('fruity_header_logo'); ?>" alt="" class="">
                    </a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array("theme_location" => "fruity_menu", "menu_id" => "nav")); ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>