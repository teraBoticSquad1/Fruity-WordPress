<!-- <header class="header">
      <div class="container">
        <div class="wrapper">
          <div class="header-item-left">
            <a href="<?php //echo home_url(); ?>">
                <img src="<?php //echo get_template_directory_uri(); ?>/img/logo/logo.png" alt="Logo" class="Fruitylogo" />
            </a>
          </div>
          <div class="header-item-center">
            <div class="overlay"></div>
            <nav class="menu">
              <div class="menu-mobile-header">
                <button type="button" class="menu-mobile-arrow">
                  <i class="ion ion-ios-arrow-back"></i>
                </button>
                <div class="menu-mobile-title"></div>
                <button type="button" class="menu-mobile-close">
                  <i class="ion ion-ios-close"></i>
                </button>
              </div>
              <ul class="menu-section">
                <?php/*
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                                'container_class' => 'menu-wrap'
                                )
                            );
                            */
                    ?>
                <li><a href="">Home</a></li>
                <li class="menu-item-has-children">
                  <a href="#"
                    >What's New <i class="ion ion-ios-arrow-down"></i
                  ></a>
                  <div class="menu-subs menu-mega menu-column-4">
                    <div class="list-item text-center">
                      <a href="#">
                        <img
                          src="<?php // echo get_template_directory_uri(); ?>/img/fruits/apple.png"
                          class="responsive"
                          alt="New Product"
                        />
                        <h4 class="title">Apple</h4>
                      </a>
                    </div>
                    <div class="list-item text-center">
                      <a href="#">
                        <img
                          src="<?php //echo get_template_directory_uri(); ?>/img/fruits/Cherry.png"
                          class="responsive"
                          alt="New Product"
                        />
                        <h4 class="title">Cherry</h4>
                      </a>
                    </div>
                    <div class="list-item text-center">
                      <a href="#">
                        <img
                          src="<?php //echo get_template_directory_uri(); ?>/img/fruits/Tangerine.png"
                          class="responsive"
                          alt="New Product"
                        />
                        <h4 class="title">Tangerine</h4>
                      </a>
                    </div>
                    <div class="list-item text-center">
                      <a href="#">
                        <img
                          src="<?php //echo get_template_directory_uri(); ?>/img/fruits/blackberry.png"
                          class="responsive"
                          alt="New Product"
                        />
                        <h4 class="title">Blackberry</h4>
                      </a>
                    </div>
                  </div>
                </li>
                <li class="menu-item-has-children">
                  <a href="#"
                    >Category <i class="ion ion-ios-arrow-down"></i
                  ></a>
                  <div class="menu-subs menu-mega menu-column-4">
                    <div class="list-item">
                      <h4 class="title">Men's Fashion</h4>
                      <ul>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                      </ul>
                      <h4 class="title">Kid's Fashion</h4>
                      <ul>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                      </ul>
                    </div>
                    <div class="list-item">
                      <h4 class="title">Women's Fashion</h4>
                      <ul>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                      </ul>
                      <h4 class="title">Health & Beauty</h4>
                      <ul>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                      </ul>
                    </div>
                    <div class="list-item">
                      <h4 class="title">Home & Lifestyle</h4>
                      <ul>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                        <li><a href="#">Product List</a></li>
                      </ul>
                    </div>
                    <div class="list-item">
                      <img
                        src="<?php //echo get_template_directory_uri(); ?>/img/fruits/Cranberry.png"
                        class="responsive"
                        alt="Shop Product"
                      />
                      <img
                        src="<?php //echo get_template_directory_uri(); ?>/img/fruits/DragonFruit.png"
                        class="responsive"
                        alt="Shop Product"
                      />
                    </div>
                  </div>
                </li>
                <li class="menu-item-has-children">
                  <a href="#"
                    >Articles <i class="ion ion-ios-arrow-down"></i
                  ></a>
                  <div class="menu-subs menu-column-1">
                    <ul>
                      <li><a href="#">Article One</a></li>
                      <li><a href="#">Article Two</a></li>
                      <li><a href="#">Article Three</a></li>
                      <li><a href="#">Article Four</a></li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item-has-children">
                  <a href="#"
                    >Accounts <i class="ion ion-ios-arrow-down"></i
                  ></a>
                  <div class="menu-subs menu-column-1">
                    <ul>
                      <li><a href="login.html">Login</a></li>
                      <li><a href="sign-in.html">Register</a></li>
                      <li><a href="#">Help and Question</a></li>
                      <li><a href="#">Privacy and Policy</a></li>
                      <li><a href="#">Term of Cookies</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="header-item-right">
            <button></button>
            <a href="#" class="menu-icon"
              ><i class="ion ion-md-search header-icons"></i
            ></a>
            <a href="#" class="menu-icon"
              ><i class="ion ion-md-heart header-icons"></i
            ></a>
            <a href="#" class="menu-icon"
              ><i class="ion ion-md-cart header-icons"></i
            ></a>
            <button type="button" class="menu-mobile-trigger">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
    </header> -->
    <!-- header end -->
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
            <div class="col">
                <i class="fa fa-bars menu-humberger"></i>
            </div>
        </div>
    </div>
</header>