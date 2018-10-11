<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/bootstrap.min.css">
<!--Style-->
<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/style.css">
  </head>
  <body>

    <!--navbar-->
    <nav class="navbar navbar-expand-mr navbar-dark bg-dark navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?php bloginfo('template_url' ); ?>/images/LogoSB.png" width="80" height="80" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php wp_nav_menu(array(
            'theme_location' => 'menu-1',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'menu_class' => 'nav navbar-nav navbar-right',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),

        ) );
        ?>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav navbar-right">

            </ul>
        </div>
    </nav>


    <!--fin navbar-->