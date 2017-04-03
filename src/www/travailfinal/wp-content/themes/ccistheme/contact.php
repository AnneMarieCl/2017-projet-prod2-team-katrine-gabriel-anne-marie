        <?php get_header();?>

         <!--Image dans le header 
        <div class="background-img hidden-xs">
            <img class="img-responsive" src="assets/images/background-contact.jpg" alt="Contact">
            <h1>CONTACT</h1>
        </div>-->
        
        <!-- Main -->
        <main>

            <!-- Section : Espace membre  -->
            <section id="presentation-chambre" class="espace-membre">
                <div class="container-fluid">
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div id="margedroite" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>Contact</h3>
                                <!-- Formulaire avec le plug-in WP -->
                                <h4 class="espaceenahut">Demande d'information</h4>
                                <p>******AJOUTER LE PLUG-IN FORMULAIRE DE CONTACT (nom, courriel, tel, commentaire) ******</p>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginpadding">
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 marginpadding">
                                    <!-- Coordonnées -->
                                    <h4 class="espaceenahut">Nous joindre</h4>
                                    <p><b>1250, avenue de la Station, bureau 1-116</b></p>
                                    <p>Shawinigan (Québec)</p>
                                    <p>G9N 1W8</p>
                                    <p><b>819 536-0777</b></p>
                                    <p>819 536 0039</p>
                                    <p><a href="mailto:info@ccishawinigan.ca">info@ccishawinigan.ca</a></p>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 marginpadding">
                                    <!-- Question en particulier -->
                                    <h4 class="espaceenahut">Une question en particulier?</h4>

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 marginpadding">
                                        <p><b>Martin St-Pierre</b></p>
                                        <p>Directeur général</p>
                                        <p><a href="mailto:martin@ccishawinigan.ca">martin@ccishawinigan.ca</a></p>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 marginpadding">
                                        <p><b>Claudine Drolet</b></p>
                                        <p>Responsable des communications et des événements</p>
                                        <p><a href="mailto:claudine@ccishawinigan.ca">claudine@ccishawinigan.ca</a></p>
                                        </div>
                                    </div>
                                </div>


                                <!-- Intégration Google maps -->
                                <!-- LE FAIRE AVEC WORDPRESS!!!! https://wordpress.org/plugins/google-maps-builder/ -->
                                <iframe id="map" src="https://www.google.com/maps/d/embed?mid=1ncfaSiqE49ILDwXeuc_o5nxe08o"></iframe>
                            </div>
                        </div>

                        
                    </div>
                    
                    
                </div>
            </section>   
        </main>
        <!-- Fin du main -->

        <?php include'../includes/footer.php'; ?>

        <?php include'../includes/script.php'; ?>

    </body>
</html>
