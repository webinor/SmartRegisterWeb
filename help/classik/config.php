<?php
//session_start();

require '../../setting.php';

$dimension = 'width="80%" height="80%"';
 
 
 ?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <?php 
        
        if($_SERVER["SERVER_NAME"] != "127.0.0.1") { 

         include root."google_analytics.php"; 
        
       } ?>
    <meta charset="utf-8">
    <meta name="author" content="Digit Space">
    <meta name="description" content="Enseignant(e) du primaire, effectuez le calcul des totaux, moyennes et rangs des élèves en un clic.">
    <meta property="og:url"           content="https://register.digit-space.com/" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Smart Register" />
        <meta property="og:description"   content="Enseignant(e) du primaire, effectuez le calcul des totaux, moyennes et rangs des élèves en un clic." />
        <meta property="og:image"         content="<?= $hote ?>images/favicon.png" />
    
    <meta name="keywords" content="aide totaux moyennes rang statistiques enseignants écoles primaire tic outil informatique enseignants numériques">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Smart Register</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="<?= $hote ?>images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="<?= $hote ?>images/favicon.png" />
    <!-- Plugin-CSS -->
    <style>
      
    </style>
    <link rel="stylesheet" href="<?= $hote ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $hote ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $hote ?>css/linearicons.css">
    <link rel="stylesheet" href="<?= $hote ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= $hote ?>css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?= $hote ?>css/normalize.css">
    <link rel="stylesheet" href="<?= $hote ?>style.css">
    <link rel="stylesheet" href="<?= $hote ?>css/responsive.css">
    <script src="<?= $hote ?>js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  
        
       
            
            <?php  
        
        if($_SERVER["SERVER_NAME"] != "127.0.0.1") { 

          include root."pixel_facebook.php"; 
       } 
       
       ?>
        
    
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    
     <?php 
        
        
            include root."share.php"; 
        
       ?>
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <!-- MainMenu-Area -->
    <?php 
        
        
            include root."nav.php"; 
        
       ?>
    <!-- MainMenu-Area-End -->

    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="white-color" style="font-size: 30px;">Se familiariser avec l'interface de Smart Register</h2>
                    <ul class="breadcrumb">
                        <li><a href="<?= $hote ?>">Accueil</a></li>
                        <li>Aide</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="section-padding">
        <div class="container">
           
            <div class="row">
               
                <div>
                    
                    <div>Cette section a pour but de vous apprendre à vous familiariser avec l'interface de Smart Register : Le menu, les rubriques et les icones  </div>
                    <br>
                    <ul>
                        <li> 
                            
                            <span class="tuto-text">1- Cette icone permet d'ouvrir le menu.</span>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config1c.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                           
                        </li>
                        
                        <br>
                        
                               <li>
                             
                                   <span class="tuto-text">2- Le panneau de couleur blanche ci dessous represente le menu, c'est à partie de ce dernier aue nous avons acces aux autres pages</span><br>
                                   
                                   <ul>
                                       <li>2-a "mes compositions" : est la page permettant d'ajouter de nouvelle fiche de composition afin d'inserer les notes d'une nouvelle evaluation</li>
                                       <li>2-b "Changer de feuille" : Permet de passer d'une fiche de composition à une autre</li>
                                       <li>2-c "Mes disciplines" : Permet d'ajouter, modifier ou effacer une ou plusieurs disciplines.</li>
                                       <li>2-d "Mes élèves" : c'est ici que nous pouvons augmenter ou reduire les lignes du registre, nous pouvons également definir les garçons et les filles ( tres utilie pour les statistiques ) </li>
                                       <li>2-e "Enregistrer les notes en PDF" : c'est ici que nous pouvons enregistrer la feuille de composition courante en PDF afin d'imprimer pour ne plus avoir à recopier les notes mannuellement dans le registre</li>
                                       <li>2-f "Modifier l'affichage" : ici nous pouvons passer à l'affichage trimestriel pour effectuer la synthese trimestrielle des notes deja calculées </li>
                                       <li>2-g "Activer mon registre" : ici nous pouvons souscrire à un forfait afin de pouvoir utiliser Smart Register </li>
                                       <li>2-h "Comment utiliser Smart Register" : ici nous pouvons obtenir de l'aide sur l'utilisation de Smart Register"</li>
                                   </ul>
                                   
                             <div >
                                 <img  src="<?= $hote ?>images/tuto/config2c.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                
                                <li>
                             
                             <span class="tuto-text">3- Représente l'évaluation en cours</span>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config3c.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                  <li>
                             
                                      <span class="tuto-text">4- Nom de l'application </span>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config4c.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">5- Rubriques "Mathématiques, Sciences Technologies, Sciences Humaines". C'est dans ces rubrique que l'on saisira les notes correspondantes</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config5c.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">6- "30","30","20","40","40","20" représentent respectivement les notes maximales ( modifiables ) en "Francais","Anglais", "Culture Nationale", "Mathematiques", "Sciences Technologies" et "Sciences Humaines"</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config6c.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">7- "300" et "20" représentent respectivement le total maximal de point et la moyenne de l'élève sur 20</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config7c.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">8- les numero 1,2,3,4,5,6,7,8,9... représentent les numéros de table des élèves de votre registre physique</span><br>
                                       <span class="tuto-text">La couleur bleu signifie que c'est un garçon et la couleur Rose indique une fille. Pour savoir comment definir les filles et les garcons,<a href="../updateStudent.php"> cliquez ici</a></span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config8c.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">9-a représente la note en "Francais" de l'élève numéro 2 </span><br>
                                       <span class="tuto-text">9-b représente la note en "Mathematiques" de l'élève numéro 3</span><br>
                                        <span class="tuto-text">9-c représente la note en "Sciences Humaines" de l'élève numéro 3</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config9c.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">10- Ce bouton permet de calculer le bilan des notes actuellement présentes dans Smart Register</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config10c.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                    </ul>
                    
                  
               
                    
                </div>
               
                
            </div>
            
        </div>
    </div>
 
    <!-- Footer-Area -->
    <?php 
        
        
            include root."footer.php"; 
        
       ?>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="<?= $hote ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= $hote ?>js/vendor/jquery-ui.js"></script>
    <script src="<?= $hote ?>js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="<?= $hote ?>js/owl.carousel.min.js"></script>
    <script src="<?= $hote ?>js/ajaxchimp.js"></script>
    <script src="<?= $hote ?>js/scrollUp.min.js"></script>
    <script src="<?= $hote ?>js/magnific-popup.min.js"></script>
    <script src="<?= $hote ?>js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="<?= $hote ?>js/main.js"></script>
    <script src="<?= $hote ?>js/count.min.js"></script>
</body>

</html>
