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
                    <h2 class="white-color" style="font-size: 30px;">Comment modifier le nom, la date de naissance, le contact des parents etc...</h2>
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
                    
                 
                    
                  <h3>Indiquer les informations sur les élèves</h3>
                  
                  <span class="tuto-text">Il est crucial de définir les filles et les garcons afin d'effectuer les statistiques des notes ainsi que des presences. Dans ce guide, nous vous montrerons pas à pas comment definir les les garcons et les filles dans Smart Register. c'est parti</span>
                  
                    <br>
                    <ul>
                        <li> 
                            
                            <span class="tuto-text">1-1 Cliquez à l'interieur du champ de saisie, le clavier apparaitra.</span>
                            
                            <div>
                                <img src="../images/tuto/updateStudent1-1.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                           
                        </li>
                        
                        <br>
                        
                               <li>
                             
                             <span class="tuto-text">1-2 Saisissez l'information souhaitée</span>
                            
                             <div >
                                 <img  src="../images/tuto/updateStudent1-2.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                 <br>
                        
                               <li>
                             
                             <span class="tuto-text">2- Allez à la colone suivant et repetez le meme processus pour chacun des élèves</span>
                            
                             <div >
                                 <img  src="../images/tuto/updateStudent2.jpg" <?= $dimension ?>  class="img-shadow" >
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
