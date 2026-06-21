<?php
//verifier champs vides
function isEmpty($key,$value,array &$errors,string $msg="Ce champs est obligatoire"){
     if (empty(trim($value))) {
        $errors[$key]=$msg;
     }
}

function isNumeric($value){
    return is_numeric($value);
}

function isString($value){
    return is_string($value);
}


function isMail($value){
    return filter_var($value, FILTER_VALIDATE_EMAIL);
}   

function validate(array $errors):bool{
    return count($errors)==0;
}

function validDataArticle(array $data):array{
    $errors = [];
    if(empty($data["titre"])){
        $errors["titreVide"] ="Veuillez remplir le titre";
    }
    if(empty($data["contenu"])){
        $errors["contenuVide"] ="Veuillez remplir le contenu";
    }
    if(empty($data["categorie"])){
            $errors["categorieVide"] ="Veuillez selectione la categorie";
        }
    if(!isset($_FILES['image_file']) || $_FILES['image_file']['error'] !== 0){
        $errors["image_urlVide"] ="Veuillez sélectionner une image";
        }
    return $errors;
}
