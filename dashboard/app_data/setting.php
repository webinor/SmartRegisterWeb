<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var_dump('$value');

$hote =  (@$_SERVER["HTTPS"] == "on" ||  $_SERVER["SERVER_NAME"] == "register.digit-space.com") ? "https://".$_SERVER["SERVER_NAME"]."/dashboard/" : "http://".$_SERVER["SERVER_NAME"]."/register/dashboard/"  ;

$main_hote = (@$_SERVER["HTTPS"] == "on") ? "https://".$_SERVER["SERVER_NAME"]."/" : "http://".$_SERVER["SERVER_NAME"]."/register/"  ;

$root = (@$_SERVER["HTTPS"] == "on" ||  $_SERVER["SERVER_NAME"] == "register.digit-space.com") ? $_SERVER['DOCUMENT_ROOT']."/dashboard" : $_SERVER['DOCUMENT_ROOT']."/register/dashboard"  ;

$second_hote = (@$_SERVER["HTTPS"] == "on" ||  $_SERVER["SERVER_NAME"] == "register.digit-space.com") ? "https://".$_SERVER["SERVER_NAME"]."/" : "http://".$_SERVER["SERVER_NAME"]."/register/"  ;



$page_facebook="DigitSpace";
$page_linkedin="";
$site_name="Digit Space";