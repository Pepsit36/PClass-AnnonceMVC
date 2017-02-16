<?php

function addFlash($message) {
    $_SESSION['flashbag'] = $message;
}

function getFlash() {
    return ($_SESSION['flashbag'])??null;
}