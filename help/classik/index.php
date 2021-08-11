<?php


require '../../setting.php';

$dimension = 'width="80%" height="80%"';
 
 
 if( isset($_GET['regMod']) /*&& isset($_GET['appVer'])*/ && isset($_GET['lang']) /*&& isset($_GET['phnNum'])*/  ){
    
     
     $regMod  =  $_GET['regMod'];
    
    //$appVer  =  $_GET['appVer'];
    
    $lang  = $_GET['lang'];
    
    //$phnNum  = $_GET['phnNum'];
     
 //   echo $hote.'dashboard/lib/Hydrator.php';
    
    require root.'dashboard/lib/Hydrator.php';
    
       // require '../../dashboard/lib/Hydrator.php';
        require root.'dashboard/lib/DatabaseConnect.php';
        require root.'dsrc/Model/menu.php';
        require root.'dsrc/Model/menu_manager.php';
        
     
      $database_connector = new DatabaseConnect();
             
             
             $menu_manager = new Menu_manager($database_connector->GetInstance());
             
               $menu = new Menu(['register_model'=> ($regMod), 
                //   'app_version'=> ($appVer),
                 'lang'=>($lang)]);
             
               
               $result = $menu_manager->GetMenu($menu);
               
               $menu_list= array();
               
               foreach ($result as $res){
               
                   if( !array_key_exists ( $res["menu_name"] , $menu_list  )){
                       
                     $menu_list[$res["menu_name"]]= array();
                     
                        array_push($menu_list[$res["menu_name"]]  , ["action_name"=>$res["action_name"] , "link"=>$res["link"] , "register_model"=>$res["register_model"] ]  );  

                   
                   
               }
               else{
                   array_push($menu_list[$res["menu_name"]]  , ["action_name"=>$res["action_name"] , "link"=>$res["link"] , "register_model"=>$res["register_model"]]  );
               }
                   
               }
             
       /*      var_dump($menu_list);
     
     return 0;/**/
 }
 
 
 
 ?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <?php 
        
        if($_SERVER["SERVER_NAME"] != "127.0.0.1") { 

            include root.'google_analytics.php'; 
        
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
                    <h2 class="white-color" style="font-size: 30px;">Guides d'utilisation de Smart Register</h2>
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
                    
                    <h1>Selectionnez une rubrique</h1>
                    
                    <?php
                    
                    $i=0;
                    
                           foreach ($menu_list as $key => $menu){
                               
                               echo '<h3>'.($i+1).'- '.$key.'</h3>';
                                   
                                foreach ($menu_list[$key] as $i => $action){
                    
                                
                                        
                                     
                        echo  '<ul> 
                        <li>
                            <a href= "'.$action["link"].'.php?regMod='.$action["register_model"].'&lang=fr" class="read-more">'.$action["action_name"].'</a>
                        </li>
                        
                    </ul>';
                                         
                       
                     
                           }
                               
                           }
                    
                    
                    ?>
                    
                 <!--   <h3>2- Comment Gerer mes evaluations ?</h3>
                    
                     <ul> 
                         <li>
                            Ajouter une nouvelle fiche d'evaluation
                        </li>
                        
                        <li>
                            Ajouter une nouvelle fiche d'evaluation
                        </li>
                        
                         <li>
                            Modifier une fiche d'evaluation
                        </li>
                        
                        <li>
                            Effacer une fiche d'evaluation
                        </li>
                    </ul>-->
                    
                    
                </div>
               <!--   <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="<?= $hote ?>images/1935_view.jpg" alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags bases_algorithmes">Logiciel de Présentation Assistée par Ordinateur</div>
                                <div class="post-date">03/Fev/2020</div>
                            </div>
                            <h4 class="dark-color" >Guide d'utilisation de l'ancien modele de registre</h4>
                    
                       
                        <a href= "updated/" class="read-more">Acceder au guide</a></div>
                    </article>
                </div>

              <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="images/logiciels.png" alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags">Guide sur Les logiciels</div>
                                <div class="post-date">Indisponible</div>
                            </div>
                            <h4 class="dark-color">Démystifiez Les logiciels</h4>
                            
                        </div>
                    </article>
                </div>-->
                
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
