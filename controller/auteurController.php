<?php
require_once ROOT."/model/articleModel.php";
require_once ROOT."/model/categorieModel.php";

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

$ajoutArticle = function() {
    $errors = [];

    if (isset($_POST["add_article"])) {
        $errors = validDataArticle($_POST);
        
        if ($_POST["categorie"] === "autres") {
            // Comportement si "autres" est sélectionné
        }
        if (validate($errors)) {
            $titre = trim($_POST['titre']);
            $contenu = trim($_POST['contenu']);
            $categorie = trim($_POST['categorie']);
            $id_utilisateur = $_SESSION["user"]["id_utilisateur"];
            $nom_image = time() . '_' . $_FILES['image_file']['name'];
            if (move_uploaded_file($_FILES['image_file']['tmp_name'], ROOT . "public/uploads/" . $nom_image)) {
                $image_url = WEBROOT . "uploads/" . $nom_image;
            }
            else {
                $image_url = 'https://unsplash.com';
            }

            $success = insertArticle($titre, $contenu, $categorie,$image_url, $id_utilisateur);
            
            if ($success !== false) {
                redirectTo("auteur", "listeArticles");
            } else {
                $errors["global"] = "Erreur lors de l'enregistrement de l'article en base de données.";
            }

        }
        
    }
    $categories = getAllCategories();

    loadView("auteur/ajout", [
        "errors" => $errors,
        "categories" => $categories,
    ], "side");
};

$actions = [
    "dashboard" => $dashboard,
    "listeArticles" => $listeArticles,
    "ajoutArticle" => $ajoutArticle
];

$action = $_REQUEST["action"] ?? "dashboard";

if (array_key_exists($action, $actions)) {
    $actions[$action]();
} else {
    echo "Action introuvable dans AuteurController";
    exit();
}
