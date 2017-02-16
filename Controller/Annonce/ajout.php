<?php
require_once 'Modele/annonce.php';

$titre = '';
$contenu = '';
$prix = 0;

$erreurs = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //On vérifie l'ensemble des champs
    if (empty($_POST['titre'])) {
        $erreurs['titre'] = 'Votre titre ne doit pas être vide';
    } else {
        $titre = $_POST['titre'];

        if (strlen($titre) <= 2 || strlen($titre) >= 256) {
            $erreurs['titre'] = 'Votre titre doit faire plus de 2 caractères et moins de 256';
        }
    }

    if (empty($_POST['contenu'])) {
        $erreurs['contenu'] = 'Votre contenu ne doit pas être vide';
    } else {
        $contenu = $_POST['contenu'];

        if (strlen($contenu) <= 10) {
            $erreurs['contenu'] = 'Votre contenu doit faire plus de 10 caractères';
        }
    }

    if (empty($_POST['prix'])) {
        $erreurs['prix'] = 'Votre prix ne doit pas être vide';
    } else {
        $prix = $_POST['prix'];

        if ($prix <= 0) {
            $erreurs['prix'] = 'Votre prix doit être supérieur à 0€';
        }
    }

    //Si pas d'erreurs
    if (empty($erreurs)) {
        add($titre, $contenu, $prix);

        addFlash('Ajouté');

        header('Location: index.php');
    }
}

require_once 'Vue/Annonce/ajout.php';