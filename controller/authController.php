<?php
require_once ROOT."/model/authModel.php";
$logout=function(){
    session_unset();
    session_destroy();
    redirectTo("auth","login");

};

$login=function(){
    if(isConnected()){
        $role = $_SESSION["user"]["role"];
        redirectTo($role, "dashboard");
    }
   $errors=[];
    if (isset($_POST["connect"])) {
        isEmpty("email",$_POST["email"],$errors,"Veuillez renseigner l'email");
        isEmpty("password",$_POST["password"],$errors,"Veuillez renseigner le password");
        
        if (validate($errors)) {
            $user=login($_POST["email"]);
            // dd($user);
            if ($user && $_POST["password"] == $user["mot_de_passe"]) {
                $_SESSION["user"]=$user;
                $role = $user["role"];
                redirectTo($role, "dashboard");
            }else{
                $errors["connect"]="email ou mot de passe incorrect";
            }
        }
    }
loadView("auth/login",["errors"=>$errors],"auth");
};




$actions=[
    "login"=>$login,
    "logout"=>$logout, 
];
 $action=$_REQUEST["action"]??"login";
 
 if (array_key_exists($action, $actions)) {
         $actions[$action]();
     }
     else{
         echo "Action introuvable dans AuthController";
         exit();
}
         
