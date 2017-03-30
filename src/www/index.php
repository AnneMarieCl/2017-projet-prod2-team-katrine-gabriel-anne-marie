<!DOCTYPE html>
<html>
    <?php include'../includes/head.php'; ?>
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
            </section>
                <section class="menu-contact">
                 <!-- Menu de contact -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 enleve-border">
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                <ul class="nav navbar-nav navbar-right contact">
                                    <li>
                                        <a href="#">Facebook</a>
                                    </li>
                                    <li>
                                        <a href="#">Linkedin</a>
                                    </li>
                                    <li>
                                        <a href="#">Twitter</a>
                                    </li>
                                    <li>
                                        <a href="#">819-536-0777</a>
                                    </li>
                                    <li>
                                        <a href="#">Nous joindre</a>
                                    </li>
                                    <li>
                                        <a href="#">info@ccishawinigan.ca</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                 </div>
              </section>
              <section class="principal">
                 <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                <!-- LOGO -->
                                <a class="logo" href="index.html">
                                    <img src="assets/images/logo-principal.png" alt="">
                                </a>
                            </div>
                        <!-- MENU PRINCIPAL -->
                        <div class="collapse navbar-collapse principal" id="bs-example-navbar-collapse-1">
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 enleve-padding">       
                                <ul class="nav navbar-nav navbar-right menu-principal" id="example">
                                    
                                    <li class="active sf-menu">
                                        <a href="#">La ccis</a>
                                                    <ul>
                                                        <li class="inactive">
                                                            <a href="#">Présentation de la chambre</a>
                                                        </li>
                                                        <li class="inactive">
                                                            <a href="#">Conseil d'administration</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="rangee2">
                                                        <li class="inactive">
                                                            <a href="#">Les comités d'organisation</a>
                                                        </li>
                                                        <li class="inactive">
                                                            <a href="#">Les implications</a>
                                                        </li>
                                                    </ul>
                                                
                                    </li>
                                    <li>
                                        <a href="#">Publications</a>
                                    </li>
                                    <li>
                                        <a href="#">Formations et événements</a>
                                    </li>
                                    <li>
                                        <a href="blogue.html">Blogue</a>
                                    </li>
                                    <li>
                                        <a href="#">espace membre</a>
                                    </li>
                                    <li>
                                        <a href="#">Boutique</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                 </div>
              </section>
        </nav> 
        
        
    </header>

    

    <?php include'../includes/script.php'; ?>

    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="assets/js/jquery.js"></script>

    <!--superfish-->
    <script src="assets/js/superfish.js"></script>
    <script>

            (function($){ //create closure so we can safely use $ as alias for jQuery

            $(document).ready(function(){
                
                var exampleOptions = {
                speed: 'fast'
                }
                // initialise plugin
                var example = $('#example').superfish(exampleOptions);

                $('.init').on('click', function(){
                example.superfish(exampleOptions);
                });

                $('.open').on('click', function(){
                example.children('li:first').superfish('show');
                });

                $('.close').on('click', function(){
                example.children('li:first').superfish('hide');
                });
            });

            })(jQuery);


    </script>
</body>
</html>