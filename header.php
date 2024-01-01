<header class="fruity-header">
    <div class="container">
        <div class="row">
            <div class="col">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.png" alt="Your Logo" width="120">
                </a>        
            </div>
            <div class="col-10">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                                'container_class' => 'menu-wrap'
                                )
                            );
                    ?>
            </div>
        </div>
    </div>
</header>
<!-- <div class="col-md-6">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.png" alt="Your Logo" width="120">
    </a>
</div> -->