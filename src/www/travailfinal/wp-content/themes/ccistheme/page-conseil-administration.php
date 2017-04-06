        <?php get_header();?>

        <!-- Main -->
        <main>
            <!-- Image -->
            <div class="background-img hidden-xs" id="header">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/background-header.jpg" alt="CCIS">
                <h1><?php the_title();?></h1>
            </div>

            <!-- Section : Conseil d'administration -->
            <section id="presentation-chambre" class="ca">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div id="margedroite" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>Conseil d'administration</h3>

                                <!-- Liste des membres -->
                                <h4 class="espaceenahut">Liste des membres du conseil d'administration 2015-2016</h4>

                                <?php
                                    $args = array(
                                        'post_type' => 'membresca',
                                        'order' => 'ASC',
                                    );

                                    $query = new WP_Query( $args );
            
                                    if ( $query->have_posts() ) {
                                        while ( $query->have_posts() ) {
                                            $query->the_post(); 
                                            //
                                            // Post Content here
                                            //
                                ?>
	    
                                <h5 class="format"><?php the_field('nom_du_membre'); ?></h5>
                                <h5 class="formatdeux"><?php the_field('nom_du_poste'); ?></h5>
                                <p><?php the_field('nom_et_adresse_de_lentreprise'); ?><br>
                                <?php the_field('numero_de_telephone'); ?><br>
                                <a href="mailto:<?php the_field('adresse_courriel'); ?>"><?php the_field('adresse_courriel'); ?></a></p>

                                <?php
                                            } // end while
                                        } // end if
                                    wp_reset_query();
                                ?>
                                

                                <!-- Liste des administrateurs -->
                                <h4 class="espaceenahut2">Liste des administrateurs</h4>
                                <?php
                                    $args = array(
                                        'post_type' => 'administrateurca',
                                        'order' => 'ASC',
                                    );

                                    $query = new WP_Query( $args );
        
                                    if ( $query->have_posts() ) {
                                        while ( $query->have_posts() ) {
                                            $query->the_post(); 
                                            //
                                            // Post Content here
                                            //
                                ?>
	    
                                <h5 class="format"><?php the_field('nom_de_ladministrateur'); ?></h5>
                                <p><?php the_field('nom_et_adresse_de_lentreprise'); ?><br>
                                <?php the_field('numero_de_telephone'); ?><br>
                                <a href="mailto:<?php the_field('adresse_courriel'); ?>"><?php the_field('adresse_courriel'); ?></a></p>

                                <?php
                                            } // end while
                                        } // end if
                                    wp_reset_query();
                                ?>

                                <!-- Grands partenaires -->
                                <h4 class="espaceenahut2">Grands partenaires</h4>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 partenaire">
                                    <img class="partenaire img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-deloitte.png" alt="Deloitte">
                                </div>  
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 partenaire">
                                    <img class="partenaire img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-desjardins.png" alt="Desjardins">
                                </div>  
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 partenaire">
                                    <img class="partenaire img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-shawinigan.png" alt="Ville de Shawinigan">
                                </div>  
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 partenaire">
                                    <img class="partenaire img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-culture-shawinigan.png" alt="Culture Shawinigan">
                                </div>  
                                
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
                            <ul class="row">
                                <!-- Côté droit -->
                                <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar( 'sidebar-ccis' ) ) : Endif; ?>
                            </ul>
                        </aside>
                        
                    </div>
                </div>
            </section>   
        </main>
        <!-- Fin du main -->

        <?php get_footer();?>