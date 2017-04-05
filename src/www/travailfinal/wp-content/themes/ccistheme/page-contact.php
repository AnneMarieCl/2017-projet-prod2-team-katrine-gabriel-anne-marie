        <?php get_header();?>
        
        <!-- Main -->
        <main>
            <!-- Image -->
            <div class="background-img hidden-xs" id="header">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/background-contact.jpg" alt="Contact">
                <h1><?php the_title();?></h1>
            </div>

            <!-- Section : Espace membre  -->
            <section id="presentation-chambre" class="espace-membre">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div id="margedroite" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>Contact</h3>
                                <!-- Formulaire avec le plug-in WP -->
                                <h4 class="espaceenahut">Demande d'information</h4>
                                <p><?php the_content();?></p>
                                <?php 
                                if ( have_posts() ) {
                                    while ( have_posts() ) {
                                    the_post(); 
                                    //
                                    // Post Content here
                                    //
                                    ?>	

                                    <!-- Contenu de la page -->
                                    <p><?php the_content();?></p>

                                    <?php
                                    } // end while


                                } // end if
                                ?>

                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginpadding">
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 marginpadding">
                                    <!-- Coordonnées -->
                                    <h4 class="espaceenahut">Nous joindre</h4>
                                    <p><b>1250, Avenue de la Station, Bureau 1-116</b></p>
                                    <p>Shawinigan (Québec)</p>
                                    <p>G9N 1W8</p>
                                    <p><b>819 536-0777</b></p>
                                    <p>819 536 0039</p>
                                    <p><a href="mailto:info@ccishawinigan.ca">info@ccishawinigan.ca</a></p>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 marginpadding">
                                    <!-- Question en particulier -->
                                    <h4 class="espaceenahut">Une question en particulier?</h4>

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 marginpadding">
                                        <p><b>Martin St-Pierre</b></p>
                                        <p>Directeur général</p>
                                        <p><a href="mailto:martin@ccishawinigan.ca">martin@ccishawinigan.ca</a></p>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 marginpadding">
                                        <p><b>Claudine Drolet</b></p>
                                        <p>Responsable des communications et des événements</p>
                                        <p><a href="mailto:claudine@ccishawinigan.ca">claudine@ccishawinigan.ca</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        
                    </div>
                </div>
            </section>   
        </main>
        <!-- Fin du main -->
        
        <?php get_footer();?>
    </body>
</html>
