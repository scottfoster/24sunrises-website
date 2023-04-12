<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/home.php';
        break;
    case '/privacy' :
        require __DIR__ . '/privacy.php';
        break;
    default:
        require __DIR__ . '/home.php';
        break;
}

?>
