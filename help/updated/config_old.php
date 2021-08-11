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
                                <img src="<?= $hote ?>images/tuto/config1.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                           
                        </li>
                        
                        <br>
                        
                               <li>
                             
                                   <span class="tuto-text">2- Le panneau de couleur blanche ci-dessous représente le menu, c'est à partir de ce dernier que nous avons accès aux autres pages</span><br>
                                   
                                   <ul>
                                       <li>2-a "mes compositions" : est la page permettant d'ajouter de nouvelle fiches de composition afin d'insérer les notes d'une nouvelle évaluation</li>
                                       <li>2-b "Changer de feuille" : Permet de passer d'une fiche de composition à une autre</li>
                                       <li>2-c "Mes compétences" : Permet d'ajouter, modifier ou effacer une competence.</li>
                                       <li>2-d "Mes élèves" : c'est ici que nous pouvons augmenter ou reduire les lignes du registre, nous pouvons également definir les garçons et les filles ( très utilie pour les statistiques ) </li>
                                       <li>2-e "Enregistrer les notes en PDF" : c'est ici que nous pouvons enregistrer la feuille de composition courante en PDF afin d'imprimer pour ne plus avoir à recopier les notes mannuellement dans le registre</li>
                                       <li>2-f "Activer mon registre" : ici nous pouvons souscrire à un forfait afin de pouvoir utiliser Smart Register </li>
                                       <li>2-g "Comment utiliser Smart Register" : ici nous pouvons obtenir de l'aide sur l'utilisation de Smart Register"</li>
                                   </ul>
                                   
                             <div >
                                 <img  src="<?= $hote ?>images/tuto/config2.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                
                                <li>
                             
                             <span class="tuto-text">3- Représente l'évaluation en cours</span>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config3.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                  <li>
                             
                                      <span class="tuto-text">4- Nom de l'application </span>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config4.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">5- Rubrique "Français". C'est dans cette rubrique que l'on saisira les notes correspondante</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config5.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">6- "e", "o", "p", "se" représentent respectivement les notes "Ecrites", "Orales", "Pratiques" et de "Savoir" etre en "Francais</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config6.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">7- "To" et "Co" représentent respectivement le total de point et la cote obtenus en "Francais</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config7.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">8- "15", "12", "0", "5" representent respectivement les notes maximales en "Ecrit", "Oral", "Pratique" et "Savoir-etre" de la competence "Francais". pour les modifier, appuyez sur ces dernieres ou allez dans la page "Mes competences"</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config8.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">9- "40" reperesente la note maximale de la compétence "Francais"</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config9.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">10- les numero 1,2,3,4,5,6,7,8,9... représentent les numéros de table des élèves de votre registre physique</span><br>
                                      <span class="tuto-text">La couleur bleu signifie que c'est un garcon et la couleur Rose indique une fille. Pour savoir comment definir les filles et les garcons,<a href="../updateStudent.php"> cliquez ici</a>  </span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config10.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">11-a représente la note ecrite en "Francais" de l'élève numero 1 </span><br>
                                      <span class="tuto-text">11-b représente la note en "savoir-etre" en "Francais" de l'élève numero 2</span><br>
                                      <span class="tuto-text">11-c représente la cote que l'élève numero 2 a obtenu en "Francais"</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config11.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">12- Ce bouton permet de calculer le bilan des notes actuellement présentes dans Smart Register</span><br>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/config12.jpg" <?= $dimension ?>  class="img-shadow" >
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











