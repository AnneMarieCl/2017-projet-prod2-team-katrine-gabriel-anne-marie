        <?php get_header();?>

        <!-- Main -->
        <main>
            <!-- Image -->
            <div class="background-img hidden-xs" id="header">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/background-membre.png" alt="L'espace membre">
                <h1><?php the_title();?></h1>
            </div>

            <!-- Section : Espace membre  -->
            <section id="presentation-chambre" class="espace-membre">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div id="margedroite" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3><?php the_title();?></h3>

                                <!-- Rabais et privilèges -->
                                <h4 class="espaceenahut">Devenir membre</h4>
                                <p>Bacon ipsum dolor amet esse culpa deserunt picanha tail, ut sint kevin duis velit sunt. Est cupim do incididunt salami, ea tri-tip sed veniam magna culpa. Chicken meatloaf ut, excepteur nulla aliquip exercitation sunt tenderloin consectetur pork drumstick id tail. Short ribs aute ex porchetta burgdoggen pork chop et non ullamco laboris pork loin laborum. Shank rump laboris swine labore.</p>
                                <p>Fugiat turkey leberkas alcatra, deserunt andouille cillum sed short loin pig brisket pork loin salami veniam. Dolore spare ribs est tongue esse ut. Nulla pancetta ham hock ad. In chicken turducken prosciutto veniam corned beef esse ham rump ball tip cupidatat pork loin shankle beef. Cupim frankfurter filet mignon labore kielbasa cupidatat. Boudin laborum est pancetta pork belly rump, picanha jowl deserunt ex landjaeger id consectetur bacon.</p>
                                <p>Strip steak id aliquip filet mignon beef ribs occaecat. Proident occaecat incididunt sed andouille est short loin fugiat elit. Cupim ipsum duis, in beef bacon proident anim labore consequat meatloaf. Sed aliquip sunt commodo.</p>
                                <p>Tongue velit meatloaf sausage. Pork beef ribs do sint shankle salami proident duis pig elit dolore ut shoulder ipsum. Magna salami leberkas in exercitation bresaola. Pastrami leberkas cow, ground round est magna aliquip strip steak deserunt. Meatloaf tail voluptate, burgdoggen pancetta deserunt rump filet mignon chicken cillum. Shoulder occaecat chicken magna rump pig ball tip. Commodo occaecat mollit nisi sirloin swine hamburger tail cow jowl minim porchetta ut pariatur.</p>
                                <p>Short loin dolore est tenderloin sunt leberkas. Drumstick pork loin hamburger rump velit cupidatat boudin. Ex esse ullamco anim strip steak drumstick shank. Adipisicing officia fatback drumstick mollit culpa labore pork sed filet mignon porchetta landjaeger tri-tip short loin cow. Id minim prosciutto, t-bone pastrami tri-tip consequat spare ribs ribeye. Ham hock venison ground round, pastrami velit pork loin meatball cupidatat aute duis ut sint ad chicken. Quis ad strip steak, velit short ribs fatback salami ham hock meatloaf jowl pork prosciutto tempor mollit ham.</p>
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