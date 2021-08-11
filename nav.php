


<nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" id="navbar_toogle" class="navbar-toggle benchmarck" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="<?= $hote ?>">Smart Register<!--<img src="images/logo.png" alt="Logo">--></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li class="active"><a href="<?= $hote ?>#home_page">Accueil</a></li>
                    <li><a href="<?= $hote ?>#about_page">A propos</a></li>
                    <!----><li><a href="<?= $hote ?>#features_page">Fonctionnalités</a></li>
                    <!----><li><a href="#gallery_page">Gallerie</a></li>
                   <?php  if(isset($_GET['regMod'])){  ?> <li><a href="<?= $hote ?>#price_page">Prix</a></li><?php  }  ?>
                    <!----><li><a href="#questions_page">FAQ</a></li>
                    <li><a href="<?= $hote ?>#contact_page">Contacts</a></li>
                    <li><a href="<?= $hote ?>support">Supports de cours en <strong>TIC</strong></a></li><!---->
                
                <?php /*
                if (!isset($_SESSION['first_name'])){
                    ?>
                    <li>
                        <a href="<?= $hote ?>login">Se connecter</a><!---->
                </li>
                    <?php
                }
                else {?>
                    <li>
                    <a href="<?= $hote ?>out.php">Se deconnecter</a><!---->
                </li><?php
                }
                */
                ?>
                </ul>
            </div>
        </div>
    </nav>