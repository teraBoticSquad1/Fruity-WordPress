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
    <!-- wp header -->
    <?php get_header();?>
    <?php get_template_part( "Templates/common-banner" );?>
    
    <!-- Log in form start-->
    <div class="container mt-5">
      <h1 class="text-center mb-4 main-color">Sign In</h1>
      <form class="w-50 m-auto">
        <div class="mb-4">
          <input
            type="email"
            id="fruity-login-email"
            class="w-100 p-2 border-1 border"
          />
          <label class="form-label" for="fruity-login-email"
            >Email address</label
          >
        </div>
        <div class="form-outline mb-4">
          <input
            type="password"
            id="fruity-login-pass"
            class="w-100 p-2 border-1 border"
          />
          <label class="form-label" for="fruity-login-pass">Password</label>
        </div>
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="fruity-login-check"
                checked
              />
              <label class="form-check-label" for="fruity-login-check">
                Remember me
              </label>
            </div>
          </div>

          <div class="col">
            <a class="main-color" href="#!">Forgot password?</a>
          </div>
        </div>
        <button
          type="button"
          class="log-in-button btn-block mb-4 p-2 text-white"
        >
          Sign in
        </button>
        <div class="text-center">
          <p>
            Not a member? <a class="main-color" href="<?php echo home_url();?>/sign-up">Register</a>
          </p>
          <p>or sign up with:</p>
          <button
            type="button"
            class="main-color btn border-5 border btn-floating mx-1"
          >
            <i class="fab fa-facebook-f"></i>
          </button>
          <button
            type="button"
            class="main-color btn border-5 border btn-floating mx-1"
          >
            <i class="fab fa-google"></i>
          </button>
          <button
            type="button"
            class="main-color btn border-5 border btn-floating mx-1"
          >
            <i class="fab fa-twitter"></i>
          </button>
          <button
            type="button"
            class="main-color btn border-5 border btn-floating mx-1"
          >
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>
    </div>
    <!-- Log in form end-->
    
    <!-- wp footer -->
    <?php get_footer();?>

    <!-- calling wp foot -->
    <?php wp_footer(); ?>
</body>

</html>