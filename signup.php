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
                    <h2 class="white-color">Inscrivez vous pour pouvoir télécharger les supports de cours.</h2>
                    <ul class="breadcrumb">
                        <li><a href="<?= $hote ?>">Accueil</a></li>
                        <li>Inscription</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="section-padding">
        <div class="container">
           
            <div class="row">
             
      
      <div class="col-lg-5">
        <form id="register_form" >
            
            
            
          <div class="form-group">
            <label for="first_name" class="control-label">Nom :</label><!---->
            <input type="text" name="first_name_" class="form-control must_be_validated"  id="f_name" placeholder="Votre Nom" required="required">
            <span  class="help-block hidden ">Le nom doit avoir au moins 3 lettres</span>
          </div>
            <div class="form-group">
            <label for="last_name" class="control-label">Prenom :</label><!---->
            <input type="text"  name="last_name" class="form-control  must_be_validated" id="l_name" placeholder="Votre Prenom" required="required">
          <span class="help-block hidden">Le prenom doit avoir au moins 3 lettres</span>
            </div>
              <div class="form-group">
            <label for="city" class="control-label">Ville :</label><!---->
            <input type="text"  name="city" class="form-control  must_be_validated" id="city" placeholder="Votre Ville" required="required">
            <span  class="help-block hidden ">La ville doit avoir au moins 3 lettres</span>
          </div>
            
            <div class="form-group">
                        <label class="control-label">Classe :</label>
                        <div class="">
                            <select id="level"  name="level" class="select2_group form-control  must_be_validated">
                            <optgroup label="Niveau 1">
                              <option value="sil">SIL</option>
                              <option value="cp">CP</option>
                            </optgroup>
                            <optgroup label="Niveau 2">
                              <option value="ce1">CE1</option>
                              <option value="ce2">CE2</option>
                            </optgroup>
                            <optgroup label="Niveau 3">
                              <option value="cm1">CM1</option>
                              <option value="cm2">CM2</option>
                            </optgroup>
                        </select>
                        </div>
                        <span  class="help-block hidden ">Vous devez indiquer votre classe</span>
                      </div>
            <div class="form-group">
            <label for="contact" class="control-label">Numéro de téléphone : </label><!---->
            <input type="number"  name="contact" class="form-control  must_be_validated" id="contact" placeholder="Votre Numéro de téléphone( 6XXXXXXXX )" required="required">
            <span  class="help-block hidden">Numéro de téléphone incorrect.</span>
          </div>
             
            
            <div class="">
        <button id="signup" type="button" class="btn btn-primary">S'inscrire</button>
      </div>
            <div class=" col-sm-12 ">
        <div id="loader_register" class="center-block" style=""></div>
    </div>
        </form>
          
           <div class="separator">
                <p class="change_lin">Vous avez deja un compte ?
                    <a href="login" class="to_regist" style="color: lightsalmon;">Me connecter </a>
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
