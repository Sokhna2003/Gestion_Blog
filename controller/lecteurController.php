<?php
require_once ROOT."/model/lecteurModel.php";

// On vérifie d'abord si l'utilisateur a le droit d'être ici
auth();
if (!hasRole('lecteur')) {
    redirectTo("auth", "login");
}

$dashboard = function() {
    $errors = [];
    $articlesEnregistres = getArticlesEnregistres();
    $totalFavoris = countFavoris();

    loadView("lecteur/dashboard", [
        "errors" => $errors,
        "articles" => $articlesEnregistres,
        "totalFavoris" => $totalFavoris
    ], "side");
};

$actions = [
    "dashboard" => $dashboard
];

$action = $_REQUEST["action"] ?? "dashboard";

if (array_key_exists($action, $actions)) {
    $actions[$action]();
} else {
    echo "Action introuvable dans LecteurController";
    exit();
}
