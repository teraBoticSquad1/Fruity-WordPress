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
    <?php get_header();?>
    <?php get_template_part("Templates/Home/top_cetegory_section"); ?>
    <?php get_template_part("Templates/Home/hurry_up_section"); ?>
    <?php wp_footer(); ?>
</body>

</html>