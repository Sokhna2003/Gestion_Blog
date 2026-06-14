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
    $totalEnLigne = countArticlesEnLigne($id_user);
    $totalVues = sumVuesArticles($id_user);
    $totalEnAttente = countArticlesEnAttente($id_user);

    loadView("auteur/dashboard", [
        "errors" => $errors,
        "articles" => $articles,
        "totalEnLigne" => $totalEnLigne,
        "totalVues" => $totalVues,
        "totalEnAttente" => $totalEnAttente
    ], "side");
};

$actions = [
    "dashboard" => $dashboard
];

$action = $_REQUEST["action"] ?? "dashboard";

if (array_key_exists($action, $actions)) {
    $actions[$action]();
} else {
    echo "Action introuvable dans AuteurController";
    exit();
}
