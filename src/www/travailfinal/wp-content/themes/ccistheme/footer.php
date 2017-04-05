        <!-- Début du footer-->
        <footer>
            <!-- Première section du footer -->
            <section id="footer-un">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Logo de l'entreprise -->
                        <div id="img-footer" class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="Logo CCIS"></a>
                        </div>

                        <!-- Menu de navigation -->
                        <div id="footer-nav" class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menufooter',
                                    'menu_id'  => 'footer-menu',
                                    'container' => '', 
                                    'items_wrap' => '<ul id="footer-menu">%3$s</ul>',
                                ) );
                            ?>
                        </div>

                        <!-- Infolettre -->
                        <div id="infolettre" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <h5>INFOLETTRE</h5>
                            <p>Restez informés, inscrivez-vous à notre infolettre</p>
                            <form id="form-infolettre">
                                <input type="email" name="email" placeholder="ADRESSE COURRIEL"><br>
                                <input type="submit" name="submit" value="S'INSCRIRE">
                            </form>
                        </div>

                        <!-- Réseaux sociaux -->
                        <div id="reseaux-sociaux" class="col-xs-12 col-sm-3 col-md-3 col-lg-4">
                            <h5>SUIVEZ-NOUS SUR LES RÉSEAUX SOCIAUX</h5>
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menusocialfooter',
                                    'menu_id'  => 'footer-menu',
                                    'container' => '', 
                                    'items_wrap' => '<ul id="social">%3$s</ul>',
                                ) );
                            ?>
                            <!--<ul id="social">
                                <li><a href="https://www.facebook.com/CCIShawi" target="_blank"><span class="fa fa-facebook-square"></span></a></li>
                                <li><a href="https://www.linkedin.com/company/3266947?trk=tyah&trkInfo=tas%3AChambre%20de%20commerce%20et%20d%27industrie%20de%20Shawi" target="_blank"><span class="fa fa-linkedin-square"></span></a></li>
                                <li><a href="https://twitter.com/CCIShawinigan" target="_blank"><span class="fa fa-twitter-square"></span></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Deuxième section du footer -->
            <section id="footer-deux">
                <div class="container-fluid">
                    <div class="row">

                        <!-- Copyright -->
                        <div id="copyright" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h5>© 2017</h5>
                        </div>

                    </div>
                </div>
            </section>
        </footer>
        <!-- Fin du footer-->

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>