<?php
session_start();

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
                    <h2 class="white-color" style="font-size: 30px;">Comment définir les filles et les garçons ?</h2>
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
                    
                 
                    
                  <h3>Définir les filles et les garçons</h3>
                  
                  <span class="tuto-text">Il est crucial de définir les filles et les garcons afin d'effectuer les statistiques des notes ainsi que des presences. Dans ce guide, nous vous montrerons pas à pas comment definir les les garcons et les filles dans Smart Register. c'est parti</span>
                  
                    <br>
                    <ul>
                        
                                 <br>
                        
                               <li>
                             
                             <span class="tuto-text">1- Appuyez sur ce menu deroulant, un menu s'affichera, vous invitant à choisir le sexe</span>
                            
                             <div >
                                 <img  src="../images/tuto/updateStudentGender1.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                
                                 <li>
                             
                             <span class="tuto-text">2- Indiquez le sexe de  l'élève</span>
                            
                             <div >
                                 <img  src="../images/tuto/updateStudentGender2.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                
                                <li>
                             
                             <span class="tuto-text">3- Lorsque vous avez defini un sexe, la couleur du numero de table changera en fonction du sexe choisi (Bleu pour les garçons et rose pour les filles)</span>
                            
                            <div>
                                <img src="../images/tuto/updateStudentGender3.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                
                                
                                
                                
                    </ul>
                    
                  
               
                    
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
