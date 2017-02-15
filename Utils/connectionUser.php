<?php

function isConnected () {
    return (! empty($_SESSION['user']));
}

function connect($idUser) {
    $_SESSION['user'] = $idUser;
}

function disconnect() {
    unset($_SESSION['user']);
}
