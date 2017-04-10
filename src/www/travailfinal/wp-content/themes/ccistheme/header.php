<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CCIS</title>
        <!-- BootStrap -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato%7CTauri" rel="stylesheet">
        <script src="https://use.fontawesome.com/2a85d3823f.js"></script>
        <!-- FavIcon -->
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
        <!-- Style.css -->
        <link href="<?php bloginfo("stylesheet_url") ?>" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <!-- LOGO | MENU PRINCIPAL | INFORMATION DE CONTACT -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <section class="burger">
                    <div class="container-fluid">
                        <!-- Responsive -->
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
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menucontact',
                                    'menu_id'  => 'menu-contact',
                                    'container' => '', 
                                    'items_wrap' => '<ul class="nav navbar-nav navbar-right contact">%3$s</ul>',
                                ) );
                                ?>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="principal">
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <!-- Logo -->
                            <a class="logo" href="http://localhost:8000/travailfinal/">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-principal.png" alt="Logo de la CCIS">
                            </a>
                        </div>
                    
                        <!-- Menu principal -->
                        <div class="collapse navbar-collapse principal" id="bs-example-navbar-collapse-1">
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">       
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menuprincipal',
                                    'menu_id'  => 'menu-deroulant',
                                    'container' => '', 
                                    'items_wrap' => '<ul class="nav navbar-nav menu-principal navbar-right" id="menu-deroulant">%3$s</ul>',
                                ) );
                                ?>   
                            </div>
                            
                        </div>
                    </div>
                </section>
            </nav> 
        </header>