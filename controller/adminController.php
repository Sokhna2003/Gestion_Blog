<?php
require_once ROOT."/model/adminModel.php";

// On vérifie que l'utilisateur est connecté et qu'il est bien admin
auth();
if (!hasRole('admin')) {
    redirectTo("auth", "login");
}

$dashboard = function() {
    $errors = [];
    $totalUsers = countTable("utilisateurs");
    $totalAttente = countArticles('en_attente');
    $fileModeration = getArticlesAModerer();

    loadView("admin/dashboard", [
        "errors" => $errors,
        "totalUsers" => $totalUsers,
        "totalAttente" => $totalAttente,
        "fileModeration" => $fileModeration
    ], "side");
};

$actions = [
    "dashboard" => $dashboard
];

$action = $_REQUEST["action"] ?? "dashboard";

if (array_key_exists($action, $actions)) {
    $actions[$action]();
} else {
    echo "Action introuvable dans AdminController";
    exit();
}
