<? $pageName = basename(get_permalink());?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kalefones Biobio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/css/mediaelementplayer.css">
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/css/animate.css">
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="<?= bloginfo('template_directory')?>/css/aos.css">

    <link rel="stylesheet" href="<?= bloginfo('template_directory') ?>/css/style.css">
    
  </head>
  <body>
    
  
  <div class="site-wrap">
    <!--[quit class 'mt-4' to site-navbar]-->
    <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0" style="font-family: 'Concert One', cursive;color:#b71c1c !important;"><a href="index.html" class="h2 mb-0"><strong class="text-uppercase">Kalefones Biobio<span style="color:lightblue;">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><i class="fas fa-bars fa-2x"></i></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="<?= $pageName == '' ? 'active' : 'none' ?>"><a href="index.html">Inicio</a></li>
                  <li class="<?= $pageName == 'servicios' ? 'active' : 'none' ?>"><a href="servicios">Servicios</a></li>
                  <li class="<?= $pageName == 'productos' ? 'active' : 'none' ?>"><a href="productos">Productos</a></li>
                  <li class="<?= $pageName == 'contacto' ? 'active' : 'none' ?>"><a href="contacto">Contacto</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <i class="fas fa-times js-menu-toggle"></i>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->