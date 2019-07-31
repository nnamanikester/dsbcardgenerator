<?php

$request = $_SERVER['REQUEST_URI'];


switch ($request) {

    case '/cardgenerator/':
        require __DIR__ . '/public/index.php';
        break;

    case '/cardgenerator':
        require __DIR__ . '/public/index.php';
        break;

    case '/cardgenerator/card-request':
        require __DIR__ . '/public/card-request.php';
        break;

    case '/cardgenerator/about':
        require __DIR__ . '/public/about.php';
        break;

    case '/cardgenerator/home':
        require __DIR__ . '/public/index.php';
        break;

    case '/cardgenerator/contact':
        require __DIR__ . '/public/contact.php';
        break;

    default:
        require __DIR__ . '/public/404.php';
        break;

}
