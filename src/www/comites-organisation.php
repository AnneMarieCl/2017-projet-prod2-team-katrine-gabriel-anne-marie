<!DOCTYPE html>
<html lang="fr">
    <?php include'../includes/head.php'; ?>
    <body>
        
        <header>
            <?php include'../includes/nav.php'; ?>

            <!-- Image dans le header -->
            <div class="background-image hidden-xs">
                <img class="img-responsive" src="assets/images/background-header.jpg" alt="CCIS">
            </div>
        </header>

        <!-- Main -->
        <main>

            <!-- Section : Comites organisation -->
            <section id="presentation-chambre" class="comites">
                <div class="container-fluid">
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div id="margedroite" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>Les comités d'organisation</h3>

                                <!-- Programmation -->
                                <h4 class="espaceenahut">Programmation</h4>
                                <h5 class="format">Le comité de programmation</h5>
                                <p>Le comité de programmation produit annuellement le calendrier d’activités en fonction des besoins actuels de son bassin de membres.</p>
                                <p>(Réservé aux membres du <a href="conseil-administration.php">conseil d'administration</a>)</p>
                                <p>Nombre de rencontres annuelles  : 2 à 4 </p>

                                <!-- Gala Distinction Desjardins -->
                                <h4 class="espaceenahut">Gala Distinction Desjardins</h4>
                                <h5 class="format">Le comité de recrutement</h5>
                                <p>Le comité recrutement du Gala se rencontre en vue de cibler des candidatures potentielles dans les différentes catégories du Gala Distinction Desjardins. Le comité recrutement a pour objectif également de clarifier les candidatures reçues afin de faciliter le travail du jury qui aura à déterminer les gagnants.</p>
                                <p>(Ouvert à tous les <a href="espace-membre.php">membres</a>)</p>
                                <p>Nombre de rencontres annuelles : 4 à 6</p>

                                <h5 class="format">Le jury</h5>
                                <p>Le jury du Gala Distinction Desjardins est responsable du choix des finalistes et des gagnants dans chaque catégorie du Gala. Pour se faire, il travaille à partir des documents de candidature détaillés remplis par les candidats et des critères rigoureux établis par la CCIS.</p>
                                <p>(Sur invitation seulement)</p>
                                <p>Nombre de rencontres annuelles : 1 à 2</p>
                                <h5 class="format">Le comité organisateur</h5>

                                <p>Le Comité Organisateur du Gala se réunit en vue de produire l’événement et effectuer la mise en œuvre du calendrier de production établi. Parmi ses mandats, il doit notamment développer un axe de communication relié au contexte actuel de l’économie locale et assurer l’organisation (artistique, technique et logistique) du plus grand rendez-vous annuel des gens d’affaires de la CCIS.</p>

                                <p>(Ouvert à tous les <a href="espace-membre.php">membres</a>)</p>

                                <p>Nombre de rencontres annuelles : 7 à 10 </p>
                                
                                <!-- Toute la ville parle PME -->
                                <h4 class="espaceenahut">Toute la ville parle PME</h4>
                                <h5 class="format">Le comité Toute la ville parle PME</h5>
                                <p>Le Comité TLVP PME veille à l’organisation et à la mise en œuvre de l’événement du point de vue artistique, technique et logistique,  ainsi qu’à la sélection des entreprises interviewées et leurs entrepreneurs  lors de cette soirée.</p>
                                <p>(Ouvert à tous les <a href="espace-membre.php">membres</a>)</p>
                                <p>Nombre de rencontres annuelles : 4 à 7</p>

                                <!-- Cocktail des micros-->
                                <h4 class="espaceenahut">Cocktail des micros</h4>
                                <h5 class="format">Le comité Cocktail des micros</h5>
                                <p>Le comité CDM veille à l’organisation artistique, technique et logistique ainsi qu’à la sélection des exposants de cette soirée afin de s’assurer de faire vivre une soirée exceptionnelle à ses participants.</p>
                                <p>(Ouvert à tous les <a href="espace-membre.php">membres</a>)</p>
                                <p>Nombre de rencontres annuelles : 4 à 7</p>

                                <!-- Tournois de golf -->
                                <h4 class="espaceenahut">Tournois de golf</h4>
                                <p>Le comité du Tournoi de golf des gens d’affaires organise le financement de l’événement, l’animation sur le parcours ainsi que la soirée après golf (tirages, encans, souper).</p>
                                <p>(Ouvert à tous les <a href="espace-membre.php">membres</a>)</p>
                                <p>Nombre de rencontres annuelles : 4 à 7</p>
                            </div>
                            <!-- Section : Devenez membre -->
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <img src="assets/images/avatar-membre.png" alt="Devenez membre">
                            </div>
                                                        
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 devenezmembre">
                                <h4>DEVENEZ MEMBRE</h4>
                                <p class="espacebas">Être membre de la CCIS, c'est choisir de solidifier ses acquis en partageant votre expertise et celle d'autres membres tout en bénéficiant de plusieurs services vous donnant accès à une clientèle privilège.</p>
                                <a href="espace-membre.php" id="moreinfo">En savoir plus</a>
                            </div>
                        </div>
                        
                        <!-- Sidebar -->
                        <aside class="hidden-xs hidden-sm col-md-3 col-lg-3">
                            
                            <div class="row">
                                
                                <div id="sousnav" class="hidden-xs hidden-sm col-md-12 col-lg-12">
                                    <a href="ccis.php" class="text-right">Présentation de la chambre</a>
                                    <a href="conseil-administration.php" class="text-right">Conseil d'administration</a>
                                    <a href="comites-organisation.php" class="text-right">Les comités d'organisation</a>
                                    <a href="implications.php" class="text-right">Les implications</a>
                                </div>
                                
                            </div>
                            
                        </aside>
                        
                        
                    </div>
                    
                    
                </div>
            </section>   
        </main>
        <!-- Fin du main -->

        <?php include'../includes/footer.php'; ?>

        <?php include'../includes/script.php'; ?>

    </body>
</html>