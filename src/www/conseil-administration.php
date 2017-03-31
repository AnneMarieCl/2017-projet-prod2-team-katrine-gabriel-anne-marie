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

            <!-- Section : Présentation de la chambre -->
            <section id="presentation-chambre">
                <div class="container-fluid">
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div id="margedroite" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>Conseil d'administration</h3>

                            </div>
                            <!-- Section : Devenez membre -->
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <img src="assets/images/avatar-membre.png" alt="Devenez membre">
                            </div>
                                                        
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 devenezmembre">
                                <h4>DEVENEZ MEMBRE</h4>
                                <p class="espacebas">Solidifiez vos acquis et accédez à une clientèle privilège!</p>
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