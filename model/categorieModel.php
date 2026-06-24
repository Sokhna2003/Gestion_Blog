<?php
require_once(ROOT."bd/database.php");


function getAllCategories(): array {
    $sql = "SELECT * FROM categories ORDER BY nom_categorie ASC";
    return executeSelect($sql, [], false);
}

function getFilteredCategories(?string $search = null, ?string $date = null): array {
    $sql = "SELECT * FROM categories WHERE 1=1";
    $params = [];

    if (!empty($search)) {
        $sql .= " AND nom_categorie LIKE :search";
        $params['search'] = "%" . $search . "%";
    }

    if (!empty($date)) {
        $sql .= " AND DATE(date_creation) = :date_crea";
        $params['date_crea'] = $date;
    }

    $sql .= " ORDER BY nom_categorie ASC";
    return executeSelect($sql, $params, false);
}

function insertCategorie(string $nom_categorie): bool {
    $sql = "INSERT INTO categories (nom_categorie) VALUES (:nom)";
    $resultat = executeUpdate($sql, ["nom" => $nom_categorie]);
    if ($resultat !== false) {
        return true;
    }
    
    return false;
}

function deleteCategorie(int $id_categorie): bool {
    $sql = "DELETE FROM categories WHERE id_categorie = :id";
    return executeUpdate($sql, ["id" => $id_categorie]) > 0;
}