<?php
require_once 'Modele/connexion.php';

$controller = 'Annonce';
if (!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
}

$action = 'index';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$path = 'Controller/'.$controller.'/'.$action.'.php';

if (file_exists($path)) {
    require_once $path;
} else {
    require_once 'Vue/404.php';
}
