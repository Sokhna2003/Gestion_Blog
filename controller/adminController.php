<?php
require_once ROOT."/model/adminModel.php";
require_once ROOT."/model/categorieModel.php";

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

$categories = function() {
    $errors = [];

    if (isset($_GET['delete_id'])) {
        deleteCategorie((int)$_GET['delete_id']);
        redirectTo("admin", "categories");
    }
    
     // Récupération des filtres depuis l'URL
    $search = $_GET['search'] ?? null;
    $date = $_GET['date_filtre'] ?? null;

    // Récupération des données filtrées
    $listCategories = getFilteredCategories($search, $date);

    loadView("admin/listeCategories", [
        "errors" => $errors,
        "categories" => $listCategories,
        "search" => $search,
        "date_filtre" => $date
    ], "side");
};

$ajoutCategorie = function() {
    $errors = [];

    if (isset($_POST["add_category"])) {
        isEmpty("nom_categorie", $_POST["nom_categorie"], $errors, "Le nom de la catégorie est obligatoire");
        
        if (validate($errors)) {
            $nom = trim($_POST["nom_categorie"]);
            
            $verification = getFilteredCategories($nom);
            
            if (!empty($verification)) {
                $errors["nom_categorie"] = "Cette catégorie existe déjà.";
            } else {
                 $success = insertCategorie($nom);
                if ($success) {
                    redirectTo("admin", "categories"); 
                } else {
                    $errors["nom_categorie"] = "Erreur lors de l'ajout.";
                }
            }
         }
    }

    loadView("admin/ajoutCategories", [
        "errors" => $errors
    ], "side");
};

$articles = function() {
    $errors = [];

    if (isset($_GET['approve_id'])) {
        approuverArticle((int)$_GET['approve_id']);
        redirectTo("admin", "articles");
    }
    if (isset($_GET['reject_id'])) {
        rejeterArticle((int)$_GET['reject_id']);
        redirectTo("admin", "articles");
    }
    $allArticles = getAllArticles();

    loadView("admin/listeArticle", [
        "errors" => $errors,
        "articles" => $allArticles
    ], "side");
};

$actions = [
    "dashboard" => $dashboard,
    "categories" => $categories,
    "ajoutCategorie" => $ajoutCategorie,
    "articles" => $articles
];

$action = $_REQUEST["action"] ?? "dashboard";

if (array_key_exists($action, $actions)) {
    $actions[$action]();
} else {
    echo "Action introuvable dans AdminController";
    exit();
}
