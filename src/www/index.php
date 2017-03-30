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
                                        <a href="nous-joindre.php">Contact</a>
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
                                <a class="logo" href="index.php">
                                    <img src="assets/images/logo-principal.png" alt="">
                                </a>
                            </div>
                        <!-- MENU PRINCIPAL -->
                        <div class="collapse navbar-collapse principal" id="bs-example-navbar-collapse-1">
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 enleve-padding">       
                                <ul class="nav navbar-nav menu-principal" id="menu-deroulant">
                                    
                                    <li>
                                        <a href="a-propos.php">La ccis</a>
                                                    <ul class="deroule">
                                                        <li class="lien-1">
                                                            <a class="a-1" href="#">Présentation de la chambre</a>
                                                            <a href="#">Les comités d'organisation</a>
                                                        </li>
                                                        <li class="lien-2">
                                                            <a class="a-2" href="#">Conseil d'administration</a>
                                                            <a href="#">Les implications</a>
                                                        </li>
                                                    </ul>
                                    </li>
                                    <li>
                                        <a href="publications.php">Publications</a>
                                    </li>
                                    <li>
                                        <a href="evenement.php">Formations et événements</a>
                                    </li>
                                    <li>
                                        <a href="blogue.php">Blogue</a>
                                    </li>
                                    <li>
                                        <a href="membre.php">espace membre</a>
                                    </li>
                                    <li>
                                        <a href="boutique.php">Boutique</a>
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

</body>
</html>