        <?php get_header();?>

        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'event',
            'posts_per_page' => 6,
            'paged' => $paged,
        );

        $query = new WP_Query( $args );
        ?>

        <!-- Main -->
        <main>
            <!-- Image -->
            <div class="background-img hidden-xs" id="header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-formations-evenements.jpg" class="img-responsive center-block" alt="Formations et événements">
                <h1><?php the_title();?></h1>
            </div> 

         <section id="blog">
                <div class="container-fluid">
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">

                            
                            <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                                    
                                    <div id="post-type" class="text-center center formations">
                                        <ul>
                                            <li><a href="http://localhost:8000/travailfinal/index.php/formations-evenements/">Tout</a></li>
                                            <li><a href="http://localhost:8000/travailfinal/index.php/formations">Formations</a></li>
                                            <li><a href="http://localhost:8000/travailfinal/index.php/evenements/">Événements</a></li>
                                        </ul>
                                        <select>
                                            <option value="Tout">Tout</option>
                                            <option value="Formations">Formations</option>
                                            <option value="Événements">Événements</option>
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

                                <!-- Formations -->
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                                    <h3 class="event">Formations</h3>
                                    
                                    <?php
                                    $args = array(
                                        'post_type' => 'formation',
                                        'posts_per_page' => 3,
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
                                        <div class="row resp">
                                        
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 enleve-padding">
                                                <div class="img-article">
                                                    <?php 
                                                        if (has_post_thumbnail()){
                                                        the_post_thumbnail('formation', array('class' => 'img-responsive'));
                                                    }
                                                    else {
                                                        echo '<img src="'.get_template_directory_uri().'/assets/images/thumbnail-ccis.jpg" alt="" class="img-responsive">';
                                                    }
                                                    ?>
                                                    <span class="ruban pull-left"><?php the_category(); ?></span>
                                                </div>
                                            </div>
                                        
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 infoarticle">

                                                <h4><?php the_title(); ?></h4>
                                                <p><?php the_excerpt(); ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                        } // end while


                                            } // end if
                                            wp_reset_query();
                                    ?>
	    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">

                                    <div class="pagination pagination-fin">
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
                        
                        <aside class="hidden-xs hidden-sm col-md-4 col-lg-3 formation">
                            
                            <div class="row">
                                
                                <div class="hidden-xs hidden-sm col-md-12 col-lg-12 padding-titre">
                                    <ul>
                                        <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar( 'sidebar-events' ) ) : Endif; ?>
                                    </ul>     
                                </div>
                                
                            </div>
                            
                        </aside>
                        
                        
                    </div>
                    
                </div>
            </section>     
        </main>
        <!-- Fin du main -->

        <?php get_footer();?>