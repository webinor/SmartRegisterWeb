<?php
session_start();

require '../../setting.php';

$first_name='';

 if(isset($_SESSION['first_name'])){
     
    $first_name=$_SESSION['first_name'];
     
 }


 
 
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
                    <h2 class="white-color" style="font-size: 30px;">Comment introduire les notes dans Smart Register ?</h2>
                    <ul class="breadcrumb">
                        <li><a href="<?= $hote ?>">Accueil</a></li>
                        <li>Guide</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="section-padding">
        <div class="container">
           
            <div class="row tuto-text">
               
                <div>
                    
                    <p><?php echo (date('H')>5 && date('H')<15)?'Bonjour':'Bonsoir' ?> collègue, dans ce guide, nous comment introduire les notes des élèves. C'est parti !</p>
                    <br>
                    
                    <ol>
                        
                        <li>Pre-requis</li>
                        <li>Presentation d'une feuille d'evaluation</li>
                        <li>Les differents modes d'affichage</li>
                        <li>Comment inserer une note ?</li>
                        <li>Exemples de fiche entierement remplie</li>
                        <li>Bonus</li>
                        
                    </ol>
                    
                    
                    <h3>1- Pre-requis</h3>
                    
                    <p>Avant de continuer la lecture de ce guide, vous devez etre familier avec les notions suivantes. </p>
                    
                    <ul>
                        <li>Definir les filles et les garcons</li>
                        <li>Definir un taille de registre</li>
                        <li>creer une feuille d'evaluation</li>
                    </ul>
                        
                    
                     <h3>3- Comment se presentate une feuille d'evaluation ?</h3>
                    
                    
                    <ul>
                         <li>
                             
                                   <span class="tuto-text">Lorsque vous ouvrez le menu "Mes evaluation", vous verez :</span><br>
                                     <div >
                                 <img src="<?= $hote ?>images/tuto/addGrade.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                                   <ol>
                                       <li> Palier en cours</li>
                                       <li> Evaluation en cours</li>
                                       <li> Boutton permettant d'ouvrir le menu</li>
                                       <li> Evaluation en cours ( <a class="link_dotted" href="<?php echo $hote.'help/updated/pdfCreate.php?phnNum='.(isset($_GET['phnNum']) ? $_GET['phnNum'] : '0').'&lang='.(isset($_GET['lang']) ? $_GET['lang'] : 'fr') ?>" target="blank" >Comment changer de feuille d'evaluation</a> </li> )</li>
                                       <li> Discipline en cours<a class="link_dotted" href="<?php echo $hote.'help/updated/pdfCreate.php?phnNum='.(isset($_GET['phnNum']) ? $_GET['phnNum'] : '0').'&lang='.(isset($_GET['lang']) ? $_GET['lang'] : 'fr') ?>" target="blank" >Comment changer de discipline</a> </li>   
                                       <li><a class="link_dotted" href="<?php echo $hote.'help/updated/pdfCreate.php?phnNum='.(isset($_GET['phnNum']) ? $_GET['phnNum'] : '0').'&lang='.(isset($_GET['lang']) ? $_GET['lang'] : 'fr') ?>" target="blank" >En savoir plus</a> </li>
                                       <li>Evaluation en "Oral", "Ecrit", "Pratique" et "savoir etre" en Francais</li>
                                       <li>"Total", et "Cote" en Francais</li>
                                       <li>Numero de table, ici c'est l'eleve numero "1". qui est un garcon ()<a class="link_dotted" href="<?php echo $hote.'help/updated/pdfCreate.php?phnNum='.(isset($_GET['phnNum']) ? $_GET['phnNum'] : '0').'&lang='.(isset($_GET['lang']) ? $_GET['lang'] : 'fr') ?>" target="blank" >En savoir plus sur comment indiquer les garcins et les filles</a> </li>
                                       <li>Zone de saisie permettant d'introduire respectivement les notes en "Oral", "Ecrit", "Pratique" et "savoir etre"</li>
                                       <li>Zone de saisie permettant d'introduire la note globale en Francais.</li>
                                       <li>Boutton permettant d'effectuer les calculs.</li>
                                       <li>Boutton permettant de revenir à l'accueil.</li>
                    
                    </ol>
                                   
                           
                                </li>
                                
                            
                                 <li>
                             
                                   <span class="tuto-text">Pour inserer une note :</span><br>
                                     <div >
                                 <img src="<?= $hote ?>images/tuto/addGrade_2.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                                   <ol>
                                       <li> Appuyer sur la case dans laquelle vous souhaitez introduire une note. </li>
                                       <li> Lorsque le clavier apparaitra, vous serez invite(e) à introduire un nombre </li>
                                       <li> Lorsque c'est fait, passez à la case suivante </li>
                                       <li> Vous avez la possibilite d'introduire directement la note globale en Francais dans la colone Total, l'application pourra alors repartir automatiquement entre les differentes rubriques  </li>
                                       <li> Pour remplir les notes d'une autre discipline, appuyez sur la barre deroulante et selectionnez la discipline souhaitée</li>
                                       <li>Pour remplir les notes d'une autre evaluation, appuyez sur la barre deroulante et selectionnez la fiche souhaitée</li>
                    
                    </ol>
                                   
                           
                                </li>
                    </ul>
                    
                     <h3>3- Comment inserer une note ?</h3>
                     
                     <ul>
                        
                                <li>
                             
                                   <span class="tuto-text">Lorsque vous appuyez sur le menu en haut à droite :</span><br>
                                     <div >
                                 <img src="<?= $hote ?>images/tuto/addGrade_2.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                                   <ol>
                                       <li> Affiche la liste des discipline de l'évaluation en cours <a class="link_dotted" href="<?php echo $hote.'help/updated/pdfCreate.php?phnNum='.(isset($_GET['phnNum']) ? $_GET['phnNum'] : '0').'&lang='.(isset($_GET['lang']) ? $_GET['lang'] : 'fr') ?>" target="blank" >Comment ajouter un discipline ?</a> </li>
                                       <li> Enregistre le notres en pdf pour pouvoir les imprimer <a class="link_dotted" href="<?php echo $hote.'help/updated/pdfCreate.php?phnNum='.(isset($_GET['phnNum']) ? $_GET['phnNum'] : '0').'&lang='.(isset($_GET['lang']) ? $_GET['lang'] : 'fr') ?>" target="blank" >Comment enregistrer les notes en PDF ?</a> </li>
                                       <li> Affiche les differentes fiches d'evaluation du palier en cours <a class="link_dotted" href="<?php echo $hote.'help/updated/pdfCreate.php?phnNum='.(isset($_GET['phnNum']) ? $_GET['phnNum'] : '0').'&lang='.(isset($_GET['lang']) ? $_GET['lang'] : 'fr') ?>" target="blank" >Comment creer une fiche d'evaluation ?</a> </li>
                                       <li> Modifie l'affichage de discipline ( <a class="link_dotted" href="<?php echo $hote.'help/updated/pdfCreate.php?phnNum='.(isset($_GET['phnNum']) ? $_GET['phnNum'] : '0').'&lang='.(isset($_GET['lang']) ? $_GET['lang'] : 'fr') ?>" target="blank" >Comment modifier l'affichage ?</a> </li> )
                                       <li> Comment utiliser Smart Register</li>   
                                       <li>Permet de faire decouvrir Smart Register à d'autres enseignants</li>
                                       
                    
                    </ol>
                                   
                           
                                </li>
                                
                                 <li>
                             
                                   <span class="tuto-text">Pour inserer une note :</span><br>
                                     <div >
                                 <img src="<?= $hote ?>images/tuto/addGrade_2.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                                   <ol>
                                       <li> Appuyer sur la case dans laquelle vous souhaitez introduire une note. </li>
                                       <li> Lorsque le clavier apparaitra, vous serez invite(e) à introduire un nombre </li>
                                       <li> Lorsque c'est fait, passez à la case suivante </li>
                                       <li> Vous avez la possibilite d'introduire directement la note globale en Francais dans la colone Total, l'application pourra alors repartir automatiquement entre les differentes rubriques  </li>
                                       <li> Pour remplir les notes d'une autre discipline, appuyez sur la barre deroulante et selectionnez la discipline souhaitée</li>
                                       <li>Pour remplir les notes d'une autre evaluation, appuyez sur la barre deroulante et selectionnez la fiche souhaitée</li>
                    
                    </ol>
                                   
                           
                                </li>
                    </ul>
                     
                    <h3>4- Exemples de fiche entierement remplie</h3>
                    
                    <div >
                        <img src="<?= $hote ?>images/tuto/addGrade_2.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                    
                    
                   
                    
                    <h3>6- Bonus</h3>
                    
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
