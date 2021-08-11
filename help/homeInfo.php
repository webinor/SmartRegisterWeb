<?php
//session_start();

require '../setting.php';

$dimension = 'width="80%" height="80%"';
 
 
 ?>

<!doctype html>
<html class="no-js" lang="zxx">

    <?php  include root."include/head.php"; ?>

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
                    <h2 class="white-color" style="font-size: 30px;">Gerer son profil</h2>
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
           
            <div class="row tuto-text">
               
                <div>
                    
                    <p><?php echo (date('H')>5 && date('H')<15)?'Bonjour':'Bonsoir' ?> collègue, dans ce guide, nous vous présenterons le menu "PROFIL" et ce qu'il est possible d'effectuer dans ce menu. C'est parti !</p>
                    <br>
                    
                    <ol>
                        
                        <li>A quoi sert le menu "Mon profil" ?</li>
                        <li>Comment se présente le menu "Mon profil" ?</li>
                        <li>Quelles opérations peut on effectuer dans ce menu ?</li>
                        <li>Bonus</li>
                        
                    </ol>
                    
                    
                    <h3>1- A quoi sert le menu "Mon profil" ?</h3>
                    
                    <p>Ce menu sert à enregistrer vos informations qui pourrons apparitre par exemple sur l'imprimé des notes des élèves. Par exemple</p>
                        
                    <ul>
                        <li>Noms & Prenoms</li>
                        <li>Classe tenue</li>
                        <li>Nom de l'etablissement etc...</li>
                    </ul>
                    
                    
                    <h3>2- Quelles opérations peut on effectuer dans ce menu ?</h3>
                    
                    <div>
                        <p>Dans ce menu vous avez la possibilité de :</p>                    
                    <ul>
                        <li>Modifier les informations mentionnées plus haut. <a class="link_dotted" href="#" target="blank" >En savoir plus sur comment modifier les informations.</a></li>
                    </ul>
                    
                </div>
                    
                    
                    <h3>3- Comment se présente le menu "Mon profil" ?</h3>
                    
                    
                    <ul>
                         <li>
                             
                                   <span class="tuto-text">le menu "Mon profil" se présente comme suit :</span><br>
                                     <div >
                                 <img src="<?= $hote ?>images/tuto/homeInfo.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                                   <ol>
                                       <li> Vos noms et prenom</li>
                                       <li> Votre sexe</li>
                                       <li> Region de residence</li>
                                       <li> Ville de residence</li>
                                       <li> Nom de l'établissement</li>
                                       <li> Classe actuelle tenue</li>
                                       </ol>
                                   
                           
                                </li>
                    </ul>
                    
                    <h3>4- Bonus</h3>
                    
                         <?php 
            include root."include/bonus.php"; 
       ?>  
             
               
                    
                </div>
               
                
            </div>
            
             <?php 
            include root."include/feedback_form.php"; 
       ?>  
            
        </div>
    </div>
 
    <!-- Footer-Area -->
    <?php 
        
            include root."footer.php"; 
        
        
            include root."include/scripts.php"; 
        
       ?>
</body>

</html>
