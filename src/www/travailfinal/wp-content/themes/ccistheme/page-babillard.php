        <?php get_header();?>

        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'paged' => $paged,
        );

        $query = new WP_Query( $args );
        ?>

        <!-- Main -->
        <main>
            <!-- Image -->
            <div class="background-img hidden-xs" id="header">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/background-header.jpg" alt="CCIS">
                <h1><?php the_title();?></h1>
            </div>

            <!-- Section : Présentation de la chambre -->
            <section id="babillard">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="row">

                                 <!-- Pagination -->
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