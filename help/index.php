<?php
//session_start();

require '../setting.php';


 
if( isset($_GET['phnNum']) /*&& isset($_GET['appVer'])*/ && isset($_GET['lang']) /*&& isset($_GET['phnNum'])*/  ){
    
    $common=['Composition' , 'Activation' , 'Student'];
    
$available=['config',
    'addComposition' ,
   // 'UpdateComposition',
    'addStudent',
    'updateStudent', 
    'addSkill' ,
    'addPdf' ,
    'updateSkill',
    'deleteSkill' , 
    'addSubject', 
    'updateSubject',
    'deleteSubject'];
    
    $contain=false;
    
    $_GET['regMod']=$_GET['regMod']== 'ordinary' ? 'classik' : 'updated' ;
    
    
    if(!in_array($_GET['action'], $available)){
        
        header("location:$hote"."help/unavailable.php");
        
        return 0;
        
    }
    
    
    for($i=0 ; $i<sizeof($common) ; $i++){
        
                if (strpos($_GET['action'], $common[$i]) !== false){
                    
                    $contain=true;
                 
                    break; 
                    
                }
    }
    
    if($contain==true){
        
       // echo 'Common' ;
        
        header("location:$hote"."help/".$_GET['action'].".php?phnNum=".$_GET['phnNum']."&lang=fr");
        
        return 0;
    }
    else{
    
   //  echo 'Specific' ; 
        
      //   $_GET['action']=$_GET['page']== 'home' ? 'config' : $_GET['action'] ;
     
  header("location:$hote"."help/".$_GET['regMod']."/".$_GET['action'].".php?phnNum=".$_GET['phnNum']."&lang=fr");
    
  
  return 0;
  
  
    }
    

    
    
    
  // 
    
    
    
    
}

//echo root;
 
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
                    <h2 class="white-color" style="font-size: 30px;">Guides d'utilisation de Smart Register</h2>
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
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="<?= $hote ?>images/algorithme.jpg" alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags bases_algorithmes">Guide sur les algorithmes</div>
                                <div class="post-date">02/Oct/2019</div>
                            </div>
                            <h4 class="dark-color" >Guide d'utilisation du nouveau modele de registre</h4>
                         <!--     <a href="#" class="read-more" id="bases_algo">Telecharger le guide</a>-->
                            
                         <a href= "classik?regMod=ordinary&lang=fr" class="read-more">Acceder au guide</a>
                        </div>
                    </article>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="<?= $hote ?>images/1935_view.jpg" alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags bases_algorithmes">Logiciel </div>
                                <div class="post-date">03/Fev/2020</div>
                            </div>
                            <h4 class="dark-color" >Guide d'utilisation de l'ancien modele de registre</h4>
                         <!--     <a href="#" class="read-more" id="bases_algo">Telecharger le guide</a>-->
                       
                        <a href= "updated?regMod=application&lang=fr" class="read-more">Acceder au guide</a></div>
                    </article>
                </div>

              <!--  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="images/logiciels.png" alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags">Guide sur Les logiciels</div>
                                <div class="post-date">Indisponible</div>
                            </div>
                            <h4 class="dark-color">Démystifiez Les logiciels</h4>
                            
                        </div>
                    </article>
                </div>-->
                
            </div>
            
        </div>
    </div>
 
    <!-- Footer-Area -->
    <?php 
        
            include root."footer.php"; 
        
        
            include root."include/scripts.php"; 
        
       ?>
</body>

</html>
