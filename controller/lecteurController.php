<?php
// On vérifie d'abord si l'utilisateur a le droit d'être ici
auth();
if (!hasRole('lecteur')) {
    redirectTo("auth", "login");
}

$dashboard = function() {
    $errors = [];
    // Chargement de la vue du dashboard du lecteur
    loadView("lecteur/dashboard", ["errors" => $errors], "side");
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
