<?php
session_start();

require './setting.php';
require './dashboard/app_data/languages/fr.php';

$first_name='a';

 if(isset($_SESSION['first_name'])){
     
    $first_name=$_SESSION['first_name'];
     
 }
 
 
// echo 'fn = '.$first_name
 
 ?>

<!doctype html>
<html class="no-js" lang="zxx">

<?php  include root."include/mainHead.php"; ?>

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
                    <h2 class="white-color" style="font-size: 30px;">Guides sur les Technologies de l'Information et de la Communication</h2>
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
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="images/algorithme.jpg" alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags bases_algorithmes">Guide sur les algorithmes</div>
                                <div class="post-date">02/Mai/2021</div>
                            </div>
                            <h4 class="dark-color" >Apprenez les bases sur les algorithmes</h4>
                            <a href="guide/guide-algorithmes.pdf" class="read-more" id="bases_algo"  target="blank">Telecharger le guide</a>
                            
                         <!--   <a href= "<?php  /*echo $first_name!=''?'guide algorithmes.pdf':'login'  ;  ?>"  class="read-more" id="<?php  echo $first_name!=''?'bases_algo':'p' ; */?>" >Telecharger ce cours</a>
                       --> </div>
                    </article>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="images/1935_view.jpg" alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags bases_algorithmes">Présentation Assistée par Ordinateur</div>
                                <div class="post-date">03/Juin/2021</div>
                            </div>
                            <h4 class="dark-color" >Creer des diapositive a l'aide de PowerPoint</h4>
                            <a href="guide/creer-une-diapositive-PowerPoint.pdf" class="read-more" id="bases_algo" target="blank">Telecharger le guide</a>
                            
                        </div>
                    </article>
                </div>
                <!--width="323" height="156"-->
                 <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="images/Capture2-min.PNG"  alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags bases_algorithmes">Guide sur les logiciels</div>
                                <div class="post-date">01/Jul/2021</div>
                            </div>
                            <h4 class="dark-color" >Comprendre les logiciels</h4>
                            <a href="guide/Guide-logiciels.pdf" class="read-more" id="bases_algo" target="blank">Telecharger le guide</a>
                            
                        </div>
                    </article>
                </div>
                
                 <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="images/images.png"  alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags bases_algorithmes">Introduction à Zoom</div>
                                <div class="post-date">01/Jul/2021</div>
                            </div>
                            <h4 class="dark-color" >Installer et utiliser Zoom</h4>
                            <a href="guide/zoom-cloud.pdf" class="read-more" id="bases_algo" target="blank">Telecharger le guide</a>
                            
                        </div>
                    </article>
                </div>

              <!--  <div class="col-xs-12 col-sm-6 col-md-4">
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
        
        
            include 'footer.php'; 
        
       ?>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/jquery-ui.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
    <script src="js/count.min.js"></script>
</body>

</html>
