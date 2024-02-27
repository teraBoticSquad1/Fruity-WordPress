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
    <div class="container w-50">
      <h1 class="main-color text-center mt-5 mb-4">Create an Account</h1>
      <form>
        <div class="mb-4">
          <input
            type="text"
            id="fruity-signup-name"
            class="w-100 form-control-lg p-2 border-1 border"
          />
          <label class="form-label" for="fruity-signup-name">Your Name</label>
        </div>

        <div class="form-outline mb-4">
          <input
            type="email"
            id="fruity-signup-email"
            class="w-100 form-control-lg p-2 border-1 border"
          />
          <label class="form-label" for="fruity-signup-email">Your Email</label>
        </div>

        <div class="form-outline mb-4">
          <input
            type="password"
            id="fruity-signup-pass"
            class="w-100 form-control-lg p-2 border-1 border"
          />
          <label class="form-label" for="fruity-signup-pass">Password</label>
        </div>

        <div class="form-outline mb-4">
          <input
            type="password"
            id="fruity-signup-pass-again"
            class="w-100 form-control-lg p-2 border-1 border"
          />
          <label class="form-label" for="fruity-signup-pass-again"
            >Repeat your password</label
          >
        </div>

        <div class="form-check d-flex mb-5">
          <input
            class="form-check-input me-2"
            type="checkbox"
            value=""
            id="fruity-signup-check"
          />
          <label class="form-check-label" for="fruity-signup-check">
            I agree all statements in
            <br />
            <a href="#!" class="text-body"><u>Terms of service</u></a>
          </label>
        </div>

        <div class="d-flex justify-content-center">
          <button
            type="button"
            class="log-in-button btn-block mb-4 p-2 text-white"
          >
            Register
          </button>
        </div>

        <p class="text-center text-muted mt-5 mb-0">
          Have already an account?
          <a class="main-color" href="<?php echo home_url()?>/log-in" class="fw-bold text-body"
            ><u>Login here</u></a
          >
        </p>
      </form>
    </div>
    <!-- sign up form end-->
    
    <!-- wp footer -->
    <?php get_footer();?>

    <!-- calling wp foot -->
    <?php wp_footer(); ?>
</body>

</html>