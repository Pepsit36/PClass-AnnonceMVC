<?php

function findAll() {
    global $bdd;

    $resquest = $bdd->prepare('SELECT * FROM annonce');
    $resquest->execute();

    $annonces = $resquest->fetchAll();

    for ($i = 0; $i < count($annonces); $i++) {
        $annonces[$i]['datePublication'] = new DateTime($annonces[$i]['datePublication']);
    }

    return $annonces;
}

function find($id) {
    global $bdd;

    $resquest = $bdd->prepare('SELECT * FROM annonce WHERE id=:id');
    $resquest->bindParam(':id', $id, PDO::PARAM_INT);
    $resquest->execute();

    $annonce = $resquest->fetch();

    $annonce['datePublication'] = new DateTime($annonce['datePublication']);

    return $annonce;
}

function add($titre, $contenu, $prix) {
    global $bdd;

    $resquest = $bdd->prepare('INSERT INTO annonce(titre, contenu, prix, datePublication) VALUES (:titre, :contenu, :prix, NOW())');
    $resquest->bindParam(':titre', $titre, PDO::PARAM_STR);
    $resquest->bindParam(':contenu', $contenu, PDO::PARAM_STR);
    $resquest->bindParam(':prix', $prix, PDO::PARAM_INT);
    $resquest->execute();

    $resquest->execute();
}