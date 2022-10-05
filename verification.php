<?php

$data = array_map('trim', $_POST);
$errors = [];

if(!isset($data['firstname']) || empty($data['firstname'])) {
    $errors[] = "Le prénom est obligatoire";
}

if(!isset($data['lastname']) || empty($data['lastname'])) {
    $errors[] = "Le nom est obligatoire";
}

if(!isset($data['email']) || empty($data['email'])) {
    $errors[] = "L'email est obligatoire";
}

if(!isset($data['password']) || empty($data['password'])) {
    $errors[] = "Le mot de passe est obligatoire";
}

if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'email n'est pas formaté correctement.";
}

if(strlen($data['password']) < 8) {
    $errors[] = "Le mot de passe doit contenir au moins 8 caractères";
}

if( strlen(filter_var($data['password'], FILTER_SANITIZE_NUMBER_INT)) == 0) {
    $errors[] = "Le mot de passe doit contenir au moins 1 chiffre";
}


if(count($errors) == 0) {

    echo "Youpi c'est réussi";
} else {
    echo "<p>Il y a des erreurs</p>";
    echo "<ul>";
    foreach($errors as $error)
    {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}