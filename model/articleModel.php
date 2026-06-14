<?php
require_once(ROOT."bd/database.php"); 

// Récupérer tous les articles d'un auteur spécifique
function getArticlesByAuteur(int $id_utilisateur): array {
    $sql = "SELECT * FROM articles WHERE id_utilisateur = :id ORDER BY date_publication DESC";
    return executeSelect($sql, ["id" => $id_utilisateur], false);
}

// Compter le nombre d'articles en ligne (publiés) d'un auteur
function countArticlesEnLigne(int $id_utilisateur): int {
    $sql = "SELECT COUNT(*) as total FROM articles WHERE id_utilisateur = :id AND statut = 'publie'";
    $result = executeSelect($sql, ["id" => $id_utilisateur], true);
    return (int)($result['total'] ?? 0);
}

// Faire la somme des vues de tous les articles d'un auteur
function sumVuesArticles(int $id_utilisateur): int {
    $sql = "SELECT SUM(vues) as total FROM articles WHERE id_utilisateur = :id";
    $result = executeSelect($sql, ["id" => $id_utilisateur], true);
    return (int)($result['total'] ?? 0);
}

// Compter les articles en attente de validation pour cet auteur
function countArticlesEnAttente(int $id_utilisateur): int {
    $sql = "SELECT COUNT(*) as total FROM articles WHERE id_utilisateur = :id AND statut = 'en_attente'";
    $result = executeSelect($sql, ["id" => $id_utilisateur], true);
    return (int)($result['total'] ?? 0);
}
