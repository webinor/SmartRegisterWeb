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
                    <h2 class="white-color" style="font-size: 30px;">Comment ajouter des élèves à mon registre ? ( Ajouter le nombre de lignes du registre )</h2>
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
                             
                             <span class="tuto-text">3- Appuyer sur "Ajouter", symbolise par le "+"</span>
                            
                            <div>
                                <img src="../images/tuto/addStudent3.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                  <li>
                             
                                      <span class="tuto-text">4- Appuyez sur la barre indigo pour changer le nombre d'élèves</span><br>
                            
                            <div>
                                <img src="../images/tuto/addStudent4.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">5- Après avoir sélectionné le nombre d'élèves souhaité ( 100 par exemple ), appuyez sur "Modifier"</span><br>
                            
                            <div>
                                <img src="../images/tuto/addStudent5.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                 <br>
                                
                                <li>
                             
                                      <span class="tuto-text">6- Vous avez à présent 100 élèves</span><br>
                            
                            <div>
                                <img src="../images/tuto/addStudent6.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">NB : La procédure est la meme pour réduire le nombre d'élèves</span><br>
                            
                          
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
