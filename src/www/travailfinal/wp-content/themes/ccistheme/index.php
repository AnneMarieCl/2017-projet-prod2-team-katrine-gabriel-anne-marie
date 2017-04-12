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
                                function custom_excerpt_length( $length ) {
                                    return 40;
                                }
                                add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

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

                                    <!-- Boucle des événements -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="article">
                                <div class="row">         
                                    
                                    <!-- Image de l'article -->
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-push-6">
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
                                            <div class="date">
                                                <div class='square-box month-box'>
                                                    <div class='square-content month-content'><div><span class="month"><span class = "fa fa-circle left-circle"></span><?php the_time('F'); ?><span class = "fa fa-circle right-circle"></span></span></div></div>
                                                </div>
                                                <div class='square-box day-box'>
                                                    <div class='square-content day-content'><div><span class="day"><?php the_time('j'); ?></span></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Texte de l'article -->
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-pull-6 infoevent">
                                        <h4><?php the_title(); ?></h4>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink()?>">En savoir plus</a><br>
                                        <a href="#"><p class="bouton">S'inscrire</p></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                                

                                <?php
                                        } // end while


                                    } // end if
                                    wp_reset_query();
                                ?>
                                
                    </div>
                </section>

                <!-- Section : Publications --> 
                <section id="post">                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                                    <section class="publication">
                                        <h3 class="titre">Publications</h3>
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

                                        <div class="article">
                                            <div class="row">
                                                <!-- Image de l'article -->
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
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
                                                        <div class="date">
                                                            <div class='square-box month-box'>
                                                                <div class='square-content month-content'><div><span class="month"><span class = "fa fa-circle left-circle"></span><?php the_time('F'); ?><span class = "fa fa-circle right-circle"></span></span></div></div>
                                                            </div>
                                                            <div class='square-box day-box'>
                                                                <div class='square-content day-content'><div><span class="day"><?php the_time('j'); ?></span></div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Texte de l'article -->
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 infoarticle">
                                                    <h4><?php the_title(); ?></h4>
                                                    <h6><?php the_field("auteur"); ?></h6>
                                                    <?php the_excerpt(); ?>
                                                    <a href="<?php the_permalink()?>">Lire la suite</a>
                                                    <a class="second-link" href="index.php/publication">Allez aux publications</a>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                            } // end while


                                                } // end if
                                                wp_reset_query();
                                        ?>
                                    </section>
                                    <section class="blogue">       
                                        <h3 class="titre">Blogue</h3>
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

                                        <div class="article">
                                            <div class="row">
                                                <!-- Image de l'article -->
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
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
                                                        <div class="date">
                                                            <div class='square-box month-box'>
                                                                <div class='square-content month-content'><div><span class="month"><span class = "fa fa-circle left-circle"></span><?php the_time('F'); ?><span class = "fa fa-circle right-circle"></span></span></div></div>
                                                            </div>
                                                            <div class='square-box day-box'>
                                                                <div class='square-content day-content'><div><span class="day"><?php the_time('j'); ?></span></div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Texte de l'article -->
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 infoarticle">
                                                    <h4><?php the_title(); ?></h4>
                                                    <h6><?php the_field("auteur"); ?></h6>
                                                    <?php the_excerpt(); ?>
                                                    <a href="<?php the_permalink()?>">Lire la suite</a>
                                                    <a class="second-link" href="index.php/blogue">Allez sur le blogue</a>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                            } // end while


                                                } // end if
                                                wp_reset_query();
                                        ?>
                                    </section>
                                </div>

                            </div>
                        
                        </div>
                        
                    <!-- Sidebar -->
                    <aside class="hidden-xs hidden-sm col-md-4 col-lg-3 blog">
                        <div class="row">  
                            <div class="hidden-xs hidden-sm col-md-12 col-lg-12 padding-titre">
                                <ul>
                                    <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar( 'sidebar-index' ) ) : Endif; ?>
                                </ul>
                            </div>
                        </div>
                    </aside>

                    </div>
                </section>
            </div>

            <!-- Section : Devenir membre --> 
            <div class="row">
                <section class="devenir-membre">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="image-2">
                            <img class="fond" src="<?php echo get_template_directory_uri(); ?>/assets/images/background-membre-index.png" alt="Image soirée de la CCIS">
                            <div class=""> 
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                        <h2>Vous désirez vous joindre à nous ?</h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center background">
                                        <div>
                                            <a class="" href="http://localhost:8000/travailfinal/index.php/devenir-membre/"><h4>Devenez membre !</h4>
                                            <p>Solidifier vos acquis et  accédez à une clientèle privilège</p></a>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center background">
                                        <div>
                                            <a class="" href="http://localhost:8000/travailfinal/index.php/formations-evenements/"><h4>Ne ratez aucune activité !</h4>
                                            <p>Inscrivez-vous à l’alerte <span>SMS</span></p></a>
                                        </div>
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
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 texte2">
                        <h3>Nos partenaires</h3>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 texte3 text-right">
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