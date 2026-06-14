<?php
require_once(ROOT."bd/database.php"); 

// récupérer uniquement les articles au statut 'publie' avec les informations de leur auteur
function getArticlesPublies(): array {
    $sql = "SELECT a.*, u.nom, u.prenom, u.photo 
            FROM articles a 
            INNER JOIN utilisateurs u ON a.id_utilisateur = u.id_utilisateur 
            WHERE a.statut = 'publie' 
            ORDER BY a.date_publication DESC";
            
    return executeSelect($sql, [], false);
}
