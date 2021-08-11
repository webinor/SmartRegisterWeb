<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$hote = (@$_SERVER["SERVER_NAME"] != "127.0.0.1") ? "https://".$_SERVER["SERVER_NAME"]."/" : "http://".$_SERVER["SERVER_NAME"]."/register/"  ;

if((@$_SERVER["SERVER_NAME"] == "127.0.0.1")){
    
    define("root", $_SERVER['DOCUMENT_ROOT']."/register/");
    
}
else{
    
    define("root", $_SERVER['DOCUMENT_ROOT']."/");
    
}

$dimension = 'width="80%" height="80%"';






