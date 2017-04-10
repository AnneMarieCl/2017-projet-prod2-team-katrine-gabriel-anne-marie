        <?php get_header();?>

        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'evenement',
            'category_name' => 'formations',
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
                                            <li><a class="current" href="http://localhost:8000/travailfinal/index.php/formations">Formations</a></li>
                                            <li><a href="http://localhost:8000/travailfinal/index.php/evenements/">Événements</a></li>
                                        </ul>
                                        <select ONCHANGE="location = this.options[this.selectedIndex].value;">
                                            <option value="http://localhost:8000/travailfinal/index.php/formations-evenements/">Tout</option>
                                            <option value="http://localhost:8000/travailfinal/index.php/formations" selected="selected">Formations</option>
                                            <option value="http://localhost:8000/travailfinal/index.php/evenements/">Événements</option>
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
                                        <div class="row resp">
                                        
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 enleve-padding">
                                                <div class="img-article">
                                                    <?php 
                                                        if (has_post_thumbnail()){
                                                        the_post_thumbnail('evenement', array('class' => 'img-responsive'));
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
                                                <h6><?php the_field("organisateur"); ?></h6>
                                                <?php the_excerpt(); ?>
                                                <h6><span class="fa fa-map-marker"></span> <?php the_field("emplacement"); ?></h6>
                                                <a href="<?php the_permalink()?>">En savoir plus</a>

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                        } // end while


                                            } // end if
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