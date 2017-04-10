        <?php get_header();?>

        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'category_name' => 'actualites',
            'posts_per_page' => 6,
            'paged' => $paged,
        );

        $query = new WP_Query( $args );
        ?>
        <!-- Début du main -->
        <main>
            <!-- Image -->
            <div class="background-img hidden-xs" id="header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-blogue.png" class="img-responsive center-block" alt="blogue">
                <h1><?php the_title();?></h1>
            </div>

            <section id="blog">
                <div class="container-fluid">
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">

                            
                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                                    
                                    <div id="post-type" class="text-center center">
                                        <ul>
                                            <li><a href="http://localhost:8000/travailfinal/index.php/blogue">Tout</a></li>
                                            <li><a href="http://localhost:8000/travailfinal/index.php/blogue-faits-saillants">Faits saillants</a></li>
                                            <li><a href="http://localhost:8000/travailfinal/index.php/blogue-actualites">Actualités</a></li>
                                            <li><a href="http://localhost:8000/travailfinal/index.php/blogue-grands-dossiers">Grand dossiers</a></li>
                                            <li><a href="http://localhost:8000/travailfinal/index.php/blogue-zone-medias">Zone médias</a></li>
                                        </ul>
                                        <select>
                                            <option value="Tout">Tout</option>
                                            <option value="Faits saillants">Faits saillants</option>
                                            <option value="Actualités">Actualités</option>
                                            <option value="Grand dossiers">Grand dossiers</option>
                                            <option value="Zone médias">Zone médias</option>
                                        </select>
                                    </div>

                                 </div>

                                 <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                                    <div class="pagination">
                                        <?php
                                        global $query;
                                        $big = 999999999; // need an unlikely integer
                                        echo paginate_links( array(
                                        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                        'format' => '?paged=%#%',
                                        'current' => max( 1, get_query_var('paged') ),
                                        'total' => $query->max_num_pages
                                        ) );
                                        ?>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                                    
                                    <?php
            
                                        if ( $query->have_posts() ) {
                                            while ( $query->have_posts() ) {
                                                $query->the_post(); 
                                                //
                                                // Post Content here
                                                //
                                    ?>

                                    <div class="article">
                                        <div class="row">
                                        
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                                <div class="img-article">
                                                    <?php 
                                                        if (has_post_thumbnail()){
                                                        the_post_thumbnail('blogue', array('class' => 'img-responsive'));
                                                    }
                                                    else {
                                                        echo '<img src="'.get_template_directory_uri().'/assets/images/thumbnail-ccis.jpg" alt="" class="img-responsive">';
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
                                        
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 infoarticle">

                                                <h4><?php the_title(); ?></h4>
                                                <h6><?php the_field("auteur"); ?></h6>
                                                <?php the_excerpt(); ?>
                                                <a href="<?php the_permalink()?>">Lire la suite</a>

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                        } // end while


                                            } // end if
                                    ?>
	    
                                </div>

                                <!-- Numéro de pages -->
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                                    <div class="pagination">
                                        <?php
                                        global $query;
                                        $big = 999999999; // need an unlikely integer
                                        echo paginate_links( array(
                                        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                        'format' => '?paged=%#%',
                                        'current' => max( 1, get_query_var('paged') ),
                                        'total' => $query->max_num_pages
                                        ) );
                                        ?>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <aside class="hidden-xs hidden-sm col-md-4 col-lg-3 blog">
                            
                            <div class="row">
                                
                                <div class="hidden-xs hidden-sm col-md-12 col-lg-12 padding-titre">
                                    <ul>
                                        <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar( 'sidebar-blogue' ) ) : Endif; ?>
                                    </ul>
                                </div>
                                
                            </div>
                            
                        </aside>
                        
                        
                    </div>
                    
                </div>
            </section>  

            <!-- Présentation des images -->
            <div class="container-fluid photos-presentation">
                <!-- Six images -->
                <div class="row">
                    <a href="https://www.instagram.com/" target="_blank">
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-galerie-1.jpg" alt="Soirée CCIS" class="img-responsive">
                            <div class="middle">
                                <div class="text"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank">
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-galerie-2.jpg" alt="Conseil d'administration CCIS" class="img-responsive">
                            <div class="middle">
                                <div class="text"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank">
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-galerie-3.jpg" alt="Partenaires de la CCIS" class="img-responsive">
                            <div class="middle">
                                <div class="text"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank">
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-galerie-4.jpg" alt="Soirée CCIS" class="img-responsive">
                            <div class="middle">
                                <div class="text"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank">
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-galerie-5.jpg" alt="Soirée CCIS" class="img-responsive">
                            <div class="middle">
                                <div class="text"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-galerie-6.jpg" alt="Soirée CCIS" class="img-responsive">
                            <div class="middle">
                                <div class="text"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>

        </main>
        <!-- Fin du main -->
        <?php get_footer();?>