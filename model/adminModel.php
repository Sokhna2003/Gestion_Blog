<?php
require_once(ROOT."bd/database.php");

// Récupérer la liste de tous les articles en attente pour la file de modération
function getArticlesAModerer(): array {
    $sql = "SELECT a.*, u.nom, u.prenom, u.photo 
            FROM articles a 
            INNER JOIN utilisateurs u ON a.id_utilisateur = u.id_utilisateur 
            WHERE a.statut = 'en_attente' 
            ORDER BY a.date_publication ASC";
    return executeSelect($sql, [], false);
}

function getAllArticles(): array {
    $sql = "SELECT a.*, u.nom, u.prenom, u.email, u.photo 
            FROM articles a 
            INNER JOIN utilisateurs u ON a.id_utilisateur = u.id_utilisateur 
            ORDER BY a.date_publication DESC";
    return executeSelect($sql, [], false);
}

function approuverArticle(int $id_article) {
    $sql = "UPDATE articles SET statut = 'publie', date_publication = CURRENT_TIMESTAMP WHERE id_article = :id";
    return executeUpdate($sql, ["id" => $id_article]);
}

function rejeterArticle(int $id_article) {
    $sql = "UPDATE articles SET statut = 'archive' WHERE id_article = :id";
    return executeUpdate($sql, ["id" => $id_article]);
}

