<?php

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
                    <h2 class="white-color" style="font-size: 30px;">Effacer une discipline</h2>
                    <ul class="breadcrumb">
                        <li><a href="<?= $hote ?>">Accueil</a></li>
                        <li>supports de cours</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="section-padding">
        <div class="container">
           
            <div class="row">
               
                <div>
                    
                    <div>Cette section a pour but de vous apprendre à effacer des disciplines </div>
                    <br>
                    <ul>
                        <li> 
                            
                            <span class="tuto-text">1- appuyez sur le menu.</span>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/deleteSubject1.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                           
                        </li>
                        
                        <br>
                        <li> 
                            
                            <span class="tuto-text">2- appuyez sur "Mes disciplines".</span>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/deleteSubject2.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                           
                        </li>
                        
                        <br>
                        <li> 
                            
                            <span class="tuto-text">3- appuyez sur la discipline à Effacer pour derouler le menu.</span>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/deleteSubject3.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                           
                        </li>
                        
                        <br>
                        <li> 
                            
                            <span class="tuto-text">4- appuyez sur "Effacer".</span>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/deleteSubject4.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                           
                        </li>
                        
                        <br>
                        <li> 
                            
                            <span class="tuto-text">5- appuyez sur "Oui" pour confirmer.</span>
                            
                            <div>
                                <img src="<?= $hote ?>images/tuto/deleteSubject5.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                           
                        </li>
                        
                        <br>
                        
                    </ul>
                    
                     <br> <br>
                     
                     <h3>Autres rubriques d'aide</h3>
                     
                     <ul>
                         <li>
                             <a href="addSubject.php">Comment ajouter une discipline ?</a>  
                         </li>
                         
                         <li>
                             <a href="updateSubject.php">Comment modifier une discipline ?</a>  
                         </li>
                         
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
