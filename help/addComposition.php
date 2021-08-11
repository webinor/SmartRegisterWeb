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
                    <h2 class="white-color" style="font-size: 30px;">Comment ajouter une feuille d'evaluation ?</h2>
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
                    
                    <h3>Ajouter une feuille d'evaluation</h3>
                    <br>
                    <ul>
                        <li> 
                            
                            <span class="tuto-text">1- Appuyer sur le "menu"</span>
                            
                            <div>
                                <img src="../images/tuto/addComp1.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                           
                        </li>
                        
                        <br>
                        
                               <li>
                             
                             <span class="tuto-text">2- Appuyer sur mes compositions</span>
                            
                             <div >
                                 <img  src="../images/tuto/addComp2.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                
                                <li>
                             
                             <span class="tuto-text">3- Appuyer sur "Ajouter", symbolise par le "+"</span>
                            
                            <div>
                                <img src="../images/tuto/addComp3.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                <br>
                                  <li>
                             
                                      <span class="tuto-text">4- Saisir le nom de la composition ( Par exemple "Janvier" ou "Mensuel 4" )</span><br>
                             <span class="tuto-text">5- Indiquez le trimestre correspondant (Ceci sera utile pour effectuer la synthese trimestrielle</span><br>
                             <span class="tuto-text">6- Appuyer sur "enregistrer"</span>
                            
                            <div>
                                <img src="../images/tuto/addComp4.jpg" <?= $dimension ?>  class="img-shadow" >
                            </div>
                                </li>
                                
                                <br>
                                
                                <li>
                             
                                      <span class="tuto-text">7- La nouvelle fiche de composition a ete Ajoutee</span><br>
                            
                            <div>
                                <img src="../images/tuto/addComp5.jpg" <?= $dimension ?>  class="img-shadow" >
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
