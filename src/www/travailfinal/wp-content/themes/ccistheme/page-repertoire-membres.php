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

                                <!-- Les membres -->
                                <h4 class="espaceenahut">Qui sont nos membres</h4>

                                <p>Nous effectuons présentement une mise à jour complète du profil de nos 600 membres. Nous vous présenterons cet automne un portrait détaillé de notre membership.</p>

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