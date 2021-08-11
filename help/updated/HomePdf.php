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
                    <h2 class="white-color" style="font-size: 30px;">Gestion des fichier PDF</h2>
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
                    
                    <p><?php echo (date('H')>5 && date('H')<15)?'Bonjour':'Bonsoir' ?> collègue, dans ce guide, nous présenterons le menu qui permet de creer les différents fichier PDF qui seront imprimés afin de vous faire gagner du temps. C'est parti !</p>
                    <br>
                    
                    <ol>
                        
                        <li>A quoi sert l'enregistrement en PDF ?</li>
                        <li>Comment se présente le menu ?</li>
                        <li>Que peut-on enregistrer en PDF ?</li>
                        <li>Exemples de fichiers PDF</li>
                        <li>Bonus</li>
                        
                    </ol>
                    
                    
                    <h3>1- A quoi sert l'enregistrement en PDF ? ?</h3>
                    
                    <p>Très souvent, l'enseignant est amené à reporter manuellement les notes des élèves dans le registre physique ainsi que dans le carnet de correspondance, ce qui peut très vite 
                    devenir un travail fastidieux. pour eviter cela, grace à Smart Register, l'enseignant a la possibilité, après avoir introduit et calculé les notes des élève, de creer un fichier PDF qui contiendra les notes des élèves, ces notes peuvent etre ensuite imprimées sur papier physique ; ce processus permet de faire gagner un temps considérable à l'enseignant.
                    De plus en imprimant les notes, c'est plus lisible, le risque d'erreur est amoindri. </p>
                        
                    
                     <h3>3- Comment se présente le menu ?</h3>
                    
                    
                    <ul>
                         <li>
                             
                                   <span class="tuto-text">Lorsque vous appuyez sur "Enregistrer les notes en PDF", vous apercevrez :</span><br>
                                     <div >
                                 <img src="<?= $hote ?>images/tuto/homePdf.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                                   <ol>
                                       <li> Brève indication</li>
                                       <li> Obtenir de l'aide</li>
                                       <li> Bouton permettant d'enregistrer les notes en PDF</li>
                                       <li> Bouton permettant d'enregistrer les statistiques en PDF</li>
                                       <li> cases à cocher permettant de selectionner les disciplines à ressortir sur le ficher PDF ( ces cases à cocher ne concernent que la creation du fichier PDF des notes ). Lorsque vous souhaitez enregistrer les notes en PDF, 
                                       vous devez cocher dans un premier temps au plus 6 rubriques ( disciplines ) car au delà, toutes les rubriques ne ressortiront pas sur le fichier PDF. Il est donc conseillé de creer deux fichier PDF : un premier pour les 6 premières rubriques et un second pour le reste  <a class="link_dotted" href="#" target="blank" >En savoir plus</a> </li>
                                    </ol>
                                   
                           
                                </li>
                    </ul>
                    
                    <h3>2-Que peut-on enregistrer en PDF ?</h3>
                    
                    <div>
                        <p>Dans ce menu vous avez la possibilité d'enregistrer en PDF :</p>                    
                    <ul>
                        <li>Les notes des élèves <a class="link_dotted" href="#" target="blank" >En savoir plus.</a></li>
                        <li>Les statistiques telles que élèves admis, non admis, moyenne générale des garçons, filles, total etc... <a class="link_dotted" href="#" target="blank" >En savoir plus.</a></li>
                        <li>Les statistiques telles que le nombre d'élèves ayant eu la cote "Non acquis" , "En cours d'acquisition" etc... <a class="link_dotted" href="#" target="blank" >En savoir plus.</a></li>
                      </ul>
                    
                       
                </div>
                    
                    <h3>4- Exemples de fichier PDF</h3>
                    
                    <ul>
                        <li><a class="link_dotted" href="#" target="blank" >Exemple de notes en fichier PDF</a></li>
                        <li><a class="link_dotted" href="#" target="blank" >Exemple de statistiques en fichier PDF</a></li>
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
