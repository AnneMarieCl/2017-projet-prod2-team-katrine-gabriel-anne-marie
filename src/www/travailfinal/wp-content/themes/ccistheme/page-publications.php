        <?php get_header();?>

        <!-- Début du main -->
        <main>
            <!-- Image -->
            <div class="background-img hidden-xs" id="header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-publications.png" class="img-responsive center-block" alt="blogue">
                <h1>PUBLICATIONS</h1>
            </div>

            <section id="blog">
                <div class="container-fluid">
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">

                            
                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                                    
                                    <div id="post-type" class="text-center center">
                                        <ul>
                                            <li><a href="">Tout</a></li>
                                            <li><a href="">Faits saillants</a></li>
                                            <li><a href="">Actualités</a></li>
                                            <li><a href="">Grand dossiers</a></li>
                                            <li><a href="">Autres</a></li>
                                        </ul>
                                        <select id="post-type">
                                            <option value="Tout">Tout</option>
                                            <option value="Faits saillants">Faits saillants</option>
                                            <option value="Actualités">Actualités</option>
                                            <option value="Grand dossiers">Grand dossiers</option>
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
                                    
                                    <?php
                                    $args = array(
                                        'post_type' => 'publication',
                                        'posts_per_page' => 6,
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
                                                <h6><?php the_author(); ?></h6>
                                                <p><?php the_excerpt(); ?></p>
                                                <a href="">Lire la suite</a>

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
                        
                        <aside class="col-xs-0 col-sm-3 col-md-3 col-lg-3">
                            
                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="sidebar">
                                        <h4><img src="https://dummyimage.com/28x28/000/fff.jpg" alt="">DEVENEZ MEMBRE</h4>
                                        <p>Solidifier vos acquis et  accédez à une clientèle privilèges</p>
                                        <a href="" class="text-center">Devenir membre</a>
                                    </div>
                                    <div class="sidebar">
                                        <h4><img src="https://dummyimage.com/28x28/000/fff.jpg" alt="">NE RATEZ AUCUNE ACTIVITÉ</h4>
                                        <p>Inscrivez-vous à l’alerte SMS !</p>
                                        <a href="" class="text-center">S'inscrire</a>
                                    </div>
                                    <div class="sidebar">
                                        <h4><img src="https://dummyimage.com/28x28/000/fff.jpg" alt="">TOUTE LA VILLE PARLE PME</h4>
                                        <p>Les entrepreneurs d’ici sont inspirants. Venez découvrir leur parcours tout au long du développement de leur entreprise...</p>
                                        <a href="" class="text-center">S'inscrire</a>
                                    </div>
                                    <div class="sidebar">
                                        <h4><img src="https://dummyimage.com/28x28/000/fff.jpg" alt="">DÉFI DES ENTREPRISES</h4>
                                        <p>Venez vivre en grand nombre une expérience sportive unique sur l’île Melville.</p>
                                        <a href="" class="text-center">S'inscrire</a>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </aside>
                        
                        
                    </div>
                    
                </div>
            </section>     
        </main>
        <!-- Fin du main -->
        <?php get_footer();?>

