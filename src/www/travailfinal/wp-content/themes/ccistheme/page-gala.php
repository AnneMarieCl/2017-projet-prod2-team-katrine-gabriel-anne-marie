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

                                <!-- Historique -->
                                <h4 class="espaceenahut">Historique</h4>
                                <p>En collaboration avec d’importants partenaires économiques, le Gala Distinction Desjardins honore et reconnaît depuis plus de 20 ans les efforts des entrepreneurs de la région. Jusqu’à maintenant, pas moins de 250 entreprises se sont fait attribuer le titre de meilleure entreprise dans sa catégorie, ce qui représente près de 750 distinctions soulignées dans le milieu des affaires.</p>
                                <p>Chaque année, le Gala rassemble au-delà de 400 personnes impliquées de près ou de loin dans milieu des affaires. Pour beaucoup, il s’agit d’un accès privilégié à cette communauté et d’un rayonnement incomparable pour l’entreprise.</p>
                                <p>Le Gala Distinction Desjardins, c'est votre soirée !</p>

                                <!-- Les avantages -->
                                <h4 class="espaceenahut">Les avantages d'être finaliste</h4>
                                <p>Être finaliste au Gala Distinction Desjardins est une superbe carte de visite. Il s’agit d’une  reconnaissance concrète des intervenants économiques de la région du succès de l'entreprise. Mais c'est aussi un bel ajout au CV corporatif.</p>
                                <p>Depuis plus de 20 ans, la Chambre de commerce décerne ces prix aux entrepreneurs locaux. Ils sont donc nombreux à afficher fièrement le trophée reçu en reconnaissance de leurs efforts. Les succès de ces entrepreneurs sont reconnus chaque année devant plus de 400 personnalités d'affaires. Sans compter les clients et partenaires qui peuvent voir cette récompense lors de leur passage dans l'entreprise. Deux bonnes raisons de se dépasser chaque année et de présenter à nouveau, ou pour la première fois, sa candidature au Gala Distinction Desjardins.</p>
                                <p>Jusqu’à maintenant, le Gala a permis à près d’une centaine d’entreprises de se faire connaître par un vaste public. Cela représente une occasion incroyable de réseauter et de se faire reconnaître par le milieu des affaires.</p>
                                <p>Outre la visibilité offerte à même la soirée du Gala, vous profiterez d’une visibilité incomparable auprès des médias et du réseau de la Chambre. Ce placement médiatique équivaut à quelques milliers de dollars de publicité auprès de votre public cible.</p>
                                <p>De plus, être finaliste apporte une grande crédibilité à l'entreprise. Cette visibilité médiatique est donc appelée à perdurer, puisque les médias se tourneront vers des entreprises crédibles pour leurs différents dossiers par exemple. Les clients et partenaires seront aussi séduits par cette valeur ajoutée.</p>
                                <p>Être finaliste au Gala Distinction Desjardins apporte tant de retombées positives! Pourquoi attendre avant de déposer votre candidature pour la prochaine édition?</p>

                                 <!-- Édition en cours -->
                                <h4 class="espaceenahut">Gala Distinction Desjardins 2016</h4>
                                <p>Découvrez nos 4 finalistes pour le nom du prix Personnalité d'affaires féminine. Le nom choisi sera dévoilé en juin 2017. Un merci tout spécial aux familles de nos finalistes et à Madeleine Lacoursière de la Société d'histoire et de généalogie de Shawinigan qui ont contribué à la recherche et à la rédaction des biographies. Vous pouvez faire connaître votre choix par courriel à Martin St-Pierre, directeur général de la CCIS : <a href="mailto:martin@ccishawinigan.ca">martin@ccishawinigan.ca</a></p>
                            </div>

                            <!-- Section : Devenez membre -->
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-membre.png" alt="Devenez membre">
                            </div>
                                                        
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 devenezmembre">
                                <h4>DEVENEZ MEMBRE</h4>
                                <p class="espacebas">Être membre de la CCIS, c'est choisir de solidifier ses acquis en partageant votre expertise et celle d'autres membres tout en bénéficiant de plusieurs services vous donnant accès à une clientèle privilège.</p>
                                <a href="http://localhost:8000/travailfinal/index.php/devenir-membre/" id="moreinfo">En savoir plus</a>
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