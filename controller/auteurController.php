<?php
//  On vérifie que l'utilisateur est connecté et qu'il est bien auteur
auth();
if (!hasRole('auteur')) {
    redirectTo("auth", "login");
}

$dashboard = function() {
    $errors = [];
    // Chargement de la vue du dashboard de l'auteur
    loadView("auteur/dashboard", ["errors" => $errors], "side");
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
