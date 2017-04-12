        <?php get_header();?>

        <!-- Main -->
        <main>
            <!-- Image -->
            <div class="background-img hidden-xs" id="header">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/background-membre.png" alt="L'espace membre">
                <h1><?php the_title();?></h1>
            </div>

            <!-- Section : Espace membre  -->
            <section id="presentation-chambre" class="espace-membre">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div id="margedroite" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3><?php the_title();?></h3>

                                <!-- Rabais et privilèges -->
                                <h4 class="espaceenahut">Devenir membre</h4>
                                <p>Bacon ipsum dolor amet esse culpa deserunt picanha tail, ut sint kevin duis velit sunt. Est cupim do incididunt salami, ea tri-tip sed veniam magna culpa. Chicken meatloaf ut, excepteur nulla aliquip exercitation sunt tenderloin consectetur pork drumstick id tail. Short ribs aute ex porchetta burgdoggen pork chop et non ullamco laboris pork loin laborum. Shank rump laboris swine labore.</p>
                            </div>

                            <!-- Section : Devenez membre -->
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-membre.png" alt="Devenez membre">
                            </div>
                                                        
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 devenezmembre">
                                <h4>DEVENEZ MEMBRE</h4>
                                <p class="espacebas">Être membre de la CCIS, c'est choisir de solidifier ses acquis en partageant votre expertise et celle d'autres membres tout en bénéficiant de plusieurs services vous donnant accès à une clientèle privilège.</p>
                                <a href="http://localhost:8000/travailfinal/index.php/espace-membre/" id="moreinfo">En savoir plus</a>
                            </div>
                        </div>    
                        
                        <!-- Sidebar -->
                        <aside class="hidden-xs hidden-sm col-md-3 col-lg-3">
                            <ul>
                                <!-- Côté droit -->
                                <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar( 'sidebar-membre' ) ) : Endif; ?>
                            </ul>
                        </aside>
                    </div>
                </div>
            </section>   
        </main>
        <!-- Fin du main -->

        <?php get_footer();?>