<?php
require_once(ROOT."bd/database.php"); 

// Récupérer tous les articles d'un auteur spécifique
function getArticlesByAuteur(int $id_utilisateur): array {
    $sql = "SELECT * FROM articles WHERE id_utilisateur = :id ORDER BY date_publication DESC";
    return executeSelect($sql, ["id" => $id_utilisateur], false);
}

// Faire la somme des vues de tous les articles d'un auteur
function sumVuesArticles(int $id_utilisateur): int {
    $sql = "SELECT SUM(vues) as total FROM articles WHERE id_utilisateur = :id";
    $result = executeSelect($sql, ["id" => $id_utilisateur], true);
    return (int)($result['total'] ?? 0);
}

function insertArticle(string $titre, string $contenu, string $categorie,string $image_url, int $id_utilisateur){
    $sql = "INSERT INTO articles (titre, contenu, categorie, image, statut, id_utilisateur) 
            VALUES (:titre, :contenu, :categorie, :image, 'en_attente', :id_user)";
    
    $data = [
        "titre" => $titre,
        "contenu" => $contenu,
        "categorie" => $categorie,
        "image" => $image_url,
        "id_user" => $id_utilisateur
    ];
    return executeUpdate($sql, $data);
}

