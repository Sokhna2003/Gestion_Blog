<?php
function dd($test)
{
    echo "<pre>";
    var_dump($test);
    echo "</pre>";
    die("Yallah pitié");
}

function loadView(string $view,array $datas=[],string $layout="side") {
    ob_start();
    extract($datas);
    require_once(ROOT."view/".$view.".php");
    $content=ob_get_clean();
    require_once ROOT."/view/layout/$layout.layout.php";


}

function path(string $controller, string $action):string{
    return WEBROOT."?controller=$controller&action=$action";
}
function redirectTo(string $controller, string $action):void{
    header('Location:'.WEBROOT."?controller=$controller&action=$action");
    exit();

}

function countTable(string $table){
    $sql="SELECT COUNT(*) as total FROM $table";
   return executeSelect($sql,[],true)["total"];
}

function countArticles(?string $statut = null, ?int $id_utilisateur = null): int {
    $sql = "SELECT COUNT(*) as total FROM articles WHERE 1=1";
    $params = [];

    // Si on demande un statut précis (ex: 'publie' ou 'en_attente')
    if ($statut !== null) {
        $sql .= " AND statut = :statut";
        $params['statut'] = $statut;
    }

    // Si on demande les articles d'un auteur précis
    if ($id_utilisateur !== null) {
        $sql .= " AND id_utilisateur = :id_user";
        $params['id_user'] = $id_utilisateur;
    }

    return (int)executeSelect($sql, $params, true)["total"];
}


function isConnected(){
    return isset($_SESSION["user"]);
}

function auth(){
    if (!isConnected()) {
        redirectTo("auth","login");
    }
}

function hasRole(string $role){
    return $_SESSION["user"]["role"]==$role;
}