        <?php get_header();?>
        
        <!-- Main -->
        <main>
            <!-- Image -->
            <div class="background-img hidden-xs" id="header">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/background-membre.png" alt="CCIS">
                <h1><?php the_title();?></h1>
            </div>

            <!-- Section : Présentation de la chambre -->
            <section id="presentation-chambre" class="implications-membres">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div id="margedroite" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3><?php the_title();?></h3>

                                <!-- Comités et associations -->
                                <h4 class="espaceenahut">Comités et associations</h4>
                                <p>La CCIS siège sur plusieurs comités et associations afin de représenter les gens d’affaires dans la réflexion et les actions de divers réseaux.</p>
                                <ul>
                                    <li>Comité de diversification (Ville de Shawinigan)</li>
                                    <li>Réseautage Mauricie</li>
                                    <li>Femmessor</li>
                                    <li>Jeune Chambre de Commerce de la Mauricie</li>
                                </ul>

                                <!-- Événements -->
                                <h4 class="espaceenahut">Événements</h4>
                                <p>En plus d’organiser divers événements pour ses membres, la CCIS considère important de s’impliquer activement dans les activités externes répondant à son mandat.</p>
                                <p class="gras">Vous désirez inviter la CCIS à s’impliquer dans votre événement?<br><a href="mailto:info@ccishawinigan.ca">info@ccishawinigan.ca</a></p> 

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