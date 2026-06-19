<?php
require_once ROOT."model/homeModel.php";

$index = function() {
    $errors = [];
    
    $articles = getArticlesPublies();

    loadView("home/home", [
        "errors" => $errors,
        "articles" => $articles
    ], "public");
};

$actions = [
    "index" => $index
];

$action = $_REQUEST["action"] ?? "index";

if (array_key_exists($action, $actions)) {
    $actions[$action]();
} else {
    echo "Action introuvable dans HomeController";
    exit();
}
