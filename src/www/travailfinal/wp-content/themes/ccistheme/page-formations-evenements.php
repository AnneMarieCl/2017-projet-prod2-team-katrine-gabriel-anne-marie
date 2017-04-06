        <?php get_header();?>

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
                        
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">

                            
                            <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                                    
                                    <div id="post-type" class="text-center center">
                                        <ul>
                                            <li><a href="">Tout</a></li>
                                            <li><a href="">Formations</a></li>
                                            <li><a href="">Événements</a></li>
                                            <li><a href="">Autres</a></li>
                                        </ul>
                                        <select id="post-type">
                                            <option value="Tout">Tout</option>
                                            <option value="Formations">Formations</option>
                                            <option value="Événements">Événements</option>
                                            <option value="Autres">Autres</option>
                                        </select>
                                    </div>

                                 </div>

                                 <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">

                                    <ul class="pager">
			
                                        <li><a class="icon-prev" href=""><span class="fa fa-angle-double-left"></span></a></li>                           
                                        <li><a class="page-nbr current" href="?page=1">1</a></li>                               
                                        <li><a class="page-nbr" href="?page=2">2</a></li>                                   
                                        <li><a class="page-nbr" href="?page=3">3</a></li>
                                        <li><a class="page-nbr" href="?page=4">4</a></li>
                                        <li><a class="page-nbr" href="?page=5">5</a></li>
                                        <li><a class="page-nbr" href="?page=6">6</a></li>
                                        <li><a class="icon-next" href=""><span class="fa fa-angle-double-right"></span></a></li>
                                            
                                    </ul>
	    
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                                    <h3 class="event">Événements</h3>
                                    
                                    <?php
                                    $args = array(
                                        'post_type' => 'evenement',
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
                                                <p><?php the_excerpt(); ?></p>
                                                <a href="">S'inscrire</a>

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
                                                <p><?php the_excerpt(); ?></p>
                                                <a href="">S'inscrire</a>

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

                                    <ul class="pager pager-bottom">
			
                                        <li><a class="icon-prev" href=""><span class="fa fa-angle-double-left"></span></a></li>                           
                                        <li><a class="page-nbr current" href="?page=1">1</a></li>                               
                                        <li><a class="page-nbr" href="?page=2">2</a></li>                                   
                                        <li><a class="page-nbr" href="?page=3">3</a></li>
                                        <li><a class="page-nbr" href="?page=4">4</a></li>
                                        <li><a class="page-nbr" href="?page=5">5</a></li>
                                        <li><a class="page-nbr" href="?page=6">6</a></li>
                                        <li><a class="icon-next" href=""><span class="fa fa-angle-double-right"></span></a></li>
                                            
                                    </ul>
	    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <!-- Sidebar -->
                        <aside class="hidden-xs col-sm-4 col-md-4 col-lg-3 formation">
                            <ul class="row">
                                <!-- Côté droit -->
                                 <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar( 'sidebar-blogue' ) ) : Endif; ?>
                            </ul>
                        </aside>    
                        
                        
                    </div>
                    
                </div>
            </section>     
        </main>
        <!-- Fin du main -->

        <?php get_footer();?>