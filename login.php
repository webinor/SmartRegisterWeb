<?php

session_start();

require './setting.php';


 if(isset($_SESSION['first_name'])){
     
    header("location:$hote");
     
 }

 
 ?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <?php 
        
        if($_SERVER["SERVER_NAME"] != "127.0.0.1") { 

            include 'google_analytics.php'; 
        
       } ?>
    <meta charset="utf-8">
    <meta name="author" content="Digit Space">
    <meta name="description" content="Enseignant(e) du primaire, effectuez le calcul des totaux, moyennes et rangs des élèves en un clic.">
    <meta property="og:url"           content="http://register.digit-space.com/" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Smart Register" />
        <meta property="og:description"   content="Enseignant(e) du primaire, effectuez le calcul des totaux, moyennes et rangs des élèves en un clic." />
        <meta property="og:image"         content="<?= $hote ?>images/favicon.png" />
    
    <meta name="keywords" content="totaux, moyennes, rang, statistiques, enseignants, écoles primaire, tic, outil informatique, enseignants numériques">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Smart Register</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.png" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  
        
        
            
            <?php 
        
        if($_SERVER["SERVER_NAME"] != "127.0.0.1") { 

          include './pixel_facebook.php'; 
       } 
       
       ?>
        
    
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    
     <?php 
        
        
            include 'share.php'; 
        
       ?>
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <!-- MainMenu-Area -->
    <?php 
        
        
            include 'nav.php'; 
        
       ?>
    <!-- MainMenu-Area-End -->

    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="white-color">Connectez vous pour pouvoir télécharger les supports de cours.</h2>
                    <ul class="breadcrumb">
                        <li><a href="<?= $hote ?>">Accueil</a></li>
                        <li>connexion</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="section-padding">
        <div class="container">
           
            <div class="row">
             
      
      <div class="col-lg-5">
        <form id="login_form" >
            
            
            
          
            <div class="form-group">
            <label for="contact" class="control-label">Numéro de téléphone :</label><!---->
            <input type="number"  name="contact" class="form-control  must_be_validated" id="contact" placeholder="Votre Numéro de téléphone( 6XXXXXXXX )" required="required">
            <span  class="help-block hidden">Numéro de téléphone incorrect.</span>
          </div>
            
             <div class="form-group">
            <label for="password" class="control-label">Mot de passe :</label><!---->
            <input type="password" name="password" class="form-control must_be_validated"  id="password" placeholder="Votre mot de passe" required="required">
            <span  class="help-block hidden ">Saisissez votre Mot de passe</span>
          </div>
             
            
            <div class="">
        <button id="signin" type="button" class="btn btn-primary">Se connecter</button>
      </div>
            <div class=" col-sm-12 ">
        <div id="loader_connect" class=" center-block" style=""></div>
    </div>
        </form>
            <div class="separator">
                <p class="change_lin">Vous n'avez pas de compte ?
                    <a href="signup" class="to_regist" style="color: lightsalmon;">Créer un compte</a>
                </p>

               
              </div>
      </div>
      

            </div>
            
        </div>
    </div>
 
    <!-- Footer-Area -->
    <?php 
        
        
            include 'footer.php'; 
        
       ?>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/jquery-ui.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <!--<script src="js/contact-form.js"></script>-->
    <script src="js/ajaxchimp.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
    <script src="js/count.min.js"></script>
    <script src="js/payment.min.js"></script>
</body>

</html>
