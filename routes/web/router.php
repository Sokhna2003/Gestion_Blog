<?php
$controllers=[
    "admin"=>"admin",
    "auteur"=>"auteur",
    "lecteur"=>"lecteur",
    "home"=>"home",
    "auth"=>"auth",

];

 $controller=$_REQUEST["controller"]??"home";
 
 if (array_key_exists($controller, $controllers)) {
     $path=ROOT."controller/".$controllers[$controller]."Controller.php";
     }
     else{
         echo "controller introuvable";
         exit();
}
         
 require_once($path);