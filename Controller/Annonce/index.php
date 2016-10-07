<?php
require_once 'Modele/annonce.php';

$annonces = findAll();

require_once 'Vue/Annonce/index.php';
