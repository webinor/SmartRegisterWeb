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
                    <h2 class="white-color" style="font-size: 30px;">Creer un fichier PDF</h2>
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
           
            <div class="row tuto-text">
               
                <div>
                    
                    <p><?php echo (date('H')>5 && date('H')<15)?'Bonjour':'Bonsoir' ?> collègue, dans ce guide, nous verrons pas à pas la gestion de sa classe et ce qu'il est possible d'effectuer dans ce menu. C'est parti !</p>
                    <br>
                    
                    <ol>
                        
                        <li>A quoi sert le menu "Mes élève" ?</li>
                        <li>Quelles opérations peut on effectuer dans ce menu ?</li>
                        <li>Comment se présente le menu "Mes élève" ?</li>
                        <li>Bonus</li>
                        
                    </ol>
                    
                    
                    <h3>1- A quoi sert le menu "Mes élève" ?</h3>
                    
                    <p>Tout comme dans votre registre physique, vous avez un suivi des élèves via une liste avec les informations des differents élèves :</p>
                        
                    <ul>
                        <li>Noms & Prenoms</li>
                        <li>Date et lieux de naissance</li>
                        <li>Contacts des parents etc...</li>
                    </ul>
                    
                    
                    <h3>2- Quelles opérations peut on effectuer dans ce menu ?</h3>
                    
                    <div>
                        <p>Dans ce menu vous avez la possibilité de :</p>                    
                    <ul>
                        <li>Ajouter/Reduire le nombre de lignes du registre( chaque ligne represente un élève )</li>
                        <li>Transformer la liste en PDF afin de l'imprimer</li>
                        <li>Classer les élèves par ordre alphabetique</li>
                        <li>Définir les Garçons et les filles</li>
                    </ul>
                    
                </div>
                    
                    
                    <h3>3- Comment se présente le menu "Mes élève" ?</h3>
                    
                    
                    <ul>
                         <li>
                             
                                   <span class="tuto-text">Lorsque vous ouvrez le menu "Mes élève", vous apercevrez :</span><br>
                                     <div >
                                 <img src="<?= $hote ?>images/tuto/homeStudent.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                                   <ol>
                                       <li> Titre de la page</li>
                                       <li> Obtenir de l'aide</li>
                                       <li> Nombre de garçons inscrits</li>
                                       <li> Nombre de filles inscrites</li>
                                       <li> Nombre total d'élèves inscrits</li>
                                       <li> Colone pour definir les Noms et Prenoms </li>
                                       <li> Colone pour definir les Filles et les Garcons</li>
                                       <li> Revenir à l'accueil</li>
                                       <li> Parametres permettant d'ajouter/reduire le nombre d'élèves, classer par ordre alphabetique, enregistrer en PDF ( <a class="link_dotted" href="#" target="blank" >En savoir plus.</a> ) </li>
                                   </ol>
                                   
                           
                                </li>
                    </ul>
                    
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
