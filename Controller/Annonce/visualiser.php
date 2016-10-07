<?php
require_once 'Modele/annonce.php';

$annonce = find($_GET['id']);

require_once 'Vue/Annonce/visualiser.php';
