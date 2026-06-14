<?php
require_once(ROOT."bd/database.php");

// Récupérer les articles enregistrés par le lecteur (simulation ou via table favoris)
// Pour le moment, on récupère les articles publiés pour remplir son tableau de lecture
function getArticlesEnregistres(): array {
    $sql = "SELECT * FROM articles WHERE statut = 'publie' ORDER BY date_publication DESC";
    return executeSelect($sql, [], false);
}

// Compter le nombre de favoris
function countFavoris(): int {
    $sql = "SELECT COUNT(*) as total FROM articles WHERE statut = 'publie'";
    $result = executeSelect($sql, [], true);
    return (int)($result['total'] ?? 0);
}
