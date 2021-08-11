<?php 

require './setting.php';

if(!isset($_SESSION['first_name'])){
    
    header("location:$hote");
    
}
session_start() ;

session_destroy();

header("location:$hote");
