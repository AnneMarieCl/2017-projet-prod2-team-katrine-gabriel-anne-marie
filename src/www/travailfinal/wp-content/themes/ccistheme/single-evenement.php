<?php get_header();?>

	<section id="single" class="container-fluid">
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
                    <!-- Iamge et texte de l'article -->
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 test">
                        <div class="ruban pull-left"><?php the_category(); ?></div>
                        <h2><?php the_title(); ?></h2>
                        <?php
                        $date = get_field('date');

                        // Extraire Y,M,D
                        $y = substr($date, 0, 4);
                        $m = substr($date, 4, 2);
                        $d = substr($date, 6, 2);

                        // Créer le format UNIX
                        $time = strtotime("{$d}-{$m}-{$y}");
                        ?>
                        <p id="publish_date">Organisé par <span><?php the_field('organisateur')?></span> le <span><?php echo date_i18n('j F Y', $time); ?></span><p>
                        
                        <?php
                            if (has_post_thumbnail()){
                                the_post_thumbnail('blogue', array('class' => 'col-md-6 img-responsive'));
                            }
                            else {
                                echo '<img src="'.get_template_directory_uri().'/assets/images/thumbnail-ccis.jpg" alt="Logo officiel de la CCIS" class="col-md-6 img-responsive">';
                            }
                            the_content(); ?>
                            <h6><span class="fa fa-map-marker"></span> <?php the_field("emplacement"); ?></h6>    
                            <a href="#"><p class="bouton">S'inscrire</p></a>
                    </div>

                    <!-- Zone pour commentaires --> 
                    <div class="comments col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                        <form role="form">
                            <h2>Commentaires</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Votre nom">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Votre courriel">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="website" placeholder="Votre site web">
                            </div>

                            <textarea class="form-control" rows="9" placeholder="Votre commentaire"></textarea>
                            <button type="submit" class="btn btn-default">Commenter</button>
                        </form>
                    </div>

                    <!-- Pagination pour le changement d'article -->
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