<?php get_header();?>

	<section id="blog" class="container-fluid">
        <div class="text-left">
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
        <div class="blog">
            <div class="row">
                <div class="col-md-8">

                        <?php 
			                if ( have_posts() ) {
				            while ( have_posts() ) {
					            the_post(); 
					            //
					            // Post Content here
					            //
			            ?>


                    <div class="blog-item blog-content">
                        <h5 id="publish_date">Publié le <?php the_date(); ?><h5>
                        <?php if ( has_post_thumbnail() ) {
	                                the_post_thumbnail('large');
                                } ?>
                        <?php the_content(); ?>

                        <div class="entry-meta">
                             <?php $author = get_the_author(); ?> 
                            <span><i class="fa fa-user"></i> Écrit par <a href="#"><?php the_author();?></a></span>
                            <span id="the-category-post"><i class="fa fa-bookmark"></i>><?php the_category(); ?></span>
                            <span><i class="fa fa-comment"></i> <a href="#">1 commentaire</a></span>

                        </div>
                    </div><!--/.blog-item-->
                    <h2>Commentaires</h2>

                    <div class="comments">
                        <form role="form">
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
                            <button type="submit" class="btn btn-primary">Commenter</button>
                        </form>

                    </div>

                    <nav>
                        <ul class="pager">
                            <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Article précédent</a></li>
                            <li class="next"><a href="#">Article suivant <span aria-hidden="true">&rarr;</span></a></li>
                        </ul>
                    </nav>

                        <?php
				            } // end while


			                    } // end if
			            ?>

                </div><!--/.col-md-8-->

                <aside class="col-md-4">

                <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar( 'laterale1' ) ) : Endif ?>

    			</aside>

            </div><!--/.row-->
        </div>
    </section><!--/#blog-->


<?php get_footer();?>