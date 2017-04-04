<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>CCIS</title>
        <!-- BootStrap -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato%7CTauri" rel="stylesheet">
        <script src="https://use.fontawesome.com/2a85d3823f.js"></script>
        <!-- Style.css -->
        <link href="<?php bloginfo("stylesheet_url") ?>" rel="stylesheet">
    </head>
    <body>
        <header>
            <!-- LOGO | MENU PRINCIPAL | INFORMATION DE CONTACT -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <section class="burger">
                    <div class="container-fluid">
                        <!-- BOUTON RESPONSIVE -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </section>
                    
                <section class="menu-contact">
                    <!-- Menu de contact -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 enleve-border">
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                <ul class="nav navbar-nav navbar-right contact">
                                    <li><a href="https://www.facebook.com/CCIShawi" target="_blank">Facebook</a></li>
                                    <li><a href="https://www.linkedin.com/company/3266947?trk=tyah&trkInfo=tas%3AChambre%20de%20commerce%20et%20d%27industrie%20de%20Shawi" target="_blank">Linkedin</a></li>
                                    <li><a href="https://twitter.com/CCIShawinigan" target="_blank">Twitter</a></li>
                                    <li><a href="contact.php">819 536-0777</a></li>
                                    <li><a href="mailto:info@ccishawinigan.ca">info@ccishawinigan.ca</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="principal">
                    <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <!-- LOGO -->
                        <a class="logo" href="index.php">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-principal.png" alt="Logo de la CCIS">
                        </a>
                    </div>
                    
                        <!-- MENU PRINCIPAL -->
                        <div class="collapse navbar-collapse principal" id="bs-example-navbar-collapse-1">
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 enleve-padding">       
                                <?php
                                wp_nav_menu( array(
                                'theme_location' => 'menuprincipal',
                                'menu_id'     => 'menu-deroulant',
                                'container' => '', 
                                'items_wrap' => '<ul class="nav navbar-nav menu-principal navbar-right">%3$s</ul>',
                                            ) );
                                ?>   
                            </div>
                        </div>
                    </div>
                </section>
            </nav> 
        </header>