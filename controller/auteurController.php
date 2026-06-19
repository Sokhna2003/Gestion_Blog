<?php
require_once ROOT."/model/articleModel.php";

//  On vérifie que l'utilisateur est connecté et qu'il est bien auteur
auth();
if (!hasRole('auteur')) {
    redirectTo("auth", "login");
}

$dashboard = function() {
    $errors = [];
    $id_user = $_SESSION["user"]["id_utilisateur"]; // Récupération de l'ID de l'auteur connecté

    $articles = getArticlesByAuteur($id_user);
    $totalEnLigne = countArticles('publie', $id_user);
    $totalVues = sumVuesArticles($id_user);
    $totalEnAttente = countArticles('en_attente', $id_user);

    loadView("auteur/dashboard", [
        "errors" => $errors,
        "articles" => $articles,
        "totalEnLigne" => $totalEnLigne,
        "totalVues" => $totalVues,
        "totalEnAttente" => $totalEnAttente
    ], "side");
};

$listeArticles = function() {
    $id_user = $_SESSION["user"]["id_utilisateur"];
    
    $articles = getArticlesByAuteur($id_user);

    loadView("auteur/liste", [
        "articles" => $articles
    ], "side");
};

$actions = [
    "dashboard" => $dashboard,
    "listeArticles" => $listeArticles
];

$action = $_REQUEST["action"] ?? "dashboard";

if (array_key_exists($action, $actions)) {
    $actions[$action]();
} else {
    echo "Action introuvable dans AuteurController";
    exit();
}
