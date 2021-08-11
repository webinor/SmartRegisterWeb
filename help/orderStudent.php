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
                    <h2 class="white-color" style="font-size: 30px;">Classer les élèves par ordre alphabétique</h2>
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
                    
                 
                    
                  <h3>Ajouter le nombre d'élèves</h3>
                    <br>
                    <ul>
                        <li> 
                            
                            <span class="tuto-text">1- Appuyer sur le "menu"</span>
                            
                            <div>
                                <img src="../images/tuto/addStudent1.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                           
                        </li>
                        
                        <br>
                        
                               <li>
                             
                             <span class="tuto-text">2- Appuyer sur "Mes élèves"</span>
                            
                             <div >
                                 <img  src="../images/tuto/addStudent2.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                
                                <li>
                             
                             <span class="tuto-text">3- Actuellement les élèves ne sont pas classés par ordre alphabétique. Appuyer sur "..."</span>
                            
                            <div>
                                <img src="../images/tuto/addStudent3.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                
                                  <li>
                             
                             <span class="tuto-text">4- Lorsque les options s'affichent, appuyez sur "..."</span>
                            
                            <div>
                                <img src="../images/tuto/addStudent3.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                
                                  <li>
                             
                                      <span class="tuto-text">5- Un menu s'affiche, vous indiquant de confirmer le reclassement, si vous voulez vraiment effectuer cette action, appuyez sur "..."</span><br>
                            
                            <div>
                                <img src="../images/tuto/addStudent4.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">6- A présent les élèves sont classés par ordre alphabétique "..."</span><br>
                            
                            <div>
                                <img src="../images/tuto/addStudent5.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                              
                                
                                
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
