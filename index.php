<?php

//session_start();

require './setting.php';
require './dashboard/app_data/languages/fr.php';

/*
        require_once  './dashboard/lib/Hydrator.php';
        require './dashboard/lib/DatabaseConnect.php';
        require './dashboard/src/Model/customer_manager.php';
        
        
     
     try{
        
           //  $database_connector = new DatabaseConnect();
             
                       
      
                                    
            //      $customer_mamager = new Customer_manager($database_connector->GetInstance()) ;
                  
              //    $customer_list = $customer_mamager->Count_customer();
                  
                  
               
               
        
       }   
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arr�te tout
	
        die('Erreur : '.$e->getMessage());
        
         return false ;
}

*/

 
 ?>
<!doctype html>
<html class="no-js" lang="fr">

<?php  include root."include/mainHead.php"; ?>


<body data-spy="scroll" data-target=".mainmenu-area">
    <?php 
        
     if(@$_SERVER["HTTPS"] == "on") { 

          include 'share.php'; 
       } 
       
       ?>
        
        
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <!-- MainMenu-Area -->
    <?php 
        
       include 'pay_form.php';
        
            include 'nav.php'; 
        
       ?>
    <!-- MainMenu-Area-End -->
    


    
    <!-- Home-Area -->
    <header class="home-area overlay" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 hidden-sm col-md-5">
                    <figure class="mobile-image wow fadeInUp" data-wow-delay="0.2s">
                        
                         <?php
                
                if(isset($_GET['regMod']) && $_GET['regMod']=='ordinary'){
                    
                    echo '<img  src="images/header.png"   alt="header img">';
                    
                }
                else{
                    
                   echo '<img  src="images/header-mobilev2.png"   alt="header img">';
                    
                }
                    
                   ?> 
                        
                    </figure>
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="space-80 hidden-xs"></div>
                    <h1 class="wow fadeInUp" data-wow-delay="0.4s">Devenez numérique...</h1>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <h4>Grace à <strong>Smart Register</strong>, calculez les Totaux, Cotes, Moyennes et Statistiques de vos élèves en un temps record et dites adieu aux calculatrices.</h4>
                    </div>
                    <div class="space-20"></div>
                    <a href="https://bit.ly/2HdSvm5" id="download_header"  target="blank" class="benchmarck bttn-white wow fadeInUp sq" data-wow-delay="0.8s"><img src="images/play-store-icon.png" alt="Play Store Icon">Telecharger gratuitement</a>
             
             <!--       <a href="<?= $hote ?>#about_page" id="more_about_smart_register" class="benchmarck bttn-white wow fadeInUp sq" data-wow-delay="0.8s">Je veux en savoir plus</a>
              -->
                </div>
            </div>
        </div>
    </header>
    <!-- Home-Area-End -->
    <!-- About-Area -->
    <section class="section-padding" id="about_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <img src="images/about-logo.png" alt="About Logo">
                        <div class="space-20"></div>
                        <h5 class="title wow fadeInUp" data-wow-delay="0.4s">A propos de Smart Register</h5>
                        <div class="space-30"></div>
                        <h3 id="about" class="black-color wow fadeInUp benchmarck" data-wow-delay="0.6s">De nombreux enseignants utilisent encore des méthodes manuelles pour effectuer le calcul des notes et statistiques des élèves, ce qui engendre une perte de temps énorme. Avec Smart Register, fini les calculs manuels.</h3>
                    
                        <div class="space-40"></div>
                        <a href="https://bit.ly/2HdSvm5" id="download_from_about" target="blank" class="bttn-default mobile_css wow fadeInUp benchmarck" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">Télecharger maintenant</a>
                    </div>
                        
                    </div>
                </div>
            </div>
       
    </section>
    <!-- About-Area-End -->

       <!-- Feature-Area -->
    <section class="feature-area section-padding-top" id="features_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h5 class="title">Pourquoi utiliser Smart Register ?</h5>
                        <div class="space-10"></div>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-cog"></i>
                        </div>
                        <h4>Installation rapide</h4>
                        <p>Installez Smart Register en moins d'une minute.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <h4>Calculs Rapides &amp; Precis</h4>
                        <p>Epargnez-vous des heures de travail en calculant automatiquement les totaux, les moyennes, cotes, statistiques des filles, des garçons, de la classe.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-paperclip"></i>
                        </div>
                        <h4>Personnalisable</h4>
                        <p>Que vous ayez 5, 10, 15 compétences ou disciplines vous pouvez Ajoutez, modifiez et effacer autant de rubriques que vous souhaitez.</p>
                    </div>
                    
                    <div class="space-60"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4">
                    <figure class="mobile-image">
                        
                            <?php
                
                if(isset($_GET['regMod']) && $_GET['regMod']=='ordinary'){
                    
                    echo '<img  src="images/feature.png" alt="header img">';
                    
                }
                else{
                    
                   echo '<img src="images/skillv2.png" alt="Feature Photo">';
                    
                }
                    
                   ?> 
                        
                        
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-heart"></i>
                        </div>
                        <h4>Expérience agréable</h4>
                        <p>Vivez une expérience agréable lors de l'utilisation de Smart Register, que vous soyez dans l'ancien ou le nouveau système d'évaluation.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-laptop-phone"></i>
                        </div>
                        <h4>Disponibilité hors connexion</h4>
                        <p>Meme si vous n'avez pas de connexion internet, vous pourrez effectuer vos calculs.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-cloud-download"></i>
                        </div>
                        <h4>Archivage facile </h4>
                        <p>Conserver une copie de vos précédentes évaluations et amenez la partout où vous allez.</p>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Progress-Area
    <section class="progress-area gray-bg" id="progress_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="page-title section-padding">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Smart Progress</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><?= $customer_list ?> nouveaux utilisateurs</h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <p>Tous les jours, vous etes de plus en plus nombreux à utiliser <strong>Smart Register</strong> pour simplifier votre travail quotidien.</p>
                        </div>
                        <div class="space-50"></div>
                        <a href="https://bit.ly/2HdSvm5" id="join" target="blank" class="bttn-default wow fadeInUp benchmarck" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">Je veux aussi utiliser Smart Register</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <figure class="mobile-image">
                        <img src="images/progress-phone.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Progress-Area-End -->
    <!-- Video-Area -->
    <section class="video-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="video-photo">
                        <img src="images/pexels-photo-301926.png" alt="teacher">
                        <a href="sample.mp4" class="popup video-button">
                            <img src="images/play-button.png" alt="button" id="play_button" class="benchmarck">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5 col-md-offset-1">
                    <div class="space-60 hidden visible-xs"></div>
                    <div class="page-title">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Smart Register en video</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">La meilleure application pour enseignants</h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        Que vous soyez dans l'ancien ou le nouveau système d'évaluation ou que vous ayez 20, 
                            40, 100 ou 150 élèves, Smart Register vous évite de pedre du temps dans des calculs fastidieux.
                        </div>
                        <div class="space-50"></div>
                        <a href="https://bit.ly/2HdSvm5" id="get_SR_from_in_motion" target="blank" class="benchmarck bttn-default mobile_css wow fadeInUp" data-wow-delay="0.8s">Telecharger maintenant</a>
                    
                     </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video-Area-End -->
 
    <!-- Gallery-Area -->
    <section class="gallery-area section-padding" id="gallery_page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 gallery-slider">
                    <div class="gallery-slide">
                        <div class="item"><img src="images/gallery-1.png" alt="gallery-1"></div>
                        <div class="item"><img src="images/gallery-6.png" alt="gallery-6"></div>
                       <!-- <div class="item"><img src="images/gallery-2.png" alt="gallery-2"></div>-->
                        <div class="item"><img src="images/gallery-3.png" alt="gallery-3"></div>
                        <div class="item"><img src="images/gallery-4.png" alt="gallery-4"></div>
                        <div class="item"><img src="images/gallery-5.png" alt="gallery-4"></div> 
                        <div class="item"><img src="images/gallery-1.png" alt="gallery-1"></div>
                        <div class="item"><img src="images/gallery-2.png" alt="gallery-2"></div>
                        <div class="item"><img src="images/gallery-3.png" alt="gallery-2"></div>
                        <div class="item"><img src="images/gallery-4.png" alt="gallery-4"></div>
                        <div class="item"><img src="images/gallery-1.png" alt="gallery-1"></div>
                        <div class="item"><img src="images/gallery-2.png" alt="gallery-2"></div>
                        <div class="item"><img src="images/gallery-3.png" alt="gallery-3"></div>
                        <div class="item"><img src="images/gallery-4.png" alt="gallery-4"></div>
                        <div class="item"><img src="images/gallery-5.png" alt="gallery-5"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-lg-3">
                    <div class="page-title">
                        <h5 class="white-color title wow fadeInUp" data-wow-delay="0.2s">Aperçu</h5>
                        <div class="space-10"></div>
                        <h3 class="white-color wow fadeInUp" data-wow-delay="0.4s">Smart Register en images</h3>
                    </div>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>Pas besoin d'être un(e) expert(e) en TIC pour utiliser Smart Register.</p>
                    </div>
                    <div class="space-50"></div>
                    <a href="https://bit.ly/2HdSvm5" id="get_SR_from_gallery"  target="blank" class="benchmarck bttn-white wow fadeInUp" data-wow-delay="0.8s"><img src="images/play-store-icon.png" alt="Play Store Icon">Telecharger  maintenant</a>
             
             <!--       <a href="https://bit.ly/2HdSvm5" id="get_SR_from_gallery" target="blank" class="benchmarck bttn-default mobile_css wow fadeInUp" data-wow-delay="0.8s">Telecharger  maintenant</a>
              -->  </div>
            </div>
        </div>
    </section>
    <!-- Gallery-Area-End -->
    
    <!-- How-To-Use 
    
    <!-- How-To-Use-End -->

    <!--Price-Area -->
  <?php  /**/  ?>
    <section class="section-padding price-area" id="price_page">
        <div class="container">
         <?php  if(isset($_GET['regMod']) ){/* ?> <div class="row">     
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">Nos forfaits</h5>
                        <h3 class="dark-color">L'activation de Smart Register se fait à l'aide un code dont les 
                                                                                   modalités sont indiquées à travers les forfaits ci-dessous
<!--( bénéficiez d'une remise de <strong>20%</strong> sur votre premier achat)-->.</h3>
                          <div class="space-60"></div>
                    </div>
                </div>
           </div> <?php   */  }  ?>
            
                
                <?php
                
                if(isset($_GET['regMod']) && $_GET['regMod']=='application'){
                
                    ?>
                    
            
              <!--    <div class="col-xs-12 col-sm-4 type" id="Professionel">
                    <div class="price-box">
                        <div class="price-header">
                            <div class="price-icon">
                                <span class="lnr lnr-diamond"></span>
                            </div>
                            <h4 class="upper">Forfait Complet</h4>
                        </div>
                        <div style="padding:40px 40px 0px 40px;">
                            <span style="border-bottom: 1px dotted #000;">Avec ce forfait, vous pourrez :</span> 
                        </div>
                        <div class="price-body">
                            <ol>
                                <li class="enable">Calculer le Total et la côte de chaque compétence</li>
                                <li class="enable">Calculer la Moyenne Générale et le Rang de chaque élève</li>
                                <li class="enable">Calculer les Statistiques de chaque compétence</li>
                                <li class="enable">Calculer les Statistiques générales de la classe</li>
                                <li class="enable">Transformer le registre en PDF</li>
                                <li class="enable">Gerer plusieurs classes</li>
                            </ol>
                        </div>
                        <div style="padding:0px 40px 40px 40px;">
                              <span style="border-bottom: 1px dotted #000;">Ce forfait coute :</span> 
                        </div>
                      
                        
                         <div class="price-rate">
                             <sup>Fcfa</sup> <span class="rate">499</span>
                        </div>
                        
                 
                        
                   
                              
                        <div class="price-footer">
                            <a href="<?php echo 'https://wa.me/237650910717?text='.((date('H')>5 && date('H')<15)?'Bonjour':'Bonsoir').', j’aimerai acheter un code d’activation pour le forfait *Complet* , puis-je vous envoyer les frais et avoir mon code ? Merci' ?>" id="subscribe_full" target="blank" class="benchmarck bttn-default mobile_css">Je veux ce Forfait</a>
                        </div>
                        
                     
                   
                   
                     
                    </div>
                    <div class="space-30 hidden visible-xs"></div>
                </div>-->
            
            
            <?php
                    
                    
                    ?>
               <div class="row">
                 <!-- </form>
                <form id="professionel">--> 
                    <div class="col-xs-12 col-sm-4 type" id="Professionel">
                    <div class="price-box">
                        <div class="price-header">
                            <div class="price-icon">
                                <span class="lnr lnr-diamond"></span>
                            </div>
                            <h4 class="upper">Forfait Complet</h4>
                        </div>
                        <div style="padding:40px 40px 0px 40px;">
                            <span style="border-bottom: 1px dotted #000;">Avec ce forfait, vous pourrez :</span> 
                        </div>
                        <div class="price-body">
                            <ol>
                                <li class="enable">Calculer le Total et la côte de chaque compétence</li>
                                <li class="enable">Calculer la Moyenne Générale et le Rang de chaque élève</li>
                                <li class="enable">Calculer les Statistiques de chaque compétence</li>
                                <li class="enable">Calculer les Statistiques générales de la classe</li>
                                <li class="enable">Transformer le registre en PDF</li>
                                <li class="enable">Gerer plusieurs classes</li>
                                <!--<li class="enable">Calculer les Synthèses trimestrielles ( de chaque élève et de la classe )</li>
                                <li class="enable">Calculer la Synthèse annuelle ( de chaque élève et de la classe )</li>-->
                            </ol>
                        </div>
                        <div style="padding:0px 40px 40px 40px;">
                              <span style="border-bottom: 1px dotted #000;">Ce forfait coute :</span> 
                        </div>
                      
                        
                         <div class="price-rate">
                             <sup>Fcfa</sup> <span class="rate">1499 / Trimestre</span>
                        </div>
                        
                   <!--     <div class="price-rate">
                            <sup>Fcfa</sup> <span class="rate">4999 </span>/ An
                        </div>-->
                        
                   
                              
                        <div class="price-footer">
                            <a href="<?php echo 'https://wa.me/237650910717?text='.((date('H')>5 && date('H')<15)?'Bonjour':'Bonsoir').', j’aimerai acheter un code d’activation pour le forfait *Complet* , puis-je vous envoyer les frais et avoir mon code ? Merci' ?>" id="subscribe_full" target="blank" class="benchmarck bttn-default mobile_css">Je veux ce Forfait</a>
                        </div>
                        
                     
                   
                   
                     
                    </div>
                    <div class="space-30 hidden visible-xs"></div>
                </div>
              <!--  </form> --> 
                
                
              
               <!--  </form>
                <form id="premium" >-->
                    <div class="col-xs-12 col-sm-4 type" id="Premium">
                    <div class="price-box">
                        <div class="price-header">
                            <div class="price-icon">
                                <span class="lnr lnr-license"></span>
                            </div>
                            <h4 class="upper">Forfait Moyen</h4>
                        </div>
                       <div style="padding:40px 40px 0px 40px;">
                            <span style="border-bottom: 1px dotted #000;">Avec ce forfait, vous pourrez :</span> 
                        </div>
                        <div class="price-body">
                            <ol>
                                <li class="enable">Calculer le Total et la côte de chaque compétence</li>
                                <li class="enable">Calculer la Moyenne Générale et le Rang de chaque élève</li>
                                <li class="enable">Calculer les Statistiques générales de la classe</li>
                                <li class="enable">Passer d'une feuille de calcul à une autre</li>
                            </ol>
                        </div>
                        <div style="padding:0px 40px 40px 40px;">
                              <span style="border-bottom: 1px dotted #000;">Ce forfait coute :</span> 
                        </div>
                         <div class="price-rate">
                            <sup>Fcfa</sup> <span class="rate">999  / Trimestre</span>
                        </div>
                        
                     
                       
                        <div class="price-footer">
                            <a  href="<?php echo 'https://wa.me/237650910717?text='.((date('H')>5 && date('H')<15)?'Bonjour':'Bonsoir').', j’aimerai acheter un code d’activation pour le forfait *Moyen* , puis-je vous envoyer les frais et avoir mon code ? Merci' ?>" id="subscribe_medium" target="blank" class="benchmarck bttn-default mobile_css">Je veux ce Forfait</a>
                        </div>
                        
                   
                 
                     
                    </div>
                    <div class="space-30 hidden visible-xs"></div>
                </div>
               
               
                     <!--   <form>-->
                    <div class="col-xs-12 col-sm-4 type" id="Basique" >
                    <div class="price-box">
                        <div class="price-header">
                            <div class="price-icon">
                                <span class="lnr lnr-gift"></span>
                            </div>
                            <h4 class="upper">Forfait Basique</h4>
                        </div>
                        <div style="padding:40px 40px 0px 40px;">
                            <span style="border-bottom: 1px dotted #000;">Avec ce forfait, vous pourrez :</span> 
                        </div>
                        <div class="price-body">
                            <ol>
                                <li class="enable">Calculer le Total et la côte de chaque compétence</li>
                                <li class="enable">Calculer la Moyenne Générale et le Rang de chaque élève</li>
                                <li class="enable">Passer d'une feuille de calcul à une autre</li>
                            </ol>
                        </div>
                        <div style="padding:0px 40px 40px 40px;">
                            <span style="border-bottom: 1px dotted #000;">Ce forfait coute :</span> 
                        </div>
                        <div class="price-rate">
                            <sup>Fcfa</sup> <span class="rate">0 </span><!--/ 60 Jours  -->
                            
                        </div>
                        
                   <!--     <div class="price-rate">
                            <sup>Fcfa</sup> <span class="rate">2999 </span>/ An
                        </div>-->
                   
                   
                                         
                        <div class="price-footer">
                            <a href="<?php echo 'https://wa.me/237650910717?text='.((date('H')>5 && date('H')<15)?'Bonjour':'Bonsoir').', j’aimerai acheter un code d’activation pour le forfait *Basique* , puis-je vous envoyer les frais et avoir mon code ? Merci' ?>" id="subscribe_basik" target="blank" class="benchmarck bttn-default mobile_css">Je veux ce Forfait</a>
                        </div>
                        
                  
                   
                     
                        
                    </div>
                    <div class="space-30 hidden visible-xs"></div>
                </div>    
                     
                    
                     
            </div> 
            
                 <?php   
           /*    */
                 
                }
                
                else{
                    
                 }
                
                ?>
               
            
            <div class="space-60"></div>
              <?php  if(isset($_GET['regMod']) ){/* ?>   <div class="page-title text-center">
                
                    <a href="<?= $hote ?>#questions_page" id="more_about_subscriptions" class="bttn-default mobile_css benchmarck" >En savoir plus concernant les forfaits </a>
                   
        <!--          <h3><strong> <a href="<?= $hote ?>#questions_page" id="more_about_subscriptions" class="benchmarck " style="color: #000;font-style: italic;border-bottom: 1px dotted #000;">Cliquez ici pour en savoir plus concernant les forfaits </a></strong>
</h3>    -->     
              </div>  <?php  */} ?> 
           
            
        </div>
   </section> 
    <!--Price-Area-End -->
               
        <!--Questions-Area--> 
    <section id="questions_page" class="questions-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">FAQ</h5>
                        <h3 class="dark-color">Questions Fréquemment posées</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="toggole-boxs">
                        
                       <?php  if(isset($_GET['regMod'])){  ?>
                        <h3 id="Question3" class="benchmarck ">Comment acheter un code d'activation ? </h3>
                        <div>
                            <p>L'achat d'un code d'activatiion se fait via <strong>MTN Mobile Money</strong> ou via <strong>ORANGE Money</strong> à l'un des numéros suivant <strong>650910717</strong> / <strong>698935093</strong>.</p>
                        </div>
                       <?php   } ?>
                        <h3 id="Question2" class="benchmarck ">Quelle différence entre les trois Forfaits ? </h3>
                        <div>
                            <p>La différence majeure entre les forfaits réside dans les opérations qu'ils nous permettent d'effectuer dans l'application. Par exemple le Forfait 
                            Complet nous permettra d'imprimer notre registre tandis que le forfait Basique ne le permet pas et donc avec le forfait basique, je devrai encore recopier manuellement les notes dans le registre après avoir calculé 
                            les notes des élèves
                            </p>
                        </div>

                        <h3 id="Question1" class="benchmarck ">Comment choisir un forfait d'activation ? </h3>
                        <div>
                            <p>Un forfait se choisit en fonction du confort que vous souhaitez avoir. Par exemple si vous souhaitez :
                            <ol>
                                <li class="enable">Ne plus calculer manuellement les totaux, les cotes et les moyennes des élèves</li>
                                <li class="enable">Ne souhaitez plus remplir le registre manuellement</li>
                                <li class="enable">Ne plus calculer la synthèse trimestrielle manuellement</li>
                            </ol>
                          alors le forfait <strong>Complet</strong> est convenable  <!--<strong>499 Fcfa pour activer mon registre</strong>une (01) évaluation</strong> ou <strong>999 Fcfa pour trois (03) évaluations</strong> ou encore <strong>2499 Fcfa pour neufs (09) évaluations</strong>-->
                            </p>
                        </div>
                        
                        
                       
                       
                        
                    </div>
                </div>
                                
                <div class="col-xs-12 col-sm-6">
                    <div class="space-20 hidden visible-xs"></div>
                    <div class="toggole-boxs">
                      <!--  <h3 id="Question4" class="benchmarck ">Quelle est la durée d'un code d'activation ? </h3>
                        <div>
                            <p>La durée de validité d'un code d'activation varie de 1 à 8 Evaluations. Les modalités indiquées dans chacun des forfaits ci dessus correspondent à une Evaluation. Si vous souhaitez que votre code ai une validité de 2 Evaluations, alors vous faites le prix d'une évaluation multiplié par 2.</p>
                        </div>-->
                      <?php  if(isset($_GET['regMod'])){  ?>
                      <h3 id="Question6" class="benchmarck ">Peut-on acheter un code d'activation avec un numéro de téléphone différent de celui avec lequel on s'est inscrit sur Smart Register ?</h3>
                        <div>
                            <p>Oui, cela ne pose aucun problème</p>
                        </div>
                      <?php  }  ?>
                         <h3 id="Question5" class="benchmarck ">Peut-on utiliser Smart Register si l'on est dans l'ancien système d'evaluation ? </h3>
                        <div>
                            <p>Oui, après avoir installé l'application, lorsque l'application nous invite à choisir notre système d'évaluation, il suffit de sélectionner "Ancien système d'évaluation" au lieu de "Nouveau système d'évaluation"</p>
                        </div>
                        
                        <h3 id="Question7" class="benchmarck ">Est ce que Smart Register remplace mon registre physique ? </h3>
                        <div>
                            <p>Absolument pas, Smart Register vous facilite les calculs et donc permet de remplir votre registre physique encore plus rapidement</p>
                        </div>
                    </div>
                </div>
                
                                
            </div>
        </div>
    </section>
    <!--Questions-Area-End -->

    <!-- Testimonial-Area -->
   <section class="testimonial-area" id="testimonial_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">Notre Equipe</h5>
                        <h3 class="dark-color">Une équipe dynamique et passionnée</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="team-slide">
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/team-1.jpg" alt="">
                            </div>
                            <h4>Marcel KENGNE</h4>
                            <h6 class="position">CEO</h6>
                            <p>Entrepreneur et veritable addict d'innovation, des nouvelles technologies et amateur de tourisme.</p>
                        </div>
                        <!----><div class="team-box">
                            <div class="team-image">
                                <img src="images/team-2.jpg" alt="">
                            </div>
                            <h4>Albert WAKAM</h4>
                            <h6 class="position">COO</h6>
                            <p>Entrepreneur, Physicien hors pair, passionné de lecture et de développement personnel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial-Area-End -->

    <!-- Download-Area -->
    <div class="download-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 hidden-sm">
                    <figure class="mobile-image">
                        <img src="images/download-image2.png" alt="download">
                    </figure>
                </div>
                <div class="col-xs-12 col-md-6 section-padding">
                    <h3 class="white-color">Telecharger Smart Register</h3>
                    <div class="space-20"></div>
                    <p>Téléchargez Smart Register et rejoignez la plus grande plate-forme des enseignants.</p>
                    <div class="space-60"></div>
                    <!--<a href="#" class="bttn-white sq"><img src="images/apple-icon.png" alt="apple icon"> Apple Store</a>-->
                    <a href="https://bit.ly/2HdSvm5" target="blank" id="get_SR_join_community" class="benchmarck bttn-white  wow fadeInUp" data-wow-delay="0.8s"><i class="lnr lnr-download"></i>Telecharger gratuitement</a>

                    </div>
            </div>
        </div>
    </div>
    <!-- Download-Area-End -->

    
  
    <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Contactez nous</h5>
                            <h3 class="dark-color">Contactez nous</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p>Cameroun <br>Douala, Bonamoussadi</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                             </p> 
                            <p><a style="border-bottom: 1px dotted #000;" href="<?php echo 'https://wa.me/237650910717?' ?>" id="get_contact_whatsapp" target="blank" class="benchmarck">+237 650910717</a>
                      <img src="images/whatsapp.png" alt="Whatsapp Icon"> <br />
                      <a style="border-bottom: 1px dotted #000;" id="get_contact_mtn" class="benchmarck" href="tel:+237650910717">+237 650910717</a><img src="images/unnamed.png" alt="phone icon"> <br />
                      <a style="border-bottom: 1px dotted #000;" id="get_contact_orange" class="benchmarck" href="tel:+237691504990">+237 691504990</a> <img src="images/unnamed.png" alt="phone Icon"></p>
                            
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p>thedigitspace@gmail.com <br />
                            </p>
                            <p><a style="border-bottom: 1px dotted #000;" href="<?php echo 'https://facebook.com/SmartRegister' ?>" id="get_facebook_page" target="blank" class="benchmarck"><img width="30" height="30" src="images/facebook.png" alt="Whatsapp Icon"></a>
                          
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
   <!-- <script src="js/vendor/jquery-ui.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    Plugin-JS
    <script src="js/owl.carousel.min.js"></script>-->
    <!--<script src="js/contact-form.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/scrollUp.min.js"></script>-->
    <!--<script src="js/magnific-popup.min.js"></script>-->
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
    <!--<script src="js/payment.js"></script>-->

   
</body>

</html>
