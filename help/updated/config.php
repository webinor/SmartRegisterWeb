<?php
//session_start();

require '../../setting.php';


 
 
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
                    <h2 class="white-color" style="font-size: 30px;">Bienvenue dans Smart Register</h2>
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
                    
                    <p><?php echo (date('H')>5 && date('H')<15)?'Bonjour':'Bonsoir' ?> collègue, dans ce guide, nous vous présenterons l'application Smart Register, à quoi elle sert, pourquoi a t'elle été developpé et comment bien l'utiliser ? C'est parti </p>
                    <br>
                    
                    <ol>
                        <li>C'est quoi Smart Register ?</li>
                        <li>Pourquoi a t'elle été  developpée ?</li>
                        <li>Pour qui a t'elle été  developpée ?</li>
                        <li>Comment se présente Smart Register ?</li>
                        <li>Comment elle simplifie le travail ? ?</li>
                        <li>Comment l'utiliser efficacement  ?</li>
                        <li>Bonus : Quels sont les avantages dont bénéficient les utilisateurs de Smart Register ?</li>
                        
                    </ol>
                    
                    
                    <h3>1- C'est quoi Smart Register ?</h3>
                    
                    <p>Smart Register est une application mobile télechargeable sur play Store ( <a class="link_dotted" href="https://bit.ly/2HdSvm5" target="_blank">lien de téléchargement</a> ), qui permet aux enseignants des écoles primaires d'améliorer leur productivité.</p>
                    
                    <h3>2- Pourquoi avons-nous crée Smart Register ?</h3>
                    
                    <div>
                        <p>Smart Register a été cree dans le but de simplifier les taches répétitives éffectuées par les enseignant(e)s. En éffet, à cause d'un manque d'infrastrucutre informatique dans les établissmsnet primaires, de nombreux enseignants doivent effectuer mannuellement des taches telles que :</p>
                    
                    <ul>
                        <li>Calculer les notes de chaue eleve à la fin de l'evaluation</li>
                        <li>Calculer les statistiques de la classe</li>
                        <li>Calculer les performances par discipline</li>
                        <li>Reporter les notes dans le registre</li>
                        <li>Reporter les notes dans les carnets de correspondance etc...</li>
                    </ul>
                    
                        <p>ces taches sont extremement fastidieuses compte tenu du nombre d'évaluation et de l'éffectif pléthorique des salles de classe.</p>
                </div>
                    
                    <h3>3- Comment Smart Register simplifie le travail de l'enseignant ?</h3>
                
                    <p>Smart Register vient en aide aux enseignants en automatisant les opérations citées plus haut. par exemple, après avoir corrige les copies des élèves, l'enseignant n'a plus besoin de reporter manuellement les notes, cotes et statistiques... dans le registre. 
                        Desormais, après avoir corrige les copies, l'enseignant reporte juste dans Smart Register et obtient automatiquement tous les resultats ainsi que sur fichier PDF afin d'imprimer et ainsi gagner un temps considérable. <a  class="link_dotted" href="bilan.pdf">Cliquez ici pour télécharger un exemplaire en PDF</a></p>
                    
                    <h3>4- Comment se présente Smart Register ?</h3>
                    
                    
                    <ul>
                         <li>
                             
                                   <span class="tuto-text">L'accueil de Smart Register se présente comme suit</span><br>
                                     <div >
                                 <img src="<?= $hote ?>images/tuto/config.jpg" <?= $dimension ?> class="img-shadow" >
                            </div>
                                   <ol>
                                       <li> "CM2" : La classe actuellement tenue</li>
                                       <li> "Mai" : Le mois en cours</li>
                                       <li> La classe actuellement tenue.</li>
                                       <li> L'enseignant titulaire</li>
                                       <li> La date du jour</li>
                                       <li> "Mon Profil" permet de mentionner vos information comme votre nom, votre ville etc... <a class="link_dotted" href="#" target="blank" >Cliquez ici pour plus d'informations</a> </li>
                                       <li> "Mes élèves" Ce menu est très important car il permet d'indiquer les informations sur l'élève. par exemple le sexe des élèves permet de mieux calculer les statistiques par la suite <a class="link_dotted" href="<?= $hote ?>help/homeStudent.php" target="blank" >Cliquez ici pour plus d'informations</a></li>
                                       <li> "Mes évaluations" C'est dans ce menu que vous introduisez les notes des élèves afin de ressortir le bilan et le fichier à imprimer <a class="link_dotted" href="#" target="blank" >Cliquez ici pour plus d'informations</a> </li>
                                       <li> "Parametres" dans ce menu, vous avez la possibilite de sauvegarder vos donnees afin de les restituer ulterieurement en cas de soucis avec votre téléphone, c'est également ici que vous pouvez ajouter un nouvelle classe à encadrer... <a class="link_dotted" href="#" target="blank" >Cliquez ici pour plus d'informations</a> </li>
                                       <li> "Signaler un problème" Ce menu permet de signaler un soucis ou une difficulté à laquelle vous faites face <a class="link_dotted" href="#" target="blank" >Cliquez ici pour plus d'informations</a></li>
                                   
                                   </ol>
                                   
                           
                                </li>
                    </ul>
                    
                    <h3>5- Comment profiter pleinement de la puissance de Smart Register ?</h3>
                    
                    <p>Smart Register est l'un des plus puissants outils destiné aux enseignants, mais pour profiter pleinement de cette innovation, il faut s'y prendre de la bonne maniere. Il est question ici 
                    d'éliminer au maximum les taches effectuées mannuellement( calculer les notes, recopier dans le registre etc... ). supposons que vous ayez fini de corriger les copies des eleves. Apres cela, au lieu de les recopier dans le registre physique, reportez-les directement dans l'application ( <a class="link_dotted" href="#" target="blank" >En savoir plus sur comment reporter les notes</a> ).
                    une fois les notes de chaque discipline reportées, vous pouvez creer le fichier numerique PDF des resultats suivant : Totaux, moyennes, cotes rangs, statistiques et performances (<a class="link_dotted" href="#" target="blank" >En savoir plus sur comment creer un fichier PDF</a>).
                    ces fichier PDF pourront etre imprimes sur papier physique etvous n'aurz donc plus a les reporter à la main dans le registre physique. <a class="link_dotted" href="#" target="blank" >Cliquez ici pour télécharger un exemplaire de notes.</a>
                    </p>
                    
                    <h3>6- Bonus : Quels sont les avantages dont bénéficient les utilisateurs de Smart Register ?</h3>
                    
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
