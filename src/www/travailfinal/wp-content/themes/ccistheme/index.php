        <?php get_header();?>

        <!-- Début du main -->
        <main id="page-index">
             <div class="container-fluid">
                <!-- Slider -->
                <section class="slider hidden-xs">
                    <div class="image-1">
                        <?php 
                            echo do_shortcode( "[rev_slider alias='sliderprincipal']" );
                        ?>
                    </div>
                </section>  
                
                <!-- Section : Événements -->
                <section class="evenement">
                    <div class="row">
                        <?php
                            $args = array(
                                'post_type' => 'evenement',
                                'posts_per_page' => 2,
                            );

                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post(); 
                                    //
                                    // Post Content here
                                    //
                        ?>

                        <!-- Événement 1 -->
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 texte">
                            <p class="premiertruc"><?php the_category(); ?></p>
                            <h3 class="espacedessous"><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink()?>" class="rouge">En savoir plus</a><br>
                            <a href="#"><p class="bouton">S'inscrire</p></a>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 image">
                            <?php 
                                if (has_post_thumbnail()){
                                    the_post_thumbnail('evenement', array('class' => 'img-responsive'));
                                }
                                else {
                                   echo '<img src="'.get_template_directory_uri().'/assets/images/thumbnail-ccis.jpg" alt="Logo officiel de la CCIS" class="img-responsive">';
                                }
                            ?>
                            <a href="#"></a>
                            <span class="ruban pull-left"><?php the_category(); ?></span>
                        </div>

                         <?php
                                } // end while


                            } // end if
                            wp_reset_query();
                        ?>
                    </div>
                </section>

                <!-- Section : Publications -->          
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 enleve-padding">  
                        <section class="publication">
                            <div class="row enleve-margin">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 titre">
                                    <h3>Publications</h3>
                                </div>
                            </div>
                                <?php
                                $args = array(
                                    'post_type' => 'publication',
                                    'posts_per_page' => 2,
                                );

                                $query = new WP_Query( $args );
        
                                    if ( $query->have_posts() ) {
                                        while ( $query->have_posts() ) {
                                            $query->the_post(); 
                                            //
                                            // Post Content here
                                            //
                                ?>
                            
                            <div class="row">
                                <!-- Image -->
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 image">
                                    <?php 
                                            if (has_post_thumbnail()){
                                                the_post_thumbnail('evenement', array('class' => 'img-responsive'));
                                            }
                                            else {
                                                echo '<img src="'.get_template_directory_uri().'/assets/images/thumbnail-ccis.jpg" alt="Logo officiel de la CCIS" class="img-responsive">';
                                            }
                                    ?>
                                    <a href="#"></a>
                                    <span class="ruban pull-left"><?php the_category(); ?></span>
                                </div>

                                <!-- Description -->
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 texte">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink()?>"><p class="lien">Lire la suite</p></a>
                                    <a href="index.php/publications"><p class="lien">Allez aux publications</p></a>
                                </div>
                            </div>
                                <?php
                                    } // end while


                                        } // end if
                                        wp_reset_query();
                                ?>
                        </section>

                        <!-- Section : Blogue -->
                        <section class="blogue">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 titre">
                                    <h3>Blogue</h3>
                                </div>
                            </div>
                            <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 2,
                                );

                                $query = new WP_Query( $args );
        
                                    if ( $query->have_posts() ) {
                                        while ( $query->have_posts() ) {
                                            $query->the_post(); 
                                            //
                                            // Post Content here
                                            //
                            ?>
                            <div class="row">
                                <!-- Image -->
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 image">
                                             <div class="img-article">
                                                    <?php 
                                                    if (has_post_thumbnail()){
                                                        the_post_thumbnail('blogue', array('class' => 'img-responsive'));
                                                    }
                                                    else {
                                                        echo '<img src="'.get_template_directory_uri().'/assets/images/thumbnail-ccis.jpg" alt="Logo officiel de la CCIS" class="img-responsive">';
                                                    }
                                                    ?>
                                                    <span class="ruban pull-left"><?php the_category(); ?></span>

                                                </div>
                                    <a href="#"></a>
                                    <span class="ruban pull-left"><?php the_category(); ?></span>
                                </div>
                                
                                <!-- Texte -->
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 texte">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink()?>"><p class="lien">Lire la suite</p></a>
                                    <a href="index.php/blogue"><p class="lien">Allez sur le blogue</p></a>
                                </div>
                            </div>
                            
                            <?php
                                    } // end while


                                        } // end if
                                        wp_reset_query();
                            ?>
                            </section>
                        </div>   

                        <!-- Sidebar -->
                        <aside class="hidden-xs hidden-sm col-md-4 col-lg-3 activite">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-titre2">
                                <ul>
                                    <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar( 'sidebar-index' ) ) : Endif; ?>
                                </ul>
                            </div>
                        </div>
                    </aside>

                </div>
            </div>

            <!-- Section : Devenir membre --> 
            <div class="row">
                <section class="devenir-membre">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="image-2">
                            <img class="fond" src="<?php echo get_template_directory_uri(); ?>/assets/images/background-membre-index.png" alt="Image soirée de la CCIS">
                            <div class="appel-action"> 
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <h2>Vous désirez vous joindre à nous ?</h2>
                                    </div>
                                    <div class="col-xs-hidden col-sm-12 col-md-6 col-lg-6">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 bouton-gauche">
                                        <a class="bouton gauche" href="index.php/espace-membre"><h4>Devenez membre !</h4>
                                        <p>Solidifier vos acquis et  accédez à une clientèle privilège</p></a>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 bouton-droit">
                                        <a class="bouton droit" href="index.php/formations-evenements"><h4>Ne ratez aucune activité !</h4>
                                        <p>Inscrivez-vous à l’alerte <span>SMS</span></p></a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Section : Partenaires -->
            <section class="partenaire">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 texte2">
                        <h3>Nos partenaires</h3>
                    </div>
                    <div class="col-xs-hidden col-sm-hidden col-md-6 col-lg-8">
                        
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 texte3">
                        <a class="bouton-partn" href="http://localhost:8000/travailfinal/index.php/conseil-administration/"><p>Voir tous les partenaires</p></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <img class="partn" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-deloitte.png" alt="Logo Deloitte">
                    </div>  
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <img class="partn" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-desjardins.png" alt="Logo de la Caisse Desjardins">
                    </div>  
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <img class="partn" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-shawinigan.png" alt="Logo de la ville de Shawinigan">
                    </div>  
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <img class="partn cult-shawi" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-culture-shawinigan.png" alt="Logo de la culture Shawinigan">
                    </div>  
                </div>
            </section>

        </main>
        <!-- Fin du main -->

        <?php get_footer();?>