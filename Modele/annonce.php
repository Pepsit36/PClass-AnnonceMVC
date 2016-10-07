<?php

function findAll()
{
    global $bdd;

    $resquest = $bdd->prepare('SELECT * FROM annonce');
    $resquest->execute();

    $annonces = $resquest->fetchAll();

    for ($i = 0; $i < count($annonces); $i++) {
        $annonces[$i]['datePublication'] = new DateTime($annonces[$i]['datePublication']);
    }

    return $annonces;
}

function find($id)
{
    global $bdd;

    $resquest = $bdd->prepare('SELECT * FROM annonce WHERE id=:id');
    $resquest->bindParam(':id', $id, PDO::PARAM_INT);
    $resquest->execute();

    $annonce = $resquest->fetch();

    $annonce['datePublication'] = new DateTime($annonce['datePublication']);

    return $annonce;
}