<?php get_header();?>

    <section id="blog-single" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
                    <?php 
                        if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                            //
                            // Post Content here
                            //
                    ?>
                <div class="row">

                    <!-- Image et description de l'article -->
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 test">
                        <div class="ruban pull-left"><?php the_category(); ?></div>
                        <h2><?php the_title(); ?></h2>
                        <span>Écrit par <?php the_field("auteur");?></span>
                        <p id="publish_date">Publié le <span><?php the_date(); ?></span> par <span><?php the_field('auteur'); ?></span></p>
                    
                        <?php
                            if (has_post_thumbnail()){
                                the_post_thumbnail('blogue', array('class' => 'col-md-6 img-responsive'));
                            }
                            else {
                                echo '<img src="'.get_template_directory_uri().'/assets/images/thumbnail-ccis.jpg" alt="Logo officiel de la CCIS" class="col-md-6 img-responsive">';
                            }
                            the_content();

                            $file = get_field('piece_jointe');

                            if( $file ): 
                        ?>
                            <a href="<?php echo $file['url']; ?>"><?php echo ('<h5>Télécharger le document</h5>'); ?></a>
                        <?php endif; ?>
                    </div>

                    <!-- Pagination pour changer d'article -->
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                        <nav>
                            <div class="previous-article pull-left">
                                <?php previous_post_link(); ?>
                            </div>
                            <div class="next-article pull-right">
                                <?php next_post_link(); ?>
                            </div>
                        </nav>
                    </div>
                </div>

                    <?php
                        } // end while


                            } // end if
                    ?>
            </div><!--/.col-md-9-->

            <!-- Sidebar -->
            <aside class="col-xs-0 col-sm-4 col-md-4 col-lg-3 formation padding-titre">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul>
                            <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar( 'sidebar-blogue' ) ) : Endif; ?>
                        </ul>
                    </div>
                </div>
            </aside>
        </div><!--/.row-->
    </section><!--/#blog-single-->

<?php get_footer();?>