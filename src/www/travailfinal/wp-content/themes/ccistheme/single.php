<?php get_header();?>

	<section id="blog-single" class="container-fluid">
        <div class="row">
            <div class="col-md-9">

                    <?php 
                        if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                            //
                            // Post Content here
                            //
                    ?>

                
                <div class="row">
    
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 test">
                        
                        <span class="ruban pull-left"><?php the_category(); ?></span>
                        <h2><?php the_title(); ?></h2>
                        <?php $author = get_the_author(); ?> 
                        <span>Écrit par <?php the_author();?></span>
                        <h6 id="publish_date">Publié le <?php the_date(); ?><h6>
                        
                        <?php
                            if (has_post_thumbnail()){
                                the_post_thumbnail('blogue', array('class' => 'col-md-6 img-responsive'));
                            }
                            else {
                                echo '<img src="'.get_template_directory_uri().'/assets/images/thumbnail-ccis.jpg" alt="" class="img-responsive">';
                            }
                            the_content();
                        ?>
                    </div>
                        

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

                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                        <nav>
                            <ul class="pager">
                                <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Article précédent</a></li>
                                <li class="next pull-right"><a href="#">Article suivant <span aria-hidden="true">&rarr;</span></a></li>
                            </ul>
                        </nav>
                    </div>

                    
                    
                </div>
                
                

                    <?php
                        } // end while


                            } // end if
                    ?>

            </div><!--/.col-md-9-->

            <aside class="col-md-3">

            <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar( 'sidebar-blogue' ) ) : Endif ?>

            </aside>

        </div><!--/.row-->

    </section><!--/#blog-single-->


<?php get_footer();?>